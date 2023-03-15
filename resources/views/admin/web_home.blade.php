@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Home</h4>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="home_main_text">(Search Area) Main Text (EN)</label>
              <input type="text" class="form-control" name="home_main_text" id="home_main_text" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-home-main-text">
              <i class="fas fa-save"></i> Save </button>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="home_main_text_ar">(Search Area) Main Text (AR)</label>
              <input type="text" class="form-control" name="home_main_text_ar" id="home_main_text_ar" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-home-main-text-ar">
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
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="home_sub_text">(Search Area) Sub Text (EN)</label>
              <input type="text" class="form-control" name="home_sub_text" id="home_sub_text" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-home-sub-text">
              <i class="fas fa-save"></i> Save </button>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="home_sub_text_ar">(Search Area) Sub Text (AR)</label>
              <input type="text" class="form-control" name="home_sub_text_ar" id="home_sub_text_ar" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-home-sub-text-ar">
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
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="homelt_main_text">(Latest Cars) Main Text (EN)</label>
              <input type="text" class="form-control" name="homelt_main_text" id="homelt_main_text" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-homelt-main-text">
              <i class="fas fa-save"></i> Save </button>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="homelt_main_text_ar">(Latest Cars) Main Text (AR)</label>
              <input type="text" class="form-control" name="homelt_main_text_ar" id="homelt_main_text_ar" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-homelt-main-text-ar">
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
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="homelt_sub_text">(Latest Cars) Sub Text (EN)</label>
              <input type="text" class="form-control" name="homelt_sub_text" id="homelt_sub_text" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-homelt-sub-text">
              <i class="fas fa-save"></i> Save </button>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="homelt_sub_text_ar">(Latest Cars) Sub Text (AR)</label>
              <input type="text" class="form-control" name="homelt_sub_text_ar" id="homelt_sub_text_ar" value="">
            </div>
          </div>
          <div class="col-md-2">
            <label for="">&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" id="btn-save-homelt-sub-text-ar">
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