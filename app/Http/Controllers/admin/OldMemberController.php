<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberCategory;
// use Illuminate\Support\Facades\DB;
class OldMemberController extends Controller
{

    public function index()
    {
        return view('admin.member_category');
    }

    public function show()
    {
        $sno = 0;
        $member = MemberCategory::cursor();
        if ($member->isNotEmpty()) {
            foreach ($member as $rows) {
                $sno++;
                $json[] = array(
                    $sno,
                    $rows->category_title,
                    '<a href="#" data-toggle="modal"  v-on:click="openModal(' . $rows->uid . ')" id="' . $rows->uid . '" class="ml-1 text-warning"><i class="fas fa-edit"></i></a>&nbsp;' .
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
    public function add(Request $req)
    {
        $req->validate([
            'category_title' => 'required',
        ]);

        $MemberCategory = new MemberCategory;
        $MemberCategory->category_title = $req->category_title;
        $MemberCategory->in_user = 'admin';
        if (!$MemberCategory->save()) {
            echo json_encode(array('token', 'error'));
        } else {
            echo json_encode(array('token', 'success'));
        }
    }

    public function edit($id)
    {
        $data = MemberCategory::find($id);
    }


    public function update(Request $req)
    {
        $Member_category = MemberCategory::find($req->id);
        $MemberCategory->member_category = $req->member_category;
        if (!$MemberCategory->save()) {
            $req->session()->flash('error', 'Error in updateing data');
        } else {
            $req->session()->flash('success', 'Date updated successfully');
        }
    }


    public function delete($id)
    {
        $data = MemberCategory::find($id);
        $status = $data->delete();
        if ($status) {
            $req->session()->flash('success', 'Data deleted successfully');
        } else {
            $req->session()->flash('error', 'Error in deleteing data');
        }
    }
}
