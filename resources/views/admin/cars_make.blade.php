@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Cars Make</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-buyer-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New Make </button>
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
              <th>Origin</th>
              <th>Make (EN)</th>
              <th>Make (AR)</th>
              <th>Logo</th>
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
<!--  ADD Buyer MODAL -->
<div id="add-buyer-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Make</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
           @csrf   
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="origin_id">Origin</label>
                <select class="form-control ifrequired origin_id" type="text" name="origin_id" id="origin_id">
                  <option value="" selected> Choose</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="make">Make (EN)</label>
                <input class="form-control ifrequired" type="text" name="make" id="make">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="make_ar">Make (AR)</label>
                <input class="form-control ifrequired" type="text" name="make_ar" id="make_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="file"  name="make_logo" id="make_logo" class="d-none ifrequired">
                <img src="../all_images/car-logo-placeholder.png" class="img-fluid cursor-pointer" id="make_logo_preview">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add Make</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  EDIT Buyer MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Edit Make</h5>
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
                <label for="e_origin_id">Origin</label>
                <select class="form-control ifrequired origin_id" type="text" name="origin_id" id="e_origin_id">
                  <option value="" selected> Choose</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="">Make (EN)</label>
                <input class="form-control ifrequired" type="text" name="make" id="e_make">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="">Make (AR)</label>
                <input class="form-control ifrequired" type="text" name="make_ar" id="e_make_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="file" name="make_logo" id="e_make_logo" class="d-none">
                <img src="../car-logo-placeholder.png" class="img-fluid cursor-pointer" id="e_make_logo_preview">
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
<input type="hidden" id="hidden-val"> 
@endsection 
@section('customjs')
<script src="{{ url('admin/custom_js/cars_make.js')}}"></script>
@endsection