@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">WA MESSAGE</h4>
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
            <div class="form-group">
              <label for="message_text">Message Text</label>
              <textarea class="form-control" name="message_text" id="message_text"></textarea>
            </div>
          </div>
          <div class="col-md-3">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-wa-message">
              <i class="fas fa-save"></i> Save </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row --> 
@endsection 
@section('customjs')
<!-- Custom js-->
<script></script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection