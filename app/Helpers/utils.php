<?php
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