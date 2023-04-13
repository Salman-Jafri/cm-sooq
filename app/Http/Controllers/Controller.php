<?php

namespace App\Http\Controllers;
// use DB;
// use Config;
// use File;
// use Image;
// use Arr;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Http\Request;
// use App\Models\Master\TransactionIds;
// use App\Models\Master\Transaction;
// use App\Models\Master\MemberIds;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //hardcoded oman country code
    protected $countryMobileCode = "+968";
    protected $dvtype = "web";
    protected $checkCurrency = "&nbsp;OMR&nbsp;";
    protected $slang = "en";

    public function file_icon($file_path,$size='lg')
    {

      $ext = pathinfo($file_path,PATHINFO_EXTENSION);
      if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif' || $ext=='webp' || $ext=='PNG')
      {
          $icon = '<i class="fas fa-file-image fa-'.$size.'" style="color:#0754f9;"></i>';
      }
      else if($ext=='xls' || $ext=='xlsx')
      {
          $icon = '<i class="fas fa-file-excel fa-'.$size.'" style="color:#1C6C40;"></i>';
      }
      else if($ext=='doc' || $ext=='docx')
      {
          $icon = '<i class="fas fa-file-word fa-'.$size.'" style="color:#2A5395;"></i>';
      }
      else if($ext=='ppt' || $ext=='pptx')
      {
          $icon = '<i class="fas fa-file-powerpoint fa-'.$size.'" style="color:#CB4424;"></i>';
      }
      else if($ext=='pdf')
      {
          $icon = '<i class="fas fa-file-pdf fa-'.$size.'" style="color:#EC0F01;"></i>';
      }
      else if($ext=='txt')
      {
          $icon = '<i class="fas fa-file fa-lg"></i>';
      }
      else
      {
         $icon = '<i class="fas fa-infinity fa-'.$size.'"></i>';
      }
      return $icon;
    }

    // private function generateTransactionIds()
    // {

    //     $trnids = new TransactionIds;
    //     $prefix='TRN-';
    //     $transaction_id=$prefix.'1';
    //     $trn_table = $trnids->orderBy('uid','desc')->first();
    //     if($trn_table)
    //     {
    //        $exp = explode('-',$trn_table->transaction_id);
    //        $exp = end($exp);
    //        $exp = (int)$exp+1;
    //        $transaction_id = $prefix.$exp;
    //     }
    //     $chkInsert = $trnids->insert(['transaction_id'=>$transaction_id]);
    //     if($chkInsert)
    //     {
    //         return $transaction_id;
    //     }
    //     return 'error';
    // }

    // public function registerTransaction()
    // {
    //     $transaction_id = $this->generateTransactionIds();
    //     if($transaction_id!='error')
    //     {

    //         $table_affected = 'members';
    //         $record_id      = 1;
    //         $action= 'deleted';
    //         $user_type = 'admin';
    //         $user_id= 1;
    //         $platform_used = 'web';
    //         $created_at   = date('Y-m-d H:i:s');
    //         $updated_at   = date('Y-m-d H:i:s');
    //         $description = 'Table : '.$table_affected.' Record:'.$record_id.' was '.$action.' By '.$user_type.' having id:'.$user_id;

    //         Transaction::insert([
    //             'transaction_id'=>$transaction_id,
    //             'table_affected'=>$table_affected,
    //             'record_id'=>$record_id,
    //             'description'=>$description,
    //             'user_type'=>$user_type,
    //             'user_id'=>$user_id,
    //             'platform_used'=>$platform_used,
    //             'created_at'=>$created_at,
    //             'updated_at'=>$updated_at
    //         ]);

    //     }
    // }

    // public function generateMemberIds()
    // {
    //     $prefix    = 'MMBR-';
    //     $pre_zero  = 14;
    //     $increment = 1;
    //     $memberids = new MemberIds;
    //     $mid_table = $memberids->orderBy('uid','desc')->first();
    //     if($mid_table)
    //     {
    //         $mid_table->member_id;
    //         $exp = explode('-',$mid_table->member_id);
    //         $exp = end($exp);
    //         $increment = $exp+1;
    //     }
    //     $zeros     = $this->generateZeros($pre_zero,$increment);
    //     $member_id = $prefix.$zeros.$increment;
    //     $chkInsert = $memberids->insert(['member_id'=>$member_id]);
    //     if($chkInsert)
    //     {
    //         return $member_id;
    //     }
    //     return 'error';
    // }

    // private function generateZeros($required,$received)
    // {
    //     $rclen = strlen($received);
    //     $zeros = ($required-$rclen);
    //     $return=null;
    //     for($i=0;$i<=$zeros;$i++)
    //     {
    //         $return .='0';
    //     }
    //     return $return;
    // }

    // private function createMemberDirectory($memberId)
    // {
    //     $path = memberMainPath();
    //     $member_path = memberPath($memberId);
    //     $errors = 0;
    //     $error_log=array();
    //     if(!File::exists($path))
    //     {
    //         if(!File::makeDirectory($path))
    //         {
    //             $errors++;
    //             array_push($error_log,'Unable to create : '.$path);
    //         }
    //     }
    //     if(!File::exists($member_path))
    //     {
    //         if(!File::makeDirectory($member_path))
    //         {
    //             $errors++;
    //             array_push($error_log, 'Unable to create : '.$member_path);
    //         }
    //     }
    //     if($errors>0)
    //     {
    //         return implode('<br>',$error_log);
    //     }
    //     else
    //     {
    //         return 'success';
    //     }
    // }


}
