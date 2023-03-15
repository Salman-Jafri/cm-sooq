@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Category</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-member-modal" class="btn btn-primary" data-type="normal">
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
<!-- end row --> 
@endsection 
@section('modal')
<input type="hidden" id="hidden-val">
<!--  ADD Member MODAL -->
<div id="add-member-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="AppIDD">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form id="addForm">
          @csrf
          <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="Category_title">Category Title</label>
                <input class="form-control ifrequired" type="text" name="category_title" id="category_title">
              </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add</button>
      </div>
        </form>
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
        <h5 class="modal-title mt-0" id="myModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
         <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <input type="hidden" class="hid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="Category_title">Category Title</label>
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
@endsection 
@section('customjs')
@php $version=rand(2000,4000); @endphp
<script src="{{ url('admin/custom_js/members_category.js?v='.$version)}}"></script>
@endsection