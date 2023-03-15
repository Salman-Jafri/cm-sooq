@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">CARS EXTERIOR COLOR</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-buyer-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New </button>
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
              <th>Color Title (EN)</th>
              <th>Color Title (AR)</th>
              <th>Color Code</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="tablecontents"></tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<!-- end row --> 
@endsection 
@section('modal')
<!--  ADD Buyer MODAL -->
<div id="add-buyer-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addForm">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="exterior_color">Color Title (EN)</label>
                <input class="form-control ifrequired" type="text" name="exterior_color" id="exterior_color">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="exterior_color_ar">Color Title (AR)</label>
                <input class="form-control ifrequired" type="text" name="exterior_color_ar" id="exterior_color_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Color Code</label>
                <div class="input-group colorpicker-default colorpicker-element" title="Using format option" data-colorpicker-id="2">
                  <input class="form-control input-lg ifrequired" type="text" name="color_code" id="color_code" value="#4667cc">
                  <span class="input-group-append">
                    <span class="input-group-text colorpicker-input-addon" data-original-title="" title="" tabindex="0">
                      <i style="background: rgb(70, 103, 204) none repeat scroll 0% 0%;"></i>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add</button>
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
        <h5 class="modal-title mt-0" id="myModalLabel">Edit</h5>
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
                <label for="e_exterior_color">Color Title (EN)</label>
                <input class="form-control ifrequired" type="text" name="exterior_color" id="e_exterior_color">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_exterior_color_ar">Color Title (AR)</label>
                <input class="form-control ifrequired" type="text" name="exterior_color_ar" id="e_exterior_color_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Color Code</label>
                <div id="e-component-colorpicker" class="input-group colorpicker-default colorpicker-element" title="Using format option" data-colorpicker-id="2">
                  <input class="form-control input-lg ifrequired" type="text" name="color_code" id="e_color_code" value="">
                  <span class="input-group-append">
                    <span class="input-group-text colorpicker-input-addon" data-original-title="" title="" tabindex="0">
                      <i style="background: rgb(70, 103, 204) none repeat scroll 0% 0%;"></i>
                    </span>
                  </span>
                </div>
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
<!-- Custom js-->
<script>
    
</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection