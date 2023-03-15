@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Expense Category</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-expense-category-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New Category </button>
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
              <th>Title</th>
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
@endsection 
@section('modal')
<!--  ADD Category MODAL -->
<div id="add-expense-category-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="category_title">Title</label>
                <input class="form-control ifrequired" type="text" name="category_title" id="category_title">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add Category</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  EDIT Category MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Edit Category</h5>
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
                <label for="e_category_title">Title</label>
                <input class="form-control ifrequired" type="text" name="category_title" id="e_category_title">
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
<div class="modal fade " id="createModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>memeber title</label>
                <input type="text" class="form-control" placeholder="memeber title" id="">
                <span id="err-title"></span>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>memeber title2</label>
                <input type="text" class="form-control" placeholder="memeber title" id="">
                <span id="err-title"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn-insert">Add New</button>
      </div>
    </div>
  </div>
</div>
<!-- update form-->
<div class="modal fade" id="updateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <input type="hidden" name="id" id="h_id" value="">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>memeber title</label>
                <input type="text" class="form-control" placeholder="memeber title" id="">
                <span id="err-title"></span>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>memeber title2</label>
                <input type="text" class="form-control" placeholder="memeber title" id="">
                <span id="err-title"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn-update">Update</button>
        <p id="err-msg"></p>
      </div>
    </div>
  </div>
</div> 
@endsection 
@section('customjs')
<!-- Custom js-->
<script></script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection