<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

function memberMainPath()
{
	return public_path('members_data');
}
function memberPath($uid=null)
{
	return public_path('members_data/'.$uid);
}

function hlp_gen_years($start=null,$rev=false,$add=null,$last_select=null)
{
  if($start==null)
  {
    $start=2000;
  }
  $end = date('Y');
  if($add!=null)
  {
    $end = ($end+$add);
  }
  $years=null;
  if($rev)
  {
      for($i=$start;$i<=$end;$i++)
      {
        $years .='<option value="'.$i.'" '.$last_select.'>'.$i.'</option>';
      }
  }
  else
  {
      for($i=$end;$i>=$start;$i--)
      {
        $years .='<option value="'.$i.'" '.$last_select.'>'.$i.'</option>';
      }

  }
  return $years;
}

function get_column($table,$col_sname,$col_sval,$col_gname,$rval='n/a')
{
    $col_gval=$rval;
    $last_row = DB::table($table)->where($col_sname,$col_sval)->first();
    if($last_row)
    {
      $col_gval=$last_row->$col_gname;
    }
    return $col_gval;
}


 function visits_all()
 {
    $ip_address=request()->ip();
    $agent = new Agent();
    $platform= $agent->platform();
    if($agent->isDesktop())
    {
     $device_type= 'desktop';
    }
    else if($agent->isPhone() || $agent->isMobile())
    {
     $device_type= 'mobile';
    }
    else if($agent->isTablet())
    {
     $device_type= 'tablet';
    }

   $browser = $agent->browser();
   $bversion = $agent->version($browser);
   $pversion = $agent->version($platform);

    $ins_array = array(
        'ip_address'=>$ip_address,
        'device_type'=>$device_type,
        'platform'=>$platform,
        'platform_version'=>$pversion,
        'browser_version'=>$browser.'-'.$bversion,
        'dated'=>date('Y-m-d h:m:i'),
    );
     DB::table('ac_web_visits')->insert($ins_array);

 }

function visits_links()
{

   $excluded_links = array(
        'https://cars-importers.com/cars/list/make/favicon.ico'
    );
   $referrer = url()->previous();
   $link     = url()->current();
   if(!in_array($link, $excluded_links))
   {

    $ip_address=request()->ip();
    $agent = new Agent();
    $platform= $agent->platform();
    if($agent->isDesktop())
    {
     $device_type= 'desktop';
    }
    else if($agent->isPhone() || $agent->isMobile())
    {
     $device_type= 'mobile';
    }
    else if($agent->isTablet())
    {
     $device_type= 'tablet';
    }
    $browser = $agent->browser();
    $bversion = $agent->version($browser);
    $ins_array = array(
        'referrer'=>$referrer,
        'link'=>$link,
        'ip_address'=>$ip_address,
        'device_type'=>$device_type,
        'platform'=>$platform,
        'platform_version'=>$platform.'-'.$agent->version($platform),
        'browser_version'=>$browser.'-'.$bversion,
        'dated'=>date('Y-m-d h:m:i'),
      );
    DB::table('ac_web_link_visits')->insert($ins_array);

   }

}


function visits_car($car_id)
{
    $ip_address=request()->ip();
    $agent = new Agent();
    $platform= $agent->platform();
    if($agent->isDesktop())
    {
       $device_type= 'desktop';
   }
   else if($agent->isPhone() || $agent->isMobile())
   {
       $device_type= 'mobile';
   }
   else if($agent->isTablet())
   {
       $device_type= 'tablet';
   }

   $browser = $agent->browser();
   $bversion = $agent->version($browser);
   $pversion = $agent->version($platform);

   $ins_array = array(
       'car_id'=>$car_id,
       'ip_address'=>$ip_address,
       'device_type'=>$device_type,
       'platform'=>$platform,
       'platform_version'=>$pversion,
       'browser_version'=>$browser.'-'.$bversion,
       'dated'=>date('Y-m-d h:m:i'),
   );
   DB::table('ac_web_car_visits')->insert($ins_array);

}


function hlp_nf($string,$dp=0,$dh=true)
{
   if($dh)
   {
      return str_replace(',','',number_format($string,$dp));
   }
   else
   {
      return number_format($string,$dp);
   }
}


function hlp_format_date($format,$date)
{
  $text = date($format,strtotime($date));
  return $text;
}

function hlp_posted_at($timestamp)
{
    $first_date = new DateTime($timestamp);
    $second_date = new DateTime(date('Y-m-d h:i:s'));
    $difference = $first_date->diff($second_date);
    return format_interval($difference);
}


function format_interval(DateInterval $interval)
{
      // $ci =& get_instance();

      $result =null;
      // if($ci->session->lang=='_ar')
      // {
      //     if ($interval->y)
      //     {
      //       $result .= $interval->format("%y");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' سنة ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' سنوات  ';
      //       }
      //     }
      //     else if ($interval->m)
      //     {
      //       $result .= $interval->format("%m");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' شهر ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' أشهر   ';
      //       }
      //     }
      //     else if ($interval->d)
      //     {
      //       $result .= $interval->format("%d");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' يوم ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' أيام  ';
      //       }
      //     }
      //     else if ($interval->h)
      //     {
      //       $result .= $interval->format("%h");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' ساعة ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' ساعات  ';
      //       }
      //     }
      //     else if ($interval->i)
      //     {
      //       $result .= $interval->format("%i");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' دقيقة ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' دقائق  ';
      //       }
      //     }
      //     else if ($interval->s)
      //     {
      //       $result .= $interval->format("%s");
      //       if($result<2)
      //       {
      //           $result ='قبل '.$result.' ثانية ';
      //       }
      //       else
      //       {
      //           $result ='قبل '.$result.' ثواني  ';
      //       }
      //     }

      // }
      // else
      // {
         if ($interval->y) { $result .= $interval->format("%y year(s) ago"); }
         else if ($interval->m) { $result .= $interval->format("%m month(s) ago"); }
         else if ($interval->d) { $result .= $interval->format("%d day(s) ago "); }
         else if ($interval->h) { $result .= $interval->format("%h hour(s) ago"); }
         else if ($interval->i) { $result .= $interval->format("%i minute(s) ago"); }
         else if ($interval->s) { $result .= $interval->format("%s second(s) ago"); }
      // }

      return $result;
}

function hide_mail($email)
{
  $mail_part = explode("@", $email);
  $mail_part[0] = str_repeat("*", strlen($mail_part[0]));
  return implode("@", $mail_part);
}

