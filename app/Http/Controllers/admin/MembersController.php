<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Members;
use App\Models\admin\Admin;
use App\Models\admin\Cars;
use App\Models\admin\CarsMake;
use App\Models\admin\CarsModel;
use App\Models\admin\WhatsappCount;
use App\Models\admin\ShareWaCount;
use App\Models\admin\ShareLinkCount;
use App\Models\admin\WatchCount;
use App\Models\admin\CallsCount;
use App\Models\admin\MembersCategory;
use App\Models\admin\Following;
use App\Models\admin\CarsOrigin;
use App\Models\admin\CarsCylinders;
use App\Models\admin\CarsTransmission;
use App\Models\admin\CarsKeys;
use App\Models\admin\CarsInteriorColor;
use App\Models\admin\CarsExteriorColor;
use App\Models\admin\CarsOptions;
use App\Models\admin\CarsFuelType;
use App\Models\admin\CarsDriveLine;
use App\Models\admin\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\Translation;
use App\Models\admin\CarsFiles;

use Hash;

class MembersController extends Controller
{
    public function members()
    {
        return view('admin/members');
    }

    public function show()
    {
        $sno = 0;
        $members = Members::cursor();
        if ($members->isNotEmpty()) {
            foreach ($members as $rows) {
                $sno++;
                // member_type
                if ($rows->member_type == 'web') {
                    $member_type = '<i class="fas fa-globe text-info"></i>';
                } else if ($rows->member_type == 'google') {
                    $member_type = '<i class="fab fa-google text-danger"></i>';
                }
                // member_status
                switch ($rows->member_status) {
                    case 'Pending':
                        $member_status = '<span class="badge badge-info">' . $rows->member_status . '</span>';
                        break;
                    case 'Approved':
                        $member_status = '<span class="badge badge-success">' . $rows->member_status . '</span>';
                        break;
                    case 'Declined':
                        $member_status = '<span class="badge badge-danger">' . $rows->member_status . '</span>';
                        break;
                    default:
                        $member_status = null;
                        break;
                }

                $total_cars = Cars::where('member_id', $rows->uid)->count();

                $membersCategory = get_column('ac_members_category', 'uid', $rows->member_category, 'category_title', '-');

                $assigned_user = get_column('ac_admins', 'uid', $rows->assigned_user, 'username', '-');

                // last_uploaded
                $last_uploaded = '-';
                $last_uploade = Cars::where('member_id', $rows->uid)->orderBy('uid', 'DESC')->first();
                if ($last_uploade) {

                    $last_uploaded = hlp_posted_at($last_uploade->created_at);
                }
                // all_links
                $link_os = $rows->link_os != "" ? '<a href="' . $rows->link_os . '" target="_blank">OpenSooq</a>' : '';
                $link_insta = $rows->link_insta != "" ? '<a href="' . $rows->link_insta . '" target="_blank">Instagram</a>' : '';
                $link_olx = $rows->link_olx != "" ? '<a href="' . $rows->link_olx . '" target="_blank">OLX</a>' : '';
                $link_others = $rows->link_others != "" ? '<a href="' . $rows->link_others . '" target="_blank">Others</a>' : '';
                $all_links  = '<br>' . $link_os . '<br>' . $link_insta . '<br>' . $link_olx . '<br>' . $link_others;

                $json[] = array(
                    $sno,
                    $member_type,
                    $rows->qr_title_en,
                    $assigned_user,
                    $member_status,
                    $membersCategory,
                    $rows->member_name,
                    $rows->member_contact,
                    $rows->username,
                    $rows->userpass,
                    $total_cars,
                    $last_uploaded,
                    $all_links,

                    // login
                    // '<a href="' . url('special/login/' . $rows->username . '/' . $rows->userpass) . '" target="_blank">Open Account</a>',

                    '<a href="#" class="ml-1 text-success" target="_blank" title="Detailed Links"><i class="fab fa-whatsapp"></i></a>' .
                        '<a href="#" id="' . $rows->uid . '" class="ml-1 text-secondary" data-toggle="modal" data-target="#add-links-modal" title="Add Links"><i class="fas fa-hashtag"></i></a>' .
                        '<a href="#" id="' . $rows->uid . '" class="ml-1 text-info" data-toggle="modal" data-target="#status-modal" title="Change Status"><i class="fas fa-cog"></i></a>' .
                        '<a href="#" id="' . $rows->uid . '" class="ml-1 text-info" data-toggle="modal" data-target="#assignuser-modal" title="Assign Manager"><i class="fas fa-user"></i></a>' .
                        '<a href="#" data-toggle="modal" data-target="#edit-modal"   id="' . $rows->uid . '" class="ml-1 text-warning"><i class="fas fa-edit"></i></a>&nbsp;' .
                        '<a href="#" id="' . $rows->uid . '" class="ml-1 text-success" data-toggle="modal" data-target="#viewers_report" title="viewers report"><i class="fas fa-file"></i></a>  ' .
                        '<a href="#" class="ml-1 text-danger" data-toggle="modal" data-target="#delete-modal" lbl="btn-delete" id="' . $rows->uid . '"><i class="fas fa-trash"></i></a>',
                );
            }
            $response = array();
            $response['success'] = true;
            $response['aaData'] = $json;
            echo json_encode($response);
        } else {
            $response = array();
            $response['sEcho'] = 0;
            $response['iTotalRecords'] = 0;
            $response['iTotalDisplayRecords'] = 0;
            $response['aaData'] = [];
            echo json_encode($response);
        }
    }


    public function add(Request $request)
    {
        $uid = $request->unique_id;
        $fileName = null;
        $error_log = array();
        $errors_counter = 0;
        $msg = null;

        $errors = $request->validate([
            'member_category' => 'required',
            'username' => 'required|unique:ac_members',
            'userpass' => 'required|min:8',
            'member_name' => 'required',
            'member_contact' => 'required|unique:ac_members',
            'member_email' => 'required',
            'member_notes' => 'required',
        ]);

        $members = new Members;
        $members->member_category = $request->member_category;
        $members->username = $request->username;
        $members->userpass = Hash::make($request->userpass);
        $members->member_name = $request->member_name;
        $members->member_contact = $request->member_contact;
        $members->member_email = $request->member_email;
        $members->member_notes = $request->member_notes;
        $members->created_by = 'admin';
        if (!$members->save()) {
            echo json_encode(array('token', $errors));
        } else {
            echo json_encode(array('token', 'success'));
        }
    }

    public function edit(Request $request)
    {
        $edit_result = members::where('uid', $request->unique_id)->first();
        echo json_encode(array('token_value', $edit_result));
    }

    public function update(Request $request)
    {
        $uid = $request->unique_id;
        $fileName = null;
        $error_log = array();
        $errors_counter = 0;
        $msg = null;

        $errors = $request->validate([
            'username' => 'required|unique:ac_members,username,' . $uid . ',uid',
            'userpass' => 'required',
            'member_name' => 'required',
            'member_category' => 'required',
            'member_contact' => 'required|unique:ac_members,member_contact,' . $uid . ',uid',
            'member_email' => 'required',
            'member_notes' => 'required',

        ]);

        $members = Members::find($uid);
        $members->member_category = $request->member_category;
        $members->username = $request->username;
        $members->userpass = $request->userpass;
        $members->member_name = $request->member_name;
        $members->member_contact = $request->member_contact;
        $members->member_email = $request->member_email;
        $members->member_notes = $request->member_notes;
        $members->updated_by = 'admin';
        if ($members->save()) {
            $msg = 'success';
        } else {
            $msg = 'error';
        }
        echo json_encode(array('token', $msg));
    }

    public function delete(Request $request)
    {

        $status = Members::where(['uid' => $request->unique_id])->delete();
        if ($status == 1) {
            echo json_encode(array('token', 'success'));
        } else {
            echo json_encode(array('token', 'error'));
        }
    }

    // get links
    public function getLinks(Request $request)
    {
        $edit_result =   Members::where('uid', $request->unique_id)->first();
        echo json_encode(array('token_value', $edit_result));
    }
    // add links
    public function addLinks(Request $request)
    {
        $uid = $request->unique_id;
        $fileName = null;
        $error_log = array();
        $errors_counter = 0;
        $msg = null;

        $errors = $request->validate([
            'link_os' => 'required',
            'link_insta' => 'required',
            'link_olx' => 'required',
            'link_others' => 'required',
        ]);

        $members = Members::find($uid);
        $members->link_os = $request->link_os;
        $members->link_insta = $request->link_insta;
        $members->link_olx = $request->link_olx;
        $members->link_others = $request->link_others;
        $members->updated_by = 'admin';
        if ($members->save()) {
            $msg = 'success';
        } else {
            $msg = 'error';
        }
        echo json_encode(array('token', $msg));
    }

    // get status
    public function getStatus(Request $request)
    {
        $edit_result =   Members::where('uid', $request->unique_id)->first();
        echo json_encode(array('token_value', $edit_result));
    }

    // update status
    public function updateStatus(Request $request)
    {
        $uid = $request->unique_id;
        $fileName = null;
        $error_log = array();
        $errors_counter = 0;
        $msg = null;

        $errors = $request->validate([
            'member_status' => 'required',
        ]);

        $members = Members::find($uid);
        $members->member_status = $request->member_status;
        $members->updated_by = 'admin';
        if ($members->save()) {
            $msg = 'success';
        } else {
            $msg = 'error';
        }
        echo json_encode(array('token', $msg));
    }

    public function getMember(Request $request)
    {
        $uid = $request->uid;
        $options = '<option value="" selected>Select</option>';
        $query = MembersCategory::orderBy('category_title', 'Asc')->get();
        if ($query->isNotEmpty()) {
            foreach ($query as $rows) {
                $options .= '<option value="' . $rows->uid . '">' . $rows->category_title . '</option>';
            }
        } else {
            $options = '<option value="" selected>No Data</option>';
        }
        echo $options;
    }


    public function editUser(Request $request)
    {
        $edit_result = members::where('uid', $request->unique_id)->first();
        echo json_encode(array('token_value', $edit_result->uid));
    }

    // Assigned User
    public function assignUser(Request $request)
    {
        $uid = $request->unique_id;
        $fileName = null;
        $error_log = array();
        $errors_counter = 0;
        $msg = null;

        $errors = $request->validate([
            'assigned_user' => 'required',
        ]);

        $members = Members::find($uid);
        $members->assigned_user = $request->assigned_user;
        $members->updated_by = 'admin';
        if ($members->save()) {
            $msg = 'success';
        } else {
            $msg = 'error';
        }
        echo json_encode(array('token', $msg));
    }

    // Get User From ac_admin
    public function getUser(Request $request)
    {
        $uid = $request->uid;
        $options = '<option value="" selected>Select</option>';
        $query = Admin::orderBy('username', 'Asc')->get();
        if ($query->isNotEmpty()) {
            foreach ($query as $rows) {
                $options .= '<option value="' . $rows->uid . '">' . $rows->username . '</option>';
            }
        } else {
            $options = '<option value="" selected>No Data</option>';
        }
        echo $options;
    }

    public function get_viewers_all(Request $request)
    {
        $carids = [];
        $memberid = $request->memberid;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $car = Cars::where('member_id', $memberid)->get();

        foreach ($car as $rows) {
            array_push($carids, $rows->uid);
        }

        $call = '';
        if (!empty($startdate) && !empty($enddate)) {
            $callsCount = CallsCount::where('created_at', '>=', $startdate)
                ->where('created_at', '<=', $enddate);
        } else {
            $callsCount = CallsCount::whereDate('created_at', Carbon::today());
        }
        $callsCount->whereIn('car_id', $carids)->groupBy('created_at', 'car_id');
        $data = $callsCount->get();
        foreach ($data as $value) {

            $cars = Cars::where('uid', $value->car_id)->first();
            $make_id = $cars->make_id;
            $model_id = $cars->model_id;
            $year = $cars->year;

            $make = get_column('ac_cars_make', 'uid', $make_id, 'make', '-');
            $model = get_column('ac_cars_model', 'uid', $model_id, 'model', '-');

            $call  .= '<tr>
                <td>' . $make . ' ' . $model . ' ' . $year . '</td>
                <td>' . $value->counter . '</td>
                <td >' . $value->created_at . '</td>
                </tr>';
        }

        $whatsapp = '';
        if (!empty($startdate) && !empty($enddate)) {
            $whatsappcount = WhatsappCount::where('created_at', '>=', $startdate)
                ->where('created_at', '<=', $enddate);
        } else {
            $whatsappcount = WhatsappCount::whereDate('created_at', Carbon::today());
        }
        $whatsappcount->whereIn('car_id', $carids)->groupBy('created_at', 'car_id');
        $data = $whatsappcount->get();

        foreach ($data as $value) {

            $cars = Cars::where('uid', $value->car_id)->first();
            $make_id = $cars->make_id;
            $model_id = $cars->model_id;
            $year = $cars->year;

            $make = get_column('ac_cars_make', 'uid', $make_id, 'make', '-');
            $model = get_column('ac_cars_model', 'uid', $model_id, 'model', '-');

            $whatsapp .= '<tr>
                <td>' . $make . ' ' . $model . ' ' . $year . '</td>
                <td>' . $value->counter . '</td>
                </tr>';
        }

        $whatsapp_share = '';
        if (!empty($startdate) && !empty($enddate)) {
            $shareWaCount = ShareWaCount::where('created_at', '>=', $startdate)
                ->where('created_at', '<=', $enddate);
        } else {
            $shareWaCount = ShareWaCount::whereDate('created_at', Carbon::today());
        }
        $shareWaCount->whereIn('car_id', $carids)->groupBy('created_at', 'car_id');
        $data = $shareWaCount->get();
        foreach ($data as $value) {

            $cars = Cars::where('uid', $value->car_id)->first();
            $make_id = $cars->make_id;
            $model_id = $cars->model_id;
            $year = $cars->year;

            $make = get_column('ac_cars_make', 'uid', $make_id, 'make', '-');
            $model = get_column('ac_cars_model', 'uid', $model_id, 'model', '-');

            $whatsapp_share .= '<tr>
                <td>' . $make . ' ' . $model . ' ' . $year . '</td>
                <td>' . $value->counter . '</td>
                </tr>';
        }

        $share_link = '';
        if (!empty($startdate) && !empty($enddate)) {
            $shareLinkCount = ShareLinkCount::where('created_at', '>=', $startdate)
                ->where('created_at', '<=', $enddate);
        } else {
            $shareLinkCount = ShareLinkCount::whereDate('created_at', Carbon::today());
        }
        $shareLinkCount->whereIn('car_id', $carids)->groupBy('created_at', 'car_id');
        $data = $shareLinkCount->get();
        foreach ($data as $value) {

            $cars = Cars::where('uid', $value->car_id)->first();
            $make_id = $cars->make_id;
            $model_id = $cars->model_id;
            $year = $cars->year;

            $make = get_column('ac_cars_make', 'uid', $make_id, 'make', '-');
            $model = get_column('ac_cars_model', 'uid', $model_id, 'model', '-');

            $share_link .= '<tr>
                <td>' . $make . ' ' . $model . ' ' . $year . '</td>
                <td>' . $value->counter . '</td>
                </tr>';
        }

        $watch = '';
        if (!empty($startdate) && !empty($enddate)) {
            $watchCount = WatchCount::where('created_at', '>=', $startdate)
                ->where('created_at', '<=', $enddate);
        } else {
            $watchCount = WatchCount::whereDate('created_at', Carbon::today());
        }
        $watchCount->whereIn('car_id', $carids)->groupBy('created_at', 'car_id');
        $data = $watchCount->get();
        foreach ($data as $value) {

            $cars = Cars::where('uid', $value->car_id)->first();
            $make_id = $cars->make_id;
            $model_id = $cars->model_id;
            $year = $cars->year;

            $make = get_column('ac_cars_make', 'uid', $make_id, 'make', '-');
            $model = get_column('ac_cars_model', 'uid', $model_id, 'model', '-');

            $watch .= '<tr>
                <td>' . $make . ' ' . $model . ' ' . $year . '</td>
                <td>' . $value->counter . '</td>
                </tr>';
        }

        echo json_encode(array($call, $whatsapp, $whatsapp_share, $share_link, $watch));
    }

    public function following()
    {

        $member_id = Auth::user()->uid;
        $data['lang'] = $this->slang;

        $following = Following::where('member_id',$member_id)
            ->with(['memberFollowing'])
            ->orderBy('uid','DESC')
            ->get();

        $data['following'] = $following;

        if($this->dvtype=='mobile')
        {
            // $this->parser->parse('members-following-mobile',$data);
        }
        else
        {
            return view('frontend.following', $data);
        }
    }



    public function followers()
    {

        $member_id = Auth::user()->uid;
        $data['lang'] = $this->slang;

        $following = Following::where('following_id',$member_id)
            ->with(['memberFollower'])
            ->orderBy('uid','DESC')
            ->get();

        $data['following'] = $following;

        if($this->dvtype=='mobile')
        {
            // $this->parser->parse('members-following-mobile',$data);
        }
        else
        {
            return view('frontend.follower', $data);
        }
    }



    public function removeFollowers(Request $request)
    {
        $errors = $request->validate([
            'following_id' => 'required',
        ]);

		$action = null;

        $member_id = Auth::user()->uid;
        $following_id = $request->following_id;

        $following = Following::where('member_id',$following_id)
            ->where('following_id',$member_id)
            ->get();

        if($following)
        {
            $msg = 'success';
            $action = 'unfollowed';
        }
        else
        {
            $msg = 'error';
        }

		echo json_encode(array($msg,$action));

    }


    public function wishlist()
    {
		$data['lang'] = $this->slang;

        $data['origin'] = CarsOrigin::all();
        $data['cylinders'] = CarsCylinders::all();
        $data['transmission'] = CarsTransmission::all();
        $data['keys'] = CarsKeys::all();
		$data['interior_color'] = CarsInteriorColor::all();
		$data['exterior_color'] = CarsExteriorColor::all();
		$data['options'] = CarsOptions::all();
		$data['fuel_type'] = CarsFuelType::all();
		$data['drive_line'] = CarsDriveLine::all();
        $member_id = Auth::user()->uid;

		$wishlist = array();


        $wishlist_data = Wishlist::where('member_id',$member_id)->get();

        if($wishlist_data->count() > 0)
        {
            foreach($wishlist_data as $w_data)
            {
                $wishlist[] = $w_data->car_id;
            }
        }

        if(count($wishlist)>0)
		{
            $list_cars = Cars::whereIn('uid', $wishlist)
                ->with(['carsMake','carsModel','carsTransmission','carsFuelType','carsDriveLine','carsCylinder','carsKeys','carsInterior','carsExterior','carsOptions','carsOdometer','carsMember'])
                ->get();

			$data['cars_list'] = $this->cars_list($list_cars,'wishlist');
		}
        else
		{
			$data['cars_list']=null;
		}


        return view('frontend.watchlist', $data);
    }


    private function cars_list($query_result,$type=null)
    {
        $cars_list = null;
		$hide_menu = null;
		$hide_wishlist=null;
		$hide_status = null;
		$hide_edit   = null;
		$hide_active_deactive = null;

        $translation_data = Translation::where("trans_title","Deactivate")
                ->orWhere("trans_title","Deactivate")
                ->orWhere("trans_title","Activate")
                ->orWhere("trans_title","Inactive")
                ->orWhere("trans_title","Active")
                ->orWhere("trans_title","Edit")
                ->orWhere("trans_title","Add To My Office (car is not there yet) !")
                ->orWhere("trans_title","submit")
                ->get();

        $txt_deactivate = null;
        $txt_activate = null;
        $txt_inactive = null;
        $txt_active = null;
        $txt_edit = null;
        $txt_addtomyoffice = null;


        foreach($translation_data as $data)
        {
            $lang_column = 'trans'.$this->slang;

            if($data->trans_title == "Deactivate")
            {
                $txt_deactivate = $data->{$lang_column};
            }
            else if($data->trans_title == "Activate")
            {
                $txt_activate = $data->{$lang_column};
            }
            else if($data->trans_title == "Inactive")
            {
                $txt_inactive = $data->{$lang_column};
            }
            else if($data->trans_title == "Active")
            {
                $txt_active = $data->{$lang_column};
            }
            else if($data->trans_title == "Edit")
            {
                $txt_edit = $data->{$lang_column};
            }
            else if($data->trans_title == "Add To My Office (car is not there yet) !")
            {
                $txt_addtomyoffice = $data->{$lang_column};
            }

        }

		$dir = $this->slang=='_ar'?'mr-auto':'ml-auto';

        if($type=='wishlist')
		{
			$hide_menu = 'd-none';
			$hide_status = 'd-none';
		}
		else if($type=='pending')
		{
			$hide_menu = '';
			$hide_wishlist = 'd-none';
			$hide_active_deactive = 'd-none';
		}
		else if($type=='declined')
		{
			$hide_active_deactive = 'd-none';
			$hide_wishlist = 'd-none';

            foreach($translation_data as $data)
            {
                if($data->trans_title == "submit")
                {
                    $txt_edit = $data->{$lang_column};
                }
            }
		}
		else
		{

			$hide_wishlist = 'd-none';
		}

        foreach($query_result as $cars)
        {

            $image_file =null;
            $member_id = $cars->member_id;
			$image = url('car_uploads').'/no-car-image-placeholder.png';

            $car_files_data = CarsFiles::where('car_id',$cars->uid)
                ->orderBy('is_main','DESC')->first();

            if($car_files_data)
            {
                $image_file = $car_files_data->file_up_name;
            }

            if(is_file('./car_uploads/'.$image_file))
			{
				$image = url('car_uploads/'.$image_file);
			}

            $make = $cars->carsMake->make;
			$model = $cars->carsModel->model;

			$link  = route('car.details', $cars->uid);

			$title = $cars->year.' '.$make.' '.$model;

            $transmission = $cars->carsTransmission->transmission;
			$fuel_type 	  = $cars->carsFuelType->fuel_type;
			$drive_line   = $cars->carsDriveLine->drive_line;

            if($this->slang=='_ar')
			{
				$sell_price = '<span style="display: inline-block;">OMR</span> '.hlp_nf($cars->sell_price,0,false);
			}
			else
			{
				$sell_price = hlp_nf($cars->sell_price,0,false).' <span style="display: inline-block;">OMR</span>';
			}

            $member_name = $cars->carsMember ? $cars->carsMember->member_name : "";
            $profile_image = $cars->carsMember ? $cars->carsMember->profile_image : "";

            if(is_file('./member_profile_images/'.$profile_image))
			{
				$profile_image = url('member_profile_images/'.$profile_image);
			}
			else
			{
				$profile_image = url('all_images/sample-logo.png');
			}

            $car_status = null;
			switch ($cars->car_status)
			{
				case 'Approved':
					$car_status = '<h2 class="label label-success mt-2" style="font-size:20px;">'.$cars->car_status.'</h2>';
					break;
				case 'Pending':
					$car_status = '<h2 class="label label-warning mt-2" style="font-size:20px;">'.$cars->car_status.'</h2>';
					break;
				case 'Declined':
					$car_status = '<h2 class="label label-danger mt-2" style="font-size:20px;">'.$cars->car_status.'</h2>';
					break;
				default:
					// code...
					break;
			}

            $is_inactive = $cars->is_inactive==0?'<i class="fas fa-times"></i><br>'.$txt_deactivate:'<i class="fas fa-check"></i><br>'.$txt_activate;
			$is_in_office = $cars->is_in_office==1?'d-none':null;


            if($this->dvtype=='mobile')
			{

				$is_inactive = $cars->is_inactive==0?'<i class="fas fa-times"></i> '.$txt_inactive:'<i class="fas fa-check"></i> '.$txt_active;
                $reason=null;
				if(!empty($cars->reason) && $cars->car_status=='Declined')
				{
					$reasonM = '<h5 class="mb-0 p-2 leading-tight text-white bg-danger" style="font-size:50%">'.$cars->reason.'</h5>';
				}
				else{$reasonM = '<br>';}

				$cars_list .='
				<div class="card mb-1" style="height:100px;min-height:100px;max-height: 100px; background-color:none !important;">
					<div class="row">
						<div class="col-5">
							<a href="'.$link.'" target="_blank">
								<img src="'.$image.'" alt="img" class="" style="width:100%;height:98px;min-height:98px;max-height: 98px;">
							</a>
						</div>

						<div class="col-7 pl-0">
							<div class="row">
								<div class="col-12">
									<a href="'.$link.'" class="text-dark">
										<h6 class="mt-1 p-0 text-dark" style="font-size:10px;">
											'.$title.'
										</h6>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-8">
									<h6 class="text-danger">'.$sell_price.'</h6>
									<span class="mr-1 text-dark" style="font-size:10px;">'.hlp_posted_at($cars->created_at).'</span>

									'.$reasonM.'

		  							<a href="javascript:void(0);" class="text-danger text-left pl-0 btn-sm" data-toggle="modal" data-target="#edit-ad-modal" data-id="'.$cars->uid.'">
											<i class="fas fa-edit"></i><span style="font-size:10px;">'.$txt_edit.'</span>
									</a>
									<a href="javascript:void(0);" class="text-danger text-left pl-0 pr-0 mr-0 float-right btn-sm '.$hide_active_deactive.'" data-toggle="modal" data-target="#confirmation-modal" data-id="'.$cars->uid.'">
										<span style="font-size:10px;">'.$is_inactive.'</span>
									</a>
								</div>
								<div class="col-4">
									<a href="'.route('car.members',$member_id).'" class="text-dark">
										<img src="'.$profile_image.'" class="mr-2" alt="user" style="width:90%;height:auto !important;object:fit-screen;margin-top:-12px;">
									</a>
								</div>
							</div>

						</div>
					</div>

				</div>';
			}
            else if($this->dvtype=='tablet')
			{
				$reason=null;
				if(!empty($cars->reason) && $cars->car_status=='Declined')
				{
					$reason = '<h5 class="mb-0 mt-2 p-2 leading-tight text-white bg-danger">'.$cars->reason.'</h5>';
				}
				$cars_list .='
							<div class="card overflow-hidden parent-div">
								<div class="d-md-flex">
									<div class="item-card9-img" >
										<div class="arrow-ribbon bg-primary d-none">Sale</div>
										<div class="item-card9-imgs">
											<a class="link" href="'.$link.'" target="_blank"></a>
											<img src="'.$image.'" alt="img" class="cover-image" style="height:inherit;min-height:inherit;max-height:inherit;">
										</div>
									</div>
									<div class="card border-0 mb-0">
										<div class="card-body">
											<div class="row">
												<div class="col-md-8">
													<div class="">
														<a href="'.$link.'" class="text-dark"><h4 class="font-weight-semibold mt-1">'.$make.' - '.$model.'&nbsp;'.$cars->year.'</h4></a>
														<div class="item-card9-desc mb-2">
															<!-- <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a> -->
															<span class="mr-1 text-info">'.hlp_posted_at($cars->created_at).'
															</span>
														</div>
														<p class="mb-0 leading-tight"></p>
														<h4 class="text-danger font-weight-bold mb-0 mt-0">
															'.$sell_price.'
														</h4>
														'.$reason.'
														<button class="btn-grey btn-lg mt-2 btn-wishlist '.$hide_wishlist.'" data-id="'.$cars->uid.'" data-rmv="yes">
															<i class="fas fa-heart text-danger"></i> {Remove From Watchlist}
														</button>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="'.route('car.members',$member_id).'" class="text-dark">
														<div class="profile-pic mb-0">
															<img src="'.$profile_image.'" class="" alt="user" height="70">
															<div class="">
																<h4 class="mt-3 mb-1 font-weight-semibold">'.$member_name.'</h4>
															</div>
														</div>
													</a>
												</div>
											</div>

										</div>
										<div class="card-footer pr-4 pl-4 pt-1 pb-1">
											<div class="item-card9-footer d-sm-flex">
												<div class="item-card9-cost">
													<div class="row '.$hide_menu.'" >
														<div class="col text-center">
															<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ad-modal" data-id="'.$cars->uid.'">
																<i class="fas fa-edit"></i><br>'.$txt_edit.'
															</a>
														</div>
														<div class="col text-center">
															<a href="javascript:void(0);" data-toggle="modal" data-target="#confirmation-modal" data-id="'.$cars->uid.'">
																'.$is_inactive.'
															</a>
														</div>
														<div class="col text-center">
															<a href="javascript:void(0);">
																<i class="fas fa-comment"></i><br>{Chat}
															</a>
														</div>
														<div class="col text-center">
															<a href="javascript:void(0);">
																<i class="fas fa-eye"></i><br>{Views}
															</a>
														</div>
													</div>
												</div>
												<div class="" style="margin-left:auto;margin-right:auto;">
													<div class="row '.$hide_menu.'" >
														<div class="col-12 text-center">
															'.$car_status.'
														</div>
													</div>
												</div>
												<div class="'.$dir.'">
													<span class="mr-1" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i>'.$transmission.'</span>
													<span class="mr-1" title="Kilometrs"><i class="fa fa-tachometer text-muted mr-1"></i>'.$fuel_type.'</span>
													<span class="" title="FuealType"><i class="fa fa-road text-muted mr-1"></i>'.$drive_line.'</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
				';
			}
			else
			{
				$reason=null;
				if(!empty($cars->reason) && $cars->car_status=='Declined')
				{
					$reason = '<h5 class="mb-0 mt-2 p-2 leading-tight text-white bg-danger">'.$cars->reason.'</h5>';
				}
				$cars_list .='
							<div class="card overflow-hidden parent-div">
								<div class="d-md-flex">
									<div class="item-card9-img">
										<div class="arrow-ribbon bg-primary d-none">Sale</div>
										<div class="item-card9-imgs">
											<a class="link" href="'.$link.'" target="_blank"></a>
											<img src="'.$image.'" alt="img" class="cover-image" style="height:inherit;min-height:inherit;max-height:inherit;">
										</div>
										<div class="item-card9-icons d-none">
											<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
										</div>
									</div>
									<div class="card border-0 mb-0">
										<div class="card-body ">
											<div class="row">
												<div class="col-md-8">
													<div class="item-card9">
														<a href="'.$link.'" class="text-dark"><h4 class="font-weight-semibold mt-1">'.$make.' - '.$model.'&nbsp;'.$cars->year.'</h4></a>
														<div class="item-card9-desc mb-2">
															<!-- <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a> -->
															<span class="mr-1 text-info">'.hlp_posted_at($cars->created_at).'
															</span>
														</div>
														<p class="mb-0 leading-tight"></p>
														<h4 class="text-danger font-weight-bold mb-0 mt-0">
															'.$sell_price.'
														</h4>
														<a href="#" class="text-danger actmom '.$is_in_office.'" data-toggle="modal" data-target="#add-car-to-my-office-modal" id="'.$cars->uid.'">'.
															$txt_addtomyoffice.'
														</a>
														'.$reason.'
														<button class="btn-grey btn-lg mt-2 btn-wishlist '.$hide_wishlist.'" data-id="'.$cars->uid.'" data-rmv="yes">
															<i class="fas fa-heart text-danger"></i> {Remove From Watchlist}
														</button>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="'.route('car.members',$member_id).'" class="text-dark">
														<div class="profile-pic mb-0">
															<img src="'.$profile_image.'" class="" alt="user" height="70">
															<div class="">
																<h4 class="mt-3 mb-1 font-weight-semibold">'.$member_name.'</h4>
															</div>
														</div>
													</a>
												</div>
											</div>

										</div>
										<div class="card-footer pr-4 pl-4 pt-1 pb-1">
											<div class="item-card9-footer d-sm-flex">
												<div class="item-card9-cost">
													<div class="row '.$hide_menu.'" >
														<div class="col text-center '.$hide_edit.'">
															<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ad-modal" data-id="'.$cars->uid.'">
																<i class="fas fa-edit"></i><br>'.$txt_edit.'
															</a>
														</div>
														<div class="col text-center '.$hide_active_deactive.'">
															<a href="javascript:void(0);" data-toggle="modal" data-target="#confirmation-modal" data-id="'.$cars->uid.'">
																'.$is_inactive.'
															</a>
														</div>
														<div class="col text-center d-none">
															<a href="javascript:void(0);">
																<i class="fas fa-comment"></i><br>{Chat}
															</a>
														</div>
														<div class="col text-center d-none">
															<a href="javascript:void(0);">
																<i class="fas fa-eye"></i><br>{Views}
															</a>
														</div>
													</div>
												</div>
												<div class="" style="margin-left:auto;margin-right:auto;">
													<div class="row '.$hide_status.'" >
														<div class="col-12 text-center">
															'.$car_status.'
														</div>
													</div>
												</div>
												<div class="'.$dir.'">
													<span class="mr-1" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i>'.$transmission.'</span>
													<span class="mr-1" title="Kilometrs"><i class="fa fa-tachometer text-muted mr-1"></i>'.$fuel_type.'</span>
													<span class="" title="FuealType"><i class="fa fa-road text-muted mr-1"></i>'.$drive_line.'</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
				';
			}

        }

		return $cars_list;


    }




}
