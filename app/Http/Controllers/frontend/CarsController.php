<?php

namespace App\Http\Controllers\frontend;
use App\Models\admin\Cars;
use App\Models\admin\CarsFiles;
use App\Models\admin\CarsMake;
use App\Models\admin\CarsModel;
use App\Models\admin\Following;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\WatchCount;
use App\Models\admin\Wishlist;
use App\Models\admin\Translation;
use App\Models\admin\CallsCount;
use App\Models\admin\WhatsappCount;
use App\Models\admin\FollowCount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function loadMore(Request $request)
    {
        $errors = $request->validate([
            'page_type' => 'required',
            'page_id' => 'required',
            'limit' => 'required',
            'start' => 'required',
        ]);

        $page_type = $request->page_type;
        $limit = $request->limit;
        $start = $request->start;


        if($page_type=='home' || $page_type=='home_mobile')
		{

            $car_data = Cars::where('car_status','Approved')
                ->where('is_inactive',0)->orderBy('approved_date', 'DESC')
                ->skip($start)->take($limit)
                ->with(['carsMake','carsModel','carsTransmission','carsFuelType','carsDriveLine'])
                ->get();

			$data['list_cars'] = $car_data;

			$data['cars_list_two'] = $this->cars_list_two($car_data);
			echo $data['cars_list_two'];
		}
    }

    public function getMainImg($car_id,$no_main=null)
	{
        $car_files_data = CarsFiles::where('car_id',$car_id)
                ->orderBy('is_main','DESC');

		if($no_main!=null)
		{
			$car_files_data = $car_files_data->where('is_main',0);
		}
        $car_files_data = $car_files_data->first();
		if($car_files_data)
		{
			$image_file = $car_files_data->file_up_name;
			if(file_exists(public_path('car_uploads') .'/'.$image_file))
			{
				return url('car_uploads') .'/'.$image_file;
			}
			else
			{
				// return $this->getMainImg($car_id,'yes');
    			return url('car_uploads').'/no-car-image-placeholder.png';

			}
		}
		else
		{
			return url('car_uploads').'/no-car-image-placeholder.png';
		}

	}

    public function details(Request $request, string $id)
    {

        $car_id = $id;

        $data['offered_cars'] = Cars::where('car_status','Approved')
                ->where('is_inactive',0)
                ->orderBy('approved_date', 'DESC')->get()->count();


        $data['cars_make'] = CarsMake::orderBy('make', 'ASC')->get();

        $data['wishlist'] = null;


        if (Auth::check())
        {
            $member_id = Auth::user()->uid;
            $wishlist = Wishlist::where('member_id',$member_id)->where('car_id',$car_id)->get()->count();

            if($wishlist == 1)
            {
                $data['wishlist'] = 'text-danger';
            }
        }
        else
        {
            $member_id = NULL;
        }



        $car = Cars::find($car_id);
        $car_member_id = $car->member_id;

        $cars_query = Cars::where('uid',$car_id)
            ->with(['carsMake','carsModel','carsTransmission','carsFuelType','carsDriveLine','carsCylinder','carsKeys','carsInterior','carsExterior','carsOptions','carsOdometer','carsMember']);


        if($member_id!=$car_member_id)
		{
			$cars_query->where('car_status','Approved')
			        ->where('is_inactive',0);
		}

        $car_data = $cars_query->first();
        if(!empty($car_data))
        {
            $cars = $car_data;

            $make = $cars->carsMake->make;
			$make_ar  = $cars->carsMake->make;

            $model = $cars->carsModel->model;
			$model_ar = $cars->carsModel->make_ar;

            $data['cylinders'] = $cars->cylinders;
            $data['transmission'] = $cars->carsTransmission->transmission;
            $data['ckeys'] = $cars->carsKeys->ckeys;
            $data['color_interior'] = $cars->carsInterior->interior_color;
            $data['color_ishade'] = $cars->carsInterior->color_code;
            $data['color_exterior'] = $cars->carsExterior->exterior_color;
            $data['color_xshade'] = $cars->carsExterior->color_code;
            $data['options'] = $cars->carsOptions->options;
            $data['fuel_type'] = $cars->carsFuelType->fuel_type;
            $data['drive_line'] = $cars->carsDriveLine->drive_line;
            $data['odometer'] = $cars->carsOdometer->odometer;
            $data['lot']= $cars->lot;
		    $data['vin']= $cars->vin;

            $title = $cars->year.'&nbsp;'.$make.'&nbsp;'.$model;
			$title_ar =$cars->year.'&nbsp;'.$make_ar.'&nbsp;'.$model_ar;
			$link  = route('car.details',$cars->uid);

			$call_number = $cars->carsMember ? $cars->carsMember->member_contact : "";

            $title = $cars->year.'&nbsp;'.$make.'&nbsp;'.$model;
			$title_ar =$cars->year.'&nbsp;'.$make_ar.'&nbsp;'.$model_ar;
			$mylink = $link;
			$msgaskprice = 'How much you asking for this car %0a'.$title.' in sooq-cars %0a%0a';
			$msgaskprice .='%0a%0a'.$mylink;


            $ask_link = 'https://api.whatsapp.com/send/?phone='.$this->countryMobileCode.$call_number.'&text='.$msgaskprice.'&app_absent=0';
			$data['cars_id'] = $cars->uid;
			// ask price
			$data['ask_link'] = $ask_link;
			$data['make_id'] = $cars->make_id;
			$data['model_id'] = $cars->model_id;
			$data['make_title'] = $make;
			$data['model_title'] = $model;
			$data['car_year'] = $cars->year;
			$data['title'] = $title;
			$data['title_ar'] = $title_ar;
			$data['added_on'] = hlp_posted_at($cars->approved_date);
			$data['sell_price']= $cars->sell_price;
			$data['car_id'] =$car_id;
			$data['buyer_id']= $cars->buyer_id;
			$data['member_id'] = $cars->member_id;
			$data['car_notes'] = $cars->notes;
			$data['expected_arrival_date']=$cars->expected_arrival_date;
			$data['published_date']=hlp_format_date('d-m-Y',$cars->created_at);
			$car_report= $cars->report_file;

            if(is_file(public_path('car_reports').'/'.$car_report))
			{
				if($this->dvtype=='mobile')
				{
					$data['car_report']='<a href="'.url('car_reports/'.$car_report).'" class="text-danger" download><i class="fas fa-download"></i></a>';
				}
				else
				{
					$data['car_report']='<a href="'.url('car_reports/'.$car_report).'" class="text-danger" download><i class="fas fa-download"></i></a>';
					// $data['car_report']='<iframe src="'.base_url('car_reports/'.$car_report).'#toolbar=0" width="100%" height="500px"></iframe>';
				}
			}
			else
			{
				$data['car_report'] = 'none';
			}

            $data['member_name'] = $car->carsMember ? $car->carsMember->member_name : "";

			$data['member_contact'] = $car->carsMember ? $car->carsMember->member_contact : "";

            if(Auth::check())
            {
                $data['member_email'] = $car->carsMember ? $car->carsMember->member_email : "";
            }
            else
            {
                $data['member_email'] = $car->carsMember ? hide_mail($car->carsMember->member_email) : "";
            }

			$data['profile_image'] = url("member_profile_images")."/man_1679252787.jpg"    ;

            $profile_image = $car->carsMember ? $car->carsMember->profile_image : "";

            if(is_file(public_path('member_profile_images').'/'.$profile_image))
			{
				$data['profile_image'] = url('member_profile_images/'.$profile_image);
			}

			$data['follow_unfollow'] = '<i class="fas fa-plus"></i> {Follow}';

            if(Auth::check())
            {
                $following = Following::where('following_id',$cars->member_id)->where('member_id',Auth::user()->uid)->get();

                if($following->count()>0)
                {
                    $data['follow_unfollow'] = '<i class="fas fa-minus"></i> {UnFollow}';
                }
            }

            //to be completed later
			// visits_car($car_id);

            $data['sharing_image'] = null;

            $r = CarsFiles::where('car_id',$car_id)->where('is_main',1)->first();

            if($r)
            {
                $sharing_image = './car_uploads/'.$r->file_up_name;
                $file_name = pathinfo($sharing_image,PATHINFO_FILENAME);
				$file_extn = strtolower(pathinfo($sharing_image,PATHINFO_EXTENSION));
			    $data['sharing_image'] = url('car_uploads/'.$file_name.'.'.$file_extn);

            }

            $data['lang'] = "en";
			$data['currency'] = $this->checkCurrency;
			$data['car_files'] = CarsFiles::where('car_id',$car_id)->orderBy('uid','ASC')->get();

            return view('frontend.car-details', $data);
        }
    }

    private function cars_list_two($query_result,$dtype=null)
	{
		$cars_list_two = null;
        $lang = "en";

		foreach($query_result as $cars)
        {

			$image = $this->getMainImg($cars->uid);
            $make = $cars->carsMake->make;
            $model = $cars->carsModel->model;
            $transmission = $cars->carsTransmission->transmission;
            $fuel_type = $cars->carsFuelType->fuel_type;
            $drive_line = $cars->carsDriveLine->drive_line;
			$link  = route('car.details',$cars->uid);

            $member_id = null;
            if(Auth::check())
            {
                $member_id = Auth::user()->uid;
            }

            $call_number = $cars->carsMember ? $cars->carsMember->member_contact : "";

            $make_ar = $cars->carsMake->make_ar;
            $model_ar = $cars->carsModel->model_ar;

			// ask price msg
			$title1 = $cars->year.'&nbsp;'.$make.'&nbsp;'.$model;
			$title1_ar =$cars->year.'&nbsp;'.$make_ar.'&nbsp;'.$model_ar;
			$mylink = $link;
			$msgaskprice = 'How much you asking for this car %0a'.$title1.' in sooq-cars %0a%0a';
			$msgaskprice .='%0a%0a'.$mylink;

			$ask_link = 'https://api.whatsapp.com/send/?phone='.$this->countryMobileCode.$call_number.'&text='.$msgaskprice.'&app_absent=0';
			// ask price msg


			$wishlist = null;
			$t = null;
            $wishlist = Wishlist::where('member_id',$member_id)->where('car_id',$cars->uid)->get()->count();
			if($wishlist == 1)
			{
				$wishlist = 'text-danger';
				$t='fas';
			}
            else
            {
				$t='far';
			}

            $member_name = $cars->carsMember ? $cars->carsMember->member_name : "";
            $profile_image = $cars->carsMember ? $cars->carsMember->profile_image : "";

			if(is_file(public_path('member_profile_images').'/'.$profile_image))
			{
				$profile_image = url('member_profile_images')."/".$profile_image;
			}
			else
			{
				$profile_image= url('all_images')."/".'sample-logo.png';
			}

			// $watchhlist_text = get_column('translation','trans_title','Watchlist','trans'.$this->slang);
            $translation_data = Translation::where("trans_title","Whatsapp")->orWhere("trans_title","Call")->get();
            foreach($translation_data as $data)
            {
                if($data->trans_title == "Whatsapp")
                {
                    $wa_text = $data->trans;
                }
                else
                {
                    $call_text = $data->trans;
                }
            }

			$title = $cars->year.' '.$make.' '.$model;

			$title_ar = $cars->year.' '.$make_ar.' '.$model_ar;

			$msgstr = 'I am contacting you about %0a%0a'.$title.' which priced '.hlp_nf($cars->sell_price,0,false).' in sooq-cars %0a%0a';
			$msgstr .='	آتواصل معك بخصوص   '.$title_ar.' الذي يبلغ سعره'.hlp_nf($cars->sell_price,0,false).' في موقع السيارات';
			$msgstr .='%0a%0a'.$link;

			$wa_link = 'https://api.whatsapp.com/send/?phone='.$this->countryMobileCode.$call_number.'&text='.$msgstr.'&app_absent=0';

            // if($this->session->lang=='_ar')
			// {
			// 	$style_profile = 'margin-right:-1px !important;';
			// 	$style_heart   = 'margin-right:-37px !important;';
			// 	$style_call    = 'text-right';
			// 	$marginHeart   = '22px';
			// 	$float= '';
			// }
			// else
			{
				$style_profile = null;
				$style_heart   = null;
				$style_call    = 'text-left';
				$marginHeart   = '-19px';
				$float= 'float:right;';
			}

            /*
			if($this->dvtype=='mobile')
			{
				$cars_list_two .='<div class="card mb-1" style="height:109px;min-height:109px;max-height: 109px; background-color:none !important;">
				<div class="row">
				<div class="col-5">
				<a href="'.$link.'">
				<img src="'.$image.'" alt="img" class="" style="width:100%;height:108px;min-height:108px;max-height:108px;object-fit:cover;" loading="lazy">
				</a>
				</div>
				<div class="col-7 pl-0">
				<div class="row">
				<div class="col-12">
				<a href="'.$link.'" class="text-dark">
				<h6 class="mt-1 p-0 text-dark" style="font-size:12px;">';

				if($this->slang=='_ar'):
					$cars_list_two .=$title_ar;
				else:
					$cars_list_two .=$title;
				endif;

				$cars_list_two .='</h6>
				</a>
				</div>
				</div>
				<div class="row">
				<div class="col-8">';

				if($cars->sell_price ==0)
				{
					$cars_list_two .='<h6 class="text-danger"><a href="'.$ask_link.'" class="count-whatsapp text-danger asktext"  data-carid="'.$cars->uid.'" data-toggle="tooltip" data-placement="top" title="click here for price">Ask Price</a></h6>';
				}else{
					$cars_list_two .='<h6 class="text-danger">'.hlp_nf($cars->sell_price,0,false).'</h6>';
				}

				$cars_list_two .='<span class="mr-1 text-dark" style="font-size:10px;">'.hlp_posted_at($cars->approved_date).'</span>
				</div>
				<div class="col-4">
				<a href="'.base_url('cars/members/'.$member_name).'" class="text-dark">
				<img src="'.$profile_image.'" class="mr-2" alt="user" style="width:35px;height:35px!important;object-fit:cover;border-radius:29px;margin-top:-2px;z-index:-1;margin-bottom:3px; '.$float.$style_profile.'">
				</a>
				</div>
				</div>
				<div class="row">
				<div class="col-12">
				<div class="row">

				<div class="col-5 text-left pl-1 pr-0">
				<button class="btn-success btn-custom btn-wa-mobile mt-1 d-none" data-number="'.$call_number.'" data-id="'.$cars->uid.'">
				<i class="fab fa-whatsapp"></i> WA
				</button>
				<a href="'.$wa_link.'" class="count-whatsapp" data-carid="'.$cars->uid.'">
				<p class="text-success mt-2 text-left" style="padding-left: 8px;">
				<i class="fab fa-whatsapp"></i> '.$wa_text.'
				</p>
				</a>
				<a href="'.$wa_link.'"  class="direct-wa d-none" id="'.$cars->uid.'">call
				</a>
				</div>
				<div class="col-5 text-left pl-1 pr-0">
				<a href="javascript:void(0);" class="text-secondary btn-call ismobile" data-id="'.$cars->uid.'" data-type="car" data-call="call">
				<p class="text-secondary mt-2 '.$style_call.'">
				<i class="fas fa-phone"></i> '.$call_text.'
				</p>
				</a>
				<a href="" class="direct-call d-none" id="'.$cars->uid.'">call</a>
				</div>
				<div class="col-1 text-left">
				<a href="javascript:void(0);" class="btn-wishlist" data-id="'.$cars->uid.'" data-rmv="no" style="margin-left:'.$marginHeart.';">
				<i class="far fa-heart '.$wishlist.' mt-1" style="font-size: 25px; '.$style_heart.'"></i>
				</a>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>';
			}
			else if($this->dvtype=='tablet')
			{
				$cars_list_two .='<div class="col-lg-3 col-md-4 col-xl-3 col-sm-6 col-xs-6">
				<div class="card overflow-hidden">
				<div class="item-card9-img">
				<div class="arrow-ribbon bg-primary">';

				if($cars->sell_price ==0)
				{
					$cars_list_two .=' <span style="display: inline-block;"><a href="'.$ask_link.'" class="count-whatsapp text-danger asktext"  data-carid="'.$cars->uid.'" data-toggle="tooltip" data-placement="top" title="click here for price">Ask Price</a></span>';
				}else{

					if($lang=='_ar'):
						$cars_list_two .=' <span style="display: inline-block;">'.$this->checkCurrency.'</span>';
					endif;
					$cars_list_two .=hlp_nf($cars->sell_price,0,false);
					if($lang!='_ar'):
						$cars_list_two .=' <style="display: inline-block;">'.$this->checkCurrency.'</span>';
					endif;
				}
				$cars_list_two .='</div>

				<div class="item-card9-imgs">
				<a class="link" href="'.$link.'"></a>
				<img src="'.$image.'" alt="img" class="cover-image" height="200" loading="lazy">
				</div>
				<div class="item-card9-icons d-none">
				<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
				</div>
				</div>
				<div class="card border-0 mb-0 mt-0 pt-0">
				<div class="card-body" style="height:100px;">
				<div class="item-card9" style="min-height:80px;">
				<a href="'.$link.'" class="text-dark"><h4 class="font-weight-semibold mt-1">';
				if($this->slang=='_ar'):
					$cars_list_two .=$title_ar;
				else:
					$cars_list_two .=$title;
				endif;

				$cars_list_two .='<br></h4></a>
				<div class="item-card9-desc mb-2">

				<span class="mr-2 text-info">'.hlp_posted_at($cars->approved_date).'</span>
				<span class="mr-2 text-info">
				<div style="" class="p-1">
				<h6 class="text-center btn-wishlist" style="color:#000000;cursor:pointer;" data-id="'.$cars->uid.'" data-rmv="no"><i class="'.$t.' fa-heart '.$wishlist.'"></i>
				</h6>
				</div>
				</span>
				</div>
				<p class="mb-0 leading-tight d-none">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
				</div>
				</div>
				<div class="card-footer pr-4 pl-4 pt-2 pb-2">
				<div class="item-card9-footer d-sm-flex">
				<div class="">
				<a href="#" class="mt-1 mb-1 float-left mr-2" title="Car type"><i class="fa fa-car text-muted"></i> '.$transmission.'</a>
				<a href="#" class="mt-1 mb-1 float-left mr-2" title="Fuel Type"><i class="fa fa-tachometer text-muted"></i> '.$fuel_type.'</a>
				<a href="#" class="mt-1 mb-1 float-left" title="Drive Line"><i class="fa fa-road text-muted"></i> '.$drive_line.'</a>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>';
			}
			else
            */
			{

				$cars_list_two .='<div class="col-lg-3 col-md-4 col-xl-3 col-sm-6 col-xs-6">
				<div class="card overflow-hidden">
				<div class="item-card9-img">
				<div class="arrow-ribbon bg-primary">';

				if($cars->sell_price ==0)
				{
					$cars_list_two .=' <span style="display: inline-block;"><a href="'.$ask_link.'" class="count-whatsapp text-danger asktext"  data-carid="'.$cars->uid.'" data-toggle="tooltip" data-placement="top" title="click here for price">Ask Price</a></span>';
				}else{

					if($lang=='_ar'):
						$cars_list_two .=' <span style="display: inline-block;">'.$this->checkCurrency.'</span>';
					endif;
					$cars_list_two .=hlp_nf($cars->sell_price,0,false);
					if($lang!='_ar'):
						$cars_list_two .=' <style="display: inline-block;">'.$this->checkCurrency.'</span>';
					endif;
				}
				$cars_list_two .='</div>

				<div class="item-card9-imgs">
				<a class="link" href="'.$link.'"></a>
				<img src="'.$image.'" alt="img" class="cover-image" height="200" loading="lazy">
				</div>
				<div class="item-card9-icons d-none">
				<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
				</div>
				</div>
				<div class="card border-0 mb-0 mt-0 pt-0">
				<div class="card-body" style="height:100px;">
				<div class="item-card9" style="min-height:80px;">
				<a href="'.$link.'" class="text-dark"><h4 class="font-weight-semibold mt-1">';
				if($this->slang=='_ar'):
					$cars_list_two .=$title_ar;
				else:
					$cars_list_two .=$title;
				endif;

				$cars_list_two .='<br></h4></a>
				<div class="item-card9-desc mb-2">

				<span class="mr-2 text-info">'.hlp_posted_at($cars->approved_date).'</span>
				<span class="mr-2 text-info">
				<div style="" class="p-1">
				<h6 class="text-center btn-wishlist" style="color:#000000;cursor:pointer;" data-id="'.$cars->uid.'" data-rmv="no"><i class="'.$t.' fa-heart '.$wishlist.'"></i>
				</h6>
				</div>
				</span>
				</div>
				<p class="mb-0 leading-tight d-none">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
				</div>
				</div>
				<div class="card-footer pr-4 pl-4 pt-2 pb-2">
				<div class="item-card9-footer d-sm-flex">
				<div class="">
				<a href="#" class="mt-1 mb-1 float-left mr-2" title="Car type"><i class="fa fa-car text-muted"></i> '.$transmission.'</a>
				<a href="#" class="mt-1 mb-1 float-left mr-2" title="Fuel Type"><i class="fa fa-tachometer text-muted"></i> '.$fuel_type.'</a>
				<a href="#" class="mt-1 mb-1 float-left" title="Drive Line"><i class="fa fa-road text-muted"></i> '.$drive_line.'</a>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>';
			}

		}

		return $cars_list_two;
	}


    public function addToWishlist(Request $request)
	{
        $errors = $request->validate([
            'car_id' => 'required',
        ]);

		if(Auth::check())
		{
			$action    = null;
            $member_id = Auth::user()->uid;
			$car_id    = $request->car_id;

            $wishlist = Wishlist::where('member_id',$member_id)->where('car_id',$car_id)->get();

			if($wishlist->count() == 0)
			{
                $wishlist_insert = new Wishlist;
                $wishlist_insert->member_id = $member_id;
                $wishlist_insert->car_id = $car_id;

				if($wishlist_insert->save())
				{
					$msg = 'success';
					$action = 'added';
                    $watchcount_insert = new WatchCount;
                    $watchcount_insert->car_id = $car_id;
                    $watchcount_insert->counter = 1;
                    $watchcount_insert->save();
				}
				else
				{
					$msg = 'error';
				}
			}
			else
			{
                $wishlist_delete = Wishlist::where('member_id',$member_id)->where('car_id',$car_id)->delete();

				if($wishlist_delete)
				{
					$msg = 'success';
					$action = 'removed';
				}
				else
				{
					$msg = 'error';
				}
			}
			echo json_encode(array($msg,$action));
		}
		else
		{
			echo json_encode(array('nli'));
		}
	}


    public function callShowNumber(Request $request)
    {
        $errors = $request->validate([
            'car_id' => 'required',
            'dtype' => 'required',
        ]);

        $car_id = $request->car_id;
        $dtype = $request->dtype;


        if($dtype == 'car')
        {
            $car = Cars::find($car_id);
            $member_id = $car->member_id;
            $contact = $car->carsMember ? $car->carsMember->member_contact : "";

        }
        else
        {
            $member = Member::find($car_id);
            $contact = $member->member_contact;
        }

        $calls_count = new CallsCount;
        $calls_count->car_id = $car_id;
        $calls_count->counter = 1;
        $calls_count->save();
        echo json_encode(array('success',$this->countryMobileCode.$contact));


    }

    public function countWhatsapp(Request $request)
    {
        $errors = $request->validate([
            'car_id' => 'required',
        ]);

        $whatsapp_count = new WhatsappCount;
        $whatsapp_count->car_id = $request->car_id;
        $whatsapp_count->counter = 1;
        $whatsapp_count->save();

		echo 1;
    }

    public function followUnfollow(Request $request)
    {
        $errors = $request->validate([
            'following_id' => 'required',
        ]);

        $following_id = $request->following_id;

		if(Auth::check())
        {
            $member_id = Auth::user()->uid;
            $following = Following::where('member_id',$member_id)
                ->where('following_id',$following_id)
                ->get();

            if($following->count() == 0)
            {
                $ins_following = new Following;
                $ins_following->member_id = $member_id;
                $ins_following->following_id = $following_id;

                if($ins_following->save())
                {
                    $msg = 'success';
					$action = 'followed';
                    $ins_follow_count = new FollowCount;
                    $ins_follow_count->member_id = $member_id;
                    $ins_follow_count->counter = 1;
					$ins_follow_count->save();
                }
                else
				{
					$msg = 'error';
				}
            }
            else
			{
                $following = Following::where('member_id',$member_id)
                    ->where('following_id',$following_id)
                    ->delete();

				if($following)
				{
					$msg = 'success';
					$action = 'unfollowed';
				}
				else
				{
					$msg = 'error';
				}
			}

            echo json_encode(array($msg,$action));


        }
        else
		{
			echo json_encode(array('nli'));
		}

    }

    public function carMake(Request $request, string $id)
    {
        dd("Test URL");
    }

    public function allMake()
    {
        $data['lang'] = $this->slang;
        $data['title'] = '{All Makes}';

        $data['all_makes'] = DB::table('ac_cars')
            // ->join('ac_cars_make', 'ac_cars.make_id', '=', 'ac_cars_make.uid')
            // ->selectRaw('ac_cars.make_id, ac_cars_make.*, COUNT(make_id) AS mcount')
            ->selectRaw('*, COUNT(make_id) AS mcount')
            ->where('car_status','Approved')->where('is_inactive',0)
            ->groupBy('make_id')
            ->orderBy('mcount','DESC')
            ->get();


        if($this->dvtype=="mobile")
        {

        }
        else
        {
            // return view();
        }
    }
}
