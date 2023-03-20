@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}" style="padding-top: 5rem; height: 20px !important; background: url({{ url('frontend/images/banners/banner2.jpg') }} ) center center;">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0" style="margin-top:-60px !important;">
               <h1 class="text-uppercase mt-0 pt-0">Post New Ad</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="row mt-2 d-none">
   <div class="col-12 bg-info text-center text-white">
      <h6>
         We are in the process of upgrading this area, we will be back soon
      </h6>
   </div>
   <div class="col-12 bg-info text-center text-white">
      <h6>
         نحن في طور ترقية هذه المنطقة ، سنعود قريبًا
      </h6>
   </div>
</div>
<section class="sptb mt-0 pt-2 postmainform">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card mb-0">
               <div class="card-header">
                  <h4 class="">Car Information <span style="font-size:16px;" class="text-danger"><small><i>(All Fields are required)</i></small></span></h4>
               </div>
               <div class="card-body">
                  <form id="carAddForm">
                    @csrf
                     <div class="row">
                        <div class="col-sm-6 col-md-3">
                           <div class="form-group">
                              <label class="form-label" for="make_id">Make</label>
                              <select class="form-control ifrequired select2-show-search-make make_id df_make" name="make_id" id="make_id">
                                <option value="" selected>{Choose}</option>
                                 @foreach($make as $mk):
                                    <option value="<?=$mk->uid;?>"><?=$mk->make;?></option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                           <div class="form-group">
                              <label class="form-label" for="model_id">Model</label>
                              <select class="form-control ifrequired select2-show-search-model model_id df_model " name="model_id" id="model_id">
                                 <option value="" selected="">Model</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                           <div class="form-group">
                              <label class="form-label" for="year">Year</label>
                              <select class="form-control ifrequired isnumber df_year" placeholder="Year" name="year" id="year">
                                 <option value="" selected="">Choose</option>
                                 @php echo hlp_gen_years(1990,false,1);
                                 @endphp
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                           <div class="form-group">
                              <label class="form-label chk_fuel_type" for="fuel_type">Fuel Type <i class="fas fa-check text-success d-none"></i></label>
                              <select class="form-control ifrequired df_fueltype fueltype" type="text" name="fuel_type" id="fuel_type">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">Gasoline</option>
                                 <option value="2">Hybrid</option>
                                 <option value="3">Diesel</option>
                                 <option value="4">Electric</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label chk_cylinders" for="cylinders">Cylinders <i class="fas fa-check text-success d-none"></i></label>
                              <select class="form-control ifrequired df_cylinder" type="text" name="cylinders" id="cylinders">
                                 <option value="" selected="">Choose</option>
                                 <option value="7">3</option>
                                 <option value="6">4</option>
                                 <option value="1">6</option>
                                 <option value="2">8</option>
                                 <option value="8">10</option>
                                 <option value="4">12</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="transmission">Transmission</label>
                              <select class="form-control ifrequired df_transmission" type="text" name="transmission" id="transmission">
                                 <option value="" selected="">Choose</option>
                                 <option value="2">Automatic</option>
                                 <option value="1">Manual</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="keys">Keys</label>
                              <select class="form-control ifrequired df_ckeys" type="text" name="ckeys" id="ckeys">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="options">Options</label>
                              <select class="form-control ifrequired df_options" name="options" id="options">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">Full Option </option>
                                 <option value="2">Second Option </option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 d-none">
                           <div class="form-group">
                              <label class="form-label" for="lot">Expected Arrival Date</label>
                              <input class="form-control ifrequired datepicker" type="date" name="expected_arrival_date" id="expected_arrival_date" value="2023-02-08">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="color_exterior">Color Exterior</label>
                              <select class="form-control ifrequired" type="text" name="color_exterior" id="color_exterior">
                                 <option value="" selected="">Choose</option>
                                @foreach($exterior_color as $optn):
                                    <option value="<?=$optn->uid;?>" data-color="<?=$optn->color_code;?>">
                                        <?=$optn->exterior_color;?>
                                    </option>
                                @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="color_interior">Color Interior</label>
                              <select class="form-control ifrequired" type="text" name="color_interior" id="color_interior" >
                                 <option value="" selected="">Choose</option>
                                 @foreach($interior_color as $optn):
                                    <option value="<?=$optn->uid;?>" data-color="<?=$optn->color_code;?>"><?=$optn->interior_color;?></option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="drive_line">Drive Line</label>
                              <select class="form-control ifrequired df_driveline" type="text" name="drive_line" id="drive_line">
                                 <option value="" selected="">Choose</option>
                                 @foreach($drive_line as $optn):
                                    <option value="<?=$optn->uid;?>"><?=$optn->drive_line;?></option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-3 d-none">
                           <div class="form-group">
                              <label class="form-label" for="lot">LOT #</label>
                              <input class="form-control ifrequired" type="text" name="lot" id="lot" value="1">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4 d-none">
                           <div class="form-group">
                              <label class="form-label" for="vin">VIN #</label>
                              <input class="form-control" type="text" name="vin" id="vin">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="odometer">Odometer</label>
                              <select class="form-control ifrequired" name="odometer" id="odometer">
                                 <option value="" selected="">Choose</option>
                                 @foreach($odometer as $odom):
								    <option value="<?=$odom->uid;?>"><?=$odom->odometer;?></option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4 d-none">
                           <div class="form-group">
                              <label class="form-label" for="cost_price">Cost Price</label>
                              <input class="form-control ifrequired isnumber" type="text" name="cost_price" id="cost_price" value="0">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                              <label class="form-label" for="sell_price">Sell Price</label>
                              <input class="form-control ifrequired isnumber onlynumber" type="text" name="sell_price" id="sell_price">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label class="form-label" for="notes">Notes</label>
                              <textarea class="form-control" type="text" name="notes" id="notes"></textarea>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="card-header">
                  <h3 class="card-title">Car Images</h3>
                  <span style="font-size:16px;" class="text-danger d-none" id="image-required"><small><i>(Minimum 1 image required to continue)</i></small></span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-12 text-center">
                        <input type="file" name="car_uploads" id="car_uploads" accept="image/*" multiple="" class="d-none">
                        <button type="button" class="btn btn-primary" id="browse-files">
                        <i class="fas fa-camera"></i> Upload Images
                        </button>
                        <br>
                        <span id="ext-error-msg" class="text-danger"></span>
                     </div>
                  </div>
                  <div class="row" id="images-holder">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <p id="multi-img-msg" class="text-info text-center d-none">
                        Please click on an image to make it you cover image, otherwise the first image will be considered as cover image <i class="fas fa-hand-point-up"></i>
                     </p>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="button" class="btn btn-success" id="btn-post-ad">Post Your AD Now</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- modal starts -->
<div class="modal fade" id="popup-msg-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body" style="border:4px dashed grey;">
            <div class="row mt-0 pt-0 mb-0 pb-0">
               <div class="col-md-11"></div>
               <div class="col-md-1">
                  <a href="javascript:void(0);" class="close text-danger" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times" style="font-size:20px;"></i>
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="subscription-content">
                     <p class="text-center text-success" id="sb-title" style="font-size:120px;"></p>
                  </div>
                  <h4 class="text-center" id="sb-text"></h4>
                  <h6 class="text-center text-warning">
                     (This message will disappear automatically in <span id="close-counter">10</span>)
                  </h6>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="delete-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header" style="background-color:#D30000 !important;color:#FFFFFF !important;">
            <h4 class="modal-title text-center text-white">Confirmation </h4>
            <button type="button" class="close" data-dismiss="modal" style="color:#FFFFFF !important;">×</button>
         </div>
         <div class="modal-body">
            <input type="hidden" id="delete-id">
            <h1 class="text-center text-danger" style="font-size:80px;"><i class="fas fa-warning"></i></h1>
            <h2 class="text-center text-danger">Are you sure?</h2>
            <h6 class="text-center text-danger"> <i>All the data will be lost and cannot be recovered</i> </h6>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger" id="btn-delete">Yes</button>
         </div>
      </div>
   </div>
</div>
<div id="notify-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-sm" id="notify-modal-size">
      <div class="modal-content">
         <div class="modal-header" id="notify-modal-type" style="color:#FFFFFF !important;">
            <h4 class="modal-title text-center text-white">Notification </h4>
            <button type="button" class="close" data-dismiss="modal" style="color:#FFFFFF !important;">×</button>
         </div>
         <div class="modal-body">
            <h1 class="text-center" id="notify-modal-icon" style="font-size:80px;"></h1>
            <h2 class="text-center" id="notify-modal-heading"></h2>
            <h6 class="text-center" id="notify-modal-text"></h6>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="login-modal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="single-page">
                  <div class="col-12 d-block mx-auto">
                     <div class="wrapper wrapper2">
                        <form id="login-form" class="card-body" tabindex="500">
                           <h3>Login</h3>
                           <div class="row d-none" id="error-msg-div">
                              <div class="col-12">
                                 <h5 class="badge badge-danger"> Please Rectify Following to Continue </h5>
                              </div>
                              <div class="col-12 text-left text-danger">
                                 <span id="response-msg" class="text-left"></span>
                              </div>
                           </div>
                           <div class="mail">
                              <input type="text" name="username" id="username-modal" required="">
                              <label>Username</label>
                           </div>
                           <div class="passwd">
                              <input type="password" name="userpass" id="userpass-modal" required="">
                              <label>Password</label>
                           </div>
                           <div class="submit">
                              <button type="button" class="btn btn-primary btn-block" id="btn-login-modal">Login</button>
                           </div>
                           <p class="mb-2"><a href="javascript:void(0);">Forgot Password</a></p>
                           <p class="text-dark mb-0">Don't have account?<a href="https://om.sooq-cars.com/register" class="text-primary ml-1">Sign UP</a></p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/members.js')}}"></script>
@endsection
