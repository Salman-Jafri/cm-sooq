@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Footer</h4>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Contact Details <input type="checkbox" class="enable-disable" data-type="contact">
            </h5>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="contact_address">Physical Address</label>
              <input type="text" class="form-control" name="contact_address" id="contact_address" value="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="contact_email">Email</label>
              <input type="text" class="form-control" name="contact_email" id="contact_email" value="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="contact_phone">Phone</label>
              <input type="text" class="form-control" name="contact_phone" id="contact_phone" value="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="contact_fax">Fax</label>
              <input type="text" class="form-control" name="contact_fax" id="contact_fax" value="">
            </div>
          </div>
          <div class="col-md-3">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-contact-details">
              <i class="fas fa-save"></i> Save </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<hr>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Social Media <input type="checkbox" class="enable-disable" data-type="social_media">
            </h5>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sm_facebook">
                <i class="fab fa-facebook"></i> Facebook </label>
              <input type="text" class="form-control" name="sm_facebook" id="sm_facebook" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sm_twitter">
                <i class="fab fa-twitter"></i> Twitter </label>
              <input type="text" class="form-control" name="sm_twitter" id="sm_twitter" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sm_instagram">
                <i class="fab fa-instagram"></i> Instagram </label>
              <input type="text" class="form-control" name="sm_instagram" id="sm_instagram" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sm_linkedin">
                <i class="fab fa-linkedin"></i> LinkedIn </label>
              <input type="text" class="form-control" name="sm_linkedin" id="sm_linkedin" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-social-media">
              <i class="fas fa-save"></i> Save </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<hr>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Copyright Information <input type="checkbox" class="enable-disable" data-type="copyright">
            </h5>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="copyright_text">&copy; Copyright Text</label>
              <input type="text" class="form-control" name="copyright_text" id="copyright_text" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-copyright">
              <i class="fas fa-save"></i> Save </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Subscribe <input type="checkbox" class="enable-disable" data-type="subscribe">
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Download Apps <input type="checkbox" class="enable-disable" data-type="download_apps">
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Payments <input type="checkbox" class="enable-disable" data-type="payments">
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<hr>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> QUICK LINKS <input type="checkbox" class="enable-disable" data-type="quick_links">
            </h5>
          </div>
          <div class="col-md-4">
            <button type="button" data-toggle="modal" data-target="#add-new-link-modal" class="btn btn-primary">
              <i class="fas fa-plus"></i> Add New Link </button>
          </div>
        </div>
        <br>
        <table id="dtLinks" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>#</th>
              <th>Title (EN)</th>
              <th>Title (AR)</th>
              <th>Link</th>
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
<!--  ADD Category MODAL -->
<div id="add-new-link-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addLinkForm">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="link_title">Title (EN)</label>
                <input class="form-control ifrequired" type="text" name="link_title" id="link_title">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="link_title_ar">Title (AR)</label>
                <input class="form-control ifrequired" type="text" name="link_title_ar" id="link_title_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="link_link">Link</label>
                <input class="form-control ifrequired" type="text" name="link_link" id="link_link">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add-link">Add</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  EDIT Category MODAL -->
<div id="edit-link-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Edit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editLinkForm">
          <input type="hidden" class="hid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_link_title">Title</label>
                <input class="form-control ifrequired" type="text" name="link_title" id="e_link_title">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_link_title_ar">Title (AR)</label>
                <input class="form-control ifrequired" type="text" name="link_title_ar" id="e_link_title_ar">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="e_link_link">Link</label>
                <input class="form-control ifrequired" type="text" name="link_link" id="e_link_link">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-link">Save Changes</button>
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