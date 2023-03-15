@extends('admin.template.app') 
@section('customcss')
<!-- Custom css-->
<style type="text/css">
  .table td {
    word-break: break-all;
  }

  .footer {
    display: none;
  }

  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    margin-top: -15px !important;
  }

  .d-flex li {
    list-style-type: none;
    padding-top: 18px;
  }
</style> 
@endsection 
@section('content') <div class="row" style="margin-top:90px;">
  <div class="col-md-6">
    <div class="col-12">
      <h5>Daily Registerd</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="mysecondchart"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-12">
      <h5>Total Registered</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="alreg_users"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-12">
      <h5>Daily Adverstisment</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="mysecondchart2"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-12">
      <h5>Total Adverstisment</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="chartalladv"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-12">
      <h5>All Visits</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="mysecondchart3"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-12">
      <h5>All Views</h5>
    </div>
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div id="mysecondchart4"></div>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="row"></div> --> 
@endsection @section('modal') 
@endsection @section('customjs')
<!-- Custom js-->
<script>
    
</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection