@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg bannerstyle cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontent/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0">
               <h1 class="text-uppercase mt-0 pt-0 top-office-margin">Following</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb mt-0 pt-2 watchlist">
   <div class="container">
      <div class="row">
      </div>
   </div>
</section>
<!-- EDIT Modal -->
<div class="modal fade" id="edit-ad-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog mw-100 w-100">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-8">
                  <form id="carEditForm">
                     <input type="hidden" class="hid">
                     <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_origin_id">Origin</label>
                              <select class="form-control ifrequired" type="text" name="origin_id" id="e_origin_id">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_make_id">Make</label>
                              <select class="form-control ifrequired" type="text" name="make_id" id="e_make_id">
                                 <option value="" selected="">Select Origin</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_model_id">Model</label>
                              <select class="form-control ifrequired" type="text" name="model_id" id="e_model_id">
                                 <option value="" selected="">Select Make</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_year">Year</label>
                              <input class="form-control ifrequired isnumber" type="text" name="year" id="e_year">
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="cylinders">Cylinders</label>
                              <select class="form-control ifrequired" type="text" name="cylinders" id="e_cylinders">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="transmission">Transmission</label>
                              <select class="form-control ifrequired" type="text" name="transmission" id="e_transmission">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="keys">Keys</label>
                              <select class="form-control ifrequired" type="text" name="ckeys" id="e_ckeys">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_interior">Color-Interior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_interior" id="e_color_interior" data-select2-id="e_color_interior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="2">Choose</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_interior-container"><span class="select2-selection__rendered" id="select2-e_color_interior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_exterior">Color-Exterior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_exterior" id="e_color_exterior" data-select2-id="e_color_exterior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="4">Choose</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_exterior-container"><span class="select2-selection__rendered" id="select2-e_color_exterior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="options">Options</label>
                              <select class="form-control ifrequired" type="text" name="options" id="e_options">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="fuel_type">Fuel Type</label>
                              <select class="form-control ifrequired" type="text" name="fuel_type" id="e_fuel_type">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="drive_line">Drive Line</label>
                              <select class="form-control ifrequired" type="text" name="drive_line" id="e_drive_line">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_lot">Lot #</label>
                              <input class="form-control ifrequired" type="text" name="lot" id="e_lot">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_vin">VIN #</label>
                              <input class="form-control ifrequired" type="text" name="vin" id="e_vin">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_cost_price">Cost Price</label>
                              <input class="form-control ifrequired isnumber" type="text" name="cost_price" id="e_cost_price">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_sell_price">Sell Price</label>
                              <input class="form-control ifrequired isnumber" type="text" name="sell_price" id="e_sell_price">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="e_notes">Notes</label>
                              <textarea class="form-control" type="text" name="notes" id="e_notes"></textarea>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-12 text-center">
                        <input type="file" name="car_uploads" id="e_car_uploads" accept="image/*" multiple="" class="d-none">
                        <button type="button" class="btn btn-primary" id="e-browse-files">
                        <i class="fas fa-camera"></i> Upload Images
                        </button>
                        <br>
                        <span id="e-ext-error-msg" class="text-danger"></span>
                     </div>
                  </div>
                  <div class="row image-heightoverflow" id="e-images-holder ">
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p id="multi-img-msg" class="text-info text-center d-none">
                           Please click on an image to make it you cover image, otherwise the first image will be considered as cover image <i class="fas fa-hand-point-up"></i> 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-ad">Save Changes</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="edit-ad-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog mw-100 w-100">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-8">
                  <form id="carEditForm">
                     <input type="hidden" class="hid">
                     <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_origin_id">Origin</label>
                              <select class="form-control ifrequired" type="text" name="origin_id" id="e_origin_id">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_make_id">Make</label>
                              <select class="form-control ifrequired" type="text" name="make_id" id="e_make_id">
                                 <option value="" selected="">Select Origin</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_model_id">Model</label>
                              <select class="form-control ifrequired" type="text" name="model_id" id="e_model_id">
                                 <option value="" selected="">Select Make</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_year">Year</label>
                              <input class="form-control ifrequired isnumber" type="text" name="year" id="e_year">
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="cylinders">Cylinders</label>
                              <select class="form-control ifrequired" type="text" name="cylinders" id="e_cylinders">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="transmission">Transmission</label>
                              <select class="form-control ifrequired" type="text" name="transmission" id="e_transmission">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="keys">Keys</label>
                              <select class="form-control ifrequired" type="text" name="ckeys" id="e_ckeys">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_interior">Color-Interior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_interior" id="e_color_interior" data-select2-id="e_color_interior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="2">Choose</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_interior-container"><span class="select2-selection__rendered" id="select2-e_color_interior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_exterior">Color-Exterior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_exterior" id="e_color_exterior" data-select2-id="e_color_exterior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="4">Choose</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_exterior-container"><span class="select2-selection__rendered" id="select2-e_color_exterior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="options">Options</label>
                              <select class="form-control ifrequired" type="text" name="options" id="e_options">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="fuel_type">Fuel Type</label>
                              <select class="form-control ifrequired" type="text" name="fuel_type" id="e_fuel_type">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="drive_line">Drive Line</label>
                              <select class="form-control ifrequired" type="text" name="drive_line" id="e_drive_line">
                                 <option value="" selected="">Choose</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_lot">Lot #</label>
                              <input class="form-control ifrequired" type="text" name="lot" id="e_lot">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_vin">VIN #</label>
                              <input class="form-control ifrequired" type="text" name="vin" id="e_vin">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_cost_price">Cost Price</label>
                              <input class="form-control ifrequired isnumber" type="text" name="cost_price" id="e_cost_price">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="e_sell_price">Sell Price</label>
                              <input class="form-control ifrequired isnumber" type="text" name="sell_price" id="e_sell_price">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="e_notes">Notes</label>
                              <textarea class="form-control" type="text" name="notes" id="e_notes"></textarea>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-12 text-center">
                        <input type="file" name="car_uploads" id="e_car_uploads" accept="image/*" multiple="" class="d-none">
                        <button type="button" class="btn btn-primary" id="e-browse-files">
                        <i class="fas fa-camera"></i> Upload Images
                        </button>
                        <br>
                        <span id="e-ext-error-msg" class="text-danger"></span>
                     </div>
                  </div>
                  <div class="row image-heightoverflow" id="e-images-holder">
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p id="multi-img-msg" class="text-info text-center d-none">
                           Please click on an image to make it you cover image, otherwise the first image will be considered as cover image <i class="fas fa-hand-point-up"></i> 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-ad">Save Changes</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="text-center" id="exampleModalLabel">Confirmation</h5>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-12 text-center">
                  <h2 class="text-info"> ARE YOUR SURE ? </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-12 text-center">
                  <button id="btn-conf-yes" class="btn btn-success btn-lg btn-block" type="button"><i class="fas fa-check"></i> YES - PROCEED</button>
               </div>
               <div class="col-md-6 col-sm-12 text-center">
                  <button class="btn btn-danger btn-lg btn-block" type="button" data-dismiss="modal"><i class="fas fa-times"></i> NO - CANCEL</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="hidden-val">
@endsection