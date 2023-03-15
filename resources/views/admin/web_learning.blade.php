@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Learning</h4>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="learning_button_title">Button Title (EN)</label>
              <input type="text" class="form-control" name="learning_button_title" id="learning_button_title" value="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="learning_button_title_ar">Button Title (AR)</label>
              <input type="text" class="form-control" name="learning_button_title_ar" id="learning_button_title_ar" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="home_main_text">
                <i class="fab fa-youtube text-danger"></i> YouTube Link </label>
              <input type="text" class="form-control" name="youtube_link" id="youtube_link" value="">
            </div>
          </div>
          <div class="col-md-1 text-center">
            <label for="">Status : </label>
            <h2>
              <a href="javascript:void(0)" class="text-muted" id="change-learning-status" data-status="1">
                <i class="fas fa-toggle-off"></i>
              </a>
            </h2>
            <span id="show-learning-status-text">(InActive)</span>
            <h2>
              <a href="javascript:void(0)" class="text-danger" id="change-learning-status" data-status="0">
                <i class="fas fa-toggle-on"></i>
              </a>
            </h2>
            <span id="show-learning-status-text">(Active)</span>
          </div>
          <div class="col-md-1">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-youtube-learning-link">
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
@section('modal') 
@endsection 
@section('customjs')
<!-- Custom js-->
<script>

</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection