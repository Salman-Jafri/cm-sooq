@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Sliders</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <h3> DESKTOP </h3>
    <input type="file" id="slider_image" class="d-none">
    <button type="button" class="btn btn-success" id="btn-slider-image">
      <i class="fas fa-plus"></i> ADD NEW </button>
    <span class="text-danger">Dimension (1920x600) | Format (jpg,png,gif) </span>
    <span id="file-loading-wait"></span>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row" id="slider-images-div">
          <div class="col-md-2">
            <div style="border:1px solid grey;">
              <img src="" style="max-width:200px;max-height: 200px;min-width: 200px;min-height: 200px;">
              <hr class="pb-0 mb-0">
              <center>
                <a href="javascript:void(0)" class="remove-slider-image" id="">
                  <i class="fas fa-times"></i>
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
<hr>
<div class="row">
  <div class="col-12">
    <h3> MOBILE </h3>
    <input type="file" id="slider_image_mobile" class="d-none">
    <button type="button" class="btn btn-success" id="btn-slider-image-mobile">
      <i class="fas fa-plus"></i> ADD NEW </button>
    <span class="text-danger">Dimension (1920x600) | Format (jpg,png,gif) </span>
    <span id="file-loading-wait-mobile"></span>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row" id="slider-images-div-mobile">
          <div class="col-md-2">
            <div style="border:1px solid grey;">
              <img src="" style="max-width:200px;max-height: 200px;min-width: 200px;min-height: 200px;">
              <hr class="pb-0 mb-0">
              <center>
                <a href="javascript:void(0)" class="remove-slider-image-mobile" id="">
                  <i class="fas fa-times"></i>
                </a>
              </center>
            </div>
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