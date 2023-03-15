@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Members</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-member-modal" class="btn btn-primary" data-type="normal">
      <i class="fas fa-plus"></i> Add New Member </button>
    <button type="button" data-toggle="modal" data-target="#add-user-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New User </button>
  </div>
  <div class="col-md-8 text-right">
    <button type="button" data-toggle="modal" data-target="#add-member-modal" class="btn btn-danger" data-type="quick">
      <i class="fas fa-plus"></i> Quick Member </button>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <table id="dt" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>#</th>
              <th>Reg</th>
              <th>QR</th>
              <th>Manager</th>
              <th>Status</th>
              <th>Category</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Username</th>
              <th>Password</th>
              <th>Total Cars</th>
              <th>Last Uploaded</th>
              <th>Links</th>
              <th>Login</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row --> 
@endsection 
@section('modal') <input type="hidden" id="hidden-val">
<!--  ADD Member MODAL -->
<div id="add-member-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="member_category">Category</label>
                <select class="form-control ifrequired" type="text" name="member_category" id="member_category">
                  <option value="" selected="">Choose</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="username">UserName</label>
                <input class="form-control ifrequired" type="text" name="username" id="username">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="userpass">Password</label>
                <input class="form-control ifrequired" type="password" name="userpass" id="userpass">
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="member_name">Member Name</label>
                <input class="form-control ifrequired" type="text" name="member_name" id="member_name">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="member_contact">Member Contact</label>
                <input class="form-control ifrequired" type="text" name="member_contact" id="member_contact">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="member_email">Member Email</label>
                <input class="form-control" type="text" name="member_email" id="member_email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="member_notes">Member Notes</label>
                <textarea class="form-control" type="text" name="member_notes" id="member_notes"></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add Member</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  EDIT Member MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Edit Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
          <input type="hidden" class="hid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_member_category">Category</label>
                <select class="form-control ifrequired" type="text" name="member_category" id="e_member_category">
                  <option value="" selected="">Choose</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_username">UserName</label>
                <input class="form-control ifrequired" type="text" name="username" id="e_username">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_userpass">Password</label>
                <input class="form-control ifrequired" type="password" name="userpass" id="e_userpass">
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_member_name">Member Name</label>
                <input class="form-control ifrequired" type="text" name="member_name" id="e_member_name">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_member_contact">Member Contact</label>
                <input class="form-control ifrequired" type="text" name="member_contact" id="e_member_contact">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_member_email">Member Email</label>
                <input class="form-control ifrequired" type="text" name="member_email" id="e_member_email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="e_member_notes">Member Notes</label>
                <textarea class="form-control" type="text" name="member_notes" id="e_member_notes"></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update">Save Changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="status-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="statusForm">
          <div class="row">
            <input type="hidden" name="uid" id="status-id">
            <div class="col-12">
              <div class="form-group">
                <label for="member_status">Status</label>
                <select class="form-control ifrequired" name="member_status" id="member_status">
                  <option value="Pending">Pending</option>
                  <option value="Approved">Approved</option>
                  <option value="Declined">Declined</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-change-status">Save Changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="add-links-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add Links</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="link_os">OpenSooq</label>
              <input class="form-control ifrequired" type="text" name="link_os" id="link_os">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="link_insta">Instagram</label>
              <input class="form-control ifrequired" type="text" name="link_insta" id="link_insta">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="link_olx">OLX</label>
              <input class="form-control ifrequired" type="text" name="link_olx" id="link_olx">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="link_others">Others</label>
              <input class="form-control ifrequired" type="text" name="link_others" id="link_others">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add-links">Save Changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="assignuser-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Assigned User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="AssignForm">
          <div class="row">
            <input type="hidden" name="uid" id="assign-id">
            <div class="col-12">
              <div class="form-group">
                <label for="assigned_user">User</label>
                <select class="form-control ifrequired" name="assigned_user" id="assigned_user"></select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-assign-user">Save Changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  ADD user MODAL -->
<div id="add-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addFormUser">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="nusername">Username</label>
                <input type="text" name="username" id="nusername" class="form-control" placeholder="username" />
                <small id="msg_username" class="form-text text-muted" style="display: none;"></small>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="nuserpass" id="nuserpass" class="form-control" placeholder="Password" />
                <small id="msg_userpasss" class="form-text text-muted" style="display:none;"></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="dashboard"> Dashboard
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="dashboard1"> Dashboard 1
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="dashboard2"> Dashboard 2
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="member_category"> Member Category
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="all_members"> All Member
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="all_cars"> All Cars
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="car_origin"> Cars Origin
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="car_make"> Car Make
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="car_model"> Car Model
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="cylinder"> Cylinder
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="transmision"> Transmission
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="carkeys"> Keys
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="interior_color"> Interior
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="exterior_color"> Exterior
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="option"> Option
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="fuel_type"> Fuel Type
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="drive_line"> Drive Line
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="odometer"> Odometer
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="expense_cateogry"> Expense Category
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="expenses"> Expenses
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="homepage"> Homepage
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="slider"> Slider
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="footer"> Footer
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="learning_video"> Learning Videos
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="subcribers"> Subcribers
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="translation"> Translation
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="pchk" value="members_action"> Members Action
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add-users">Add Users</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!--  ADD user MODAL -->
<div id="viewers_report" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Viewers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <label for="start_datev">Start Date</label>
            <input type="hidden" id="viewer_memberid">
            <input type="text" id="start_datev" class="form-control" value="" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
          </div>
          <div class="col-4">
            <label for="end_datev">End Date</label>
            <input type="text" id="end_datev" class="form-control" value="" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
          </div>
          <div class="col-12" style="margin-top:40px;">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a id="tb-cars-approved" class="nav-link active" data-toggle="tab" href="#viewer_Call" role="tab" aria-selected="true">
                  <span class="d-block d-sm-none">
                    <i class="fas fa-home"></i>
                  </span>
                  <span class="d-none d-sm-block">
                    <i class="fab fa-call"></i> Calls </span>
                </a>
              </li>
              <li class="nav-item">
                <a iid="tb-cars-pending" class="nav-link" data-toggle="tab" href="#viewwe_whatsapp" role="tab" aria-selected="false">
                  <span class="d-block d-sm-none">
                    <i class="far fa-user"></i>
                  </span>
                  <span class="d-none d-sm-block">Whatsapp</span>
                </a>
              </li>
              <li class="nav-item">
                <a iid="tb-cars-pending" class="nav-link" data-toggle="tab" href="#viewwer_whatsapp_share" role="tab" aria-selected="false">
                  <span class="d-block d-sm-none">
                    <i class="far fa-user"></i>
                  </span>
                  <span class="d-none d-sm-block">Share Whatsapp</span>
                </a>
              </li>
              <li class="nav-item">
                <a iid="tb-cars-pending" class="nav-link" data-toggle="tab" href="#viewwer_share" role="tab" aria-selected="false">
                  <span class="d-block d-sm-none">
                    <i class="far fa-user"></i>
                  </span>
                  <span class="d-none d-sm-block">Share Link</span>
                </a>
              </li>
              <li class="nav-item">
                <a iid="tb-cars-pending" class="nav-link" data-toggle="tab" href="#viewwer_count" role="tab" aria-selected="false">
                  <span class="d-block d-sm-none">
                    <i class="far fa-user"></i>
                  </span>
                  <span class="d-none d-sm-block">Watch </span>
                </a>
              </li>
            </ul>
            <div class="tab-content p-3 text-muted">
              <div class="tab-pane active" id="viewer_Call" role="tabpanel">
                <table id="dt_allviewers_ca" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Car Info</th>
                      <th>Calls</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody id="get_call_info"></tbody>
                </table>
              </div>
              <div class="tab-pane" id="viewwe_whatsapp" role="tabpanel">
                <table id="dt_allviewers_wh" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Car Info</th>
                      <th>Whatsapp</th>
                    </tr>
                  </thead>
                  <tbody id="get_whatsapp_info"></tbody>
                </table>
              </div>
              <div class="tab-pane" id="viewwer_whatsapp_share" role="tabpanel">
                <table id="dt_allviewers_whsh" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Car Info</th>
                      <th>Whatsapp Share</th>
                    </tr>
                  </thead>
                  <tbody id="get_whatsappshare_info"></tbody>
                </table>
              </div>
              <div class="tab-pane" id="viewwer_share" role="tabpanel">
                <table id="dt_allviewers_sh" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Car Info</th>
                      <th>Share Link</th>
                    </tr>
                  </thead>
                  <tbody id="get_share_info"></tbody>
                </table>
              </div>
              <div class="tab-pane" id="viewwer_count" role="tabpanel">
                <table id="dt_allviewers_whsh" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Car Info</th>
                      <th>Watch</th>
                    </tr>
                  </thead>
                  <tbody id="get_count_info"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-view">Show</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="qr-code-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">QR CODE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="row">
          <div class="col-12" id="qr-holder"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-download-qr">Download</button>
        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-save-cropped">Save Cropped</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal --> 
@endsection 
@section('customjs')
<!-- Custom js-->
<script>

</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection