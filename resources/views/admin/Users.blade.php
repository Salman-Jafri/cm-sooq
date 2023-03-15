@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Users</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-user-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New Users </button>
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
              <th>Username</th>
              <th>Password</th>
              <th>dashboard</th>
              <th>dashboard 1</th>
              <th>dashboard 2</th>
              <th>Users</th>
              <th>Member Category</th>
              <th>All Members</th>
              <th>All Cars</th>
              <th>Car Origin</th>
              <th>Car Make</th>
              <th>Car Model</th>
              <th>Cylinder</th>
              <th>Transmision</th>
              <th>keys</th>
              <th>Interior</th>
              <th>Exterior</th>
              <th>Option</th>
              <th>Fuel Type</th>
              <th>Drive Line</th>
              <th>Odometer</th>
              <th>Expense Cateogry</th>
              <th>Expenses</th>
              <th>Homepage</th>
              <th>Slider</th>
              <th>Footer</th>
              <th>Learning_video</th>
              <th>Subcribers</th>
              <th>Translation</th>
              <th>Members Action</th>
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
@section('modal')
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
        <form id="addForm">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
                <small id="msg_username" class="form-text text-muted" style="display: none;"></small>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="userpass" id="userpass" class="form-control" placeholder="Password" />
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
              <input type="checkbox" class="pchk" value="users"> Users
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
<!--  EDIT Category MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="statusForm">
          <input type="hidden" name="uid" id="e_uid">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="e_username">Username</label>
                <input type="text" name="username" id="e_username" class="form-control" placeholder="Username" />
                <small id="msg_username" class="form-text text-muted" style="display: none;"></small>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="userpass" id="e_userpass" class="form-control" placeholder="Password" />
                <small id="msg_userpass" class="form-text text-muted" style="display: none;"></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_dashboard" value="dashboard"> Dashboard
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_dashboard1" value="dashboard1"> Dashboard 1
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_dashboard2" value="dashboard2"> Dashboard 2
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_users" value="users"> Users
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_member_category" value="member_category"> Member Category
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_all_members" value="all_members"> All Member
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_all_cars" value="all_cars"> All Cars
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_car_origin" value="car_origin"> Cars Origin
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_car_make" value="car_make"> Car Make
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_car_model" value="car_model"> Car Model
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_cylinder" value="cylinder"> Cylinder
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_transmision" value="transmision"> Transmission
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_carkeys" value="carkeys"> Keys
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_interior_color" value="interior_color"> Interior
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_exterior_color" value="exterior_color"> Exterior
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_option" value="option"> Option
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_fuel_type" value="fuel_type"> Fuel Type
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_drive_line" value="drive_line"> Drive Line
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_odometer" value="odometer"> Odometer
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_expense_cateogry" value="expense_cateogry"> Expense Category
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_expenses" value="expenses"> Expenses
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_homepage" value="homepage"> Homepage
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_slider" value="slider"> Slider
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_footer" value="footer"> Footer
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_learning_video" value="learning_video"> Learning Videos
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_subcribers" value="subcribers"> Subcribers
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_translation" value="translation"> Translation
            </div>
            <div class="col-md-3">
              <input type="checkbox" class="epchk" id="per_members_action" value="members_action"> Members Action
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-users">Save Changes</button>
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