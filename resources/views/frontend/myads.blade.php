@extends('frontend.template.main')
@section('maincontent')
<div class="sptb-only-bottom">
<section>
   <div class="bannerimg bannerstyle cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0">
               <h1 class="text-uppercase mt-0 pt-0 top-office-margin">My Ads</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb pt-2 mt-0">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="">
               <div class="">
                  <div class="border-0">
                     <div class="wideget-user-tab wideget-user-tab3">
                        <div class="tab-menu-heading">
                           <div class="tabs-menu1">
                              <ul class="nav">
                                 <li class="">
                                    <a href="#active-ads-tab" class="" data-toggle="tab">Active (<span id="active-ads-count">0</span>)</a>
                                 </li>
                                 <li>
                                    <a href="#inactive-ads-tab" data-toggle="tab" class="active">Inactive (<span id="inactive-ads-count">0</span>)</a>
                                 </li>
                                 <li>
                                    <a href="#pending-ads-tab" data-toggle="tab" class="">Pending (<span id="pending-ads-count">0</span>)</a>
                                 </li>
                                 <li>
                                    <a href="#declined-ads-tab" data-toggle="tab" class="">Declined (<span id="declined-ads-count">0</span>)</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-content border-left border-right border-top br-tr-3 border-bottom br-br-3 br-bl-3 p-5 bg-white mb-4">
                        <div class="tab-pane" id="active-ads-tab">
                           <div class="mt-0 mb-0">
                              <div class="">
                                 <div class="">
                                    <div class=" mb-0">
                                       <div class="d-none">
                                          <div class="bg-white p-5 item2-gl-nav d-flex">
                                             <h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
                                             <ul class="nav item2-gl-menu ml-auto mt-1">
                                                <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                             </ul>
                                             <div class="d-sm-flex">
                                                <label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
                                                <div class="selectgroup">
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Price" class="selectgroup-input" checked="">
                                                   <span class="selectgroup-button">Price <i class="fa fa-sort ml-1"></i></span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Popularity" class="selectgroup-input">
                                                   <span class="selectgroup-button">Popularity</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Latest" class="selectgroup-input">
                                                   <span class="selectgroup-button">Latest</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-0">
                                                   <input type="radio" name="value" value="Rating" class="selectgroup-input">
                                                   <span class="selectgroup-button">Rating</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane active show-active-cars" id="tab-11">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="center-block text-center d-none">
                                    <ul class="pagination mb-3">
                                       <li class="page-item page-prev disabled">
                                          <a class="page-link" href="#" tabindex="-1">Prev</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item page-next">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane active" id="inactive-ads-tab">
                           <div class="mt-0 mb-0">
                              <div class="">
                                 <div class="">
                                    <div class=" mb-0">
                                       <div class="d-none">
                                          <div class="bg-white p-5 item2-gl-nav d-flex">
                                             <h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
                                             <ul class="nav item2-gl-menu ml-auto mt-1">
                                                <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                             </ul>
                                             <div class="d-sm-flex">
                                                <label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
                                                <div class="selectgroup">
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Price" class="selectgroup-input" checked="">
                                                   <span class="selectgroup-button">Price <i class="fa fa-sort ml-1"></i></span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Popularity" class="selectgroup-input">
                                                   <span class="selectgroup-button">Popularity</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Latest" class="selectgroup-input">
                                                   <span class="selectgroup-button">Latest</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-0">
                                                   <input type="radio" name="value" value="Rating" class="selectgroup-input">
                                                   <span class="selectgroup-button">Rating</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane active show-inactive-cars" id="tab-11">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="center-block text-center d-none">
                                    <ul class="pagination mb-3">
                                       <li class="page-item page-prev disabled">
                                          <a class="page-link" href="#" tabindex="-1">Prev</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item page-next">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="pending-ads-tab">
                           <div class="mt-0 mb-0">
                              <div class="">
                                 <div class="">
                                    <div class=" mb-0">
                                       <div class="d-none">
                                          <div class="bg-white p-5 item2-gl-nav d-flex">
                                             <h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
                                             <ul class="nav item2-gl-menu ml-auto mt-1">
                                                <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                             </ul>
                                             <div class="d-sm-flex">
                                                <label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
                                                <div class="selectgroup">
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Price" class="selectgroup-input" checked="">
                                                   <span class="selectgroup-button">Price <i class="fa fa-sort ml-1"></i></span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Popularity" class="selectgroup-input">
                                                   <span class="selectgroup-button">Popularity</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Latest" class="selectgroup-input">
                                                   <span class="selectgroup-button">Latest</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-0">
                                                   <input type="radio" name="value" value="Rating" class="selectgroup-input">
                                                   <span class="selectgroup-button">Rating</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane active show-pending-cars" id="tab-11">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="center-block text-center d-none">
                                    <ul class="pagination mb-3">
                                       <li class="page-item page-prev disabled">
                                          <a class="page-link" href="#" tabindex="-1">Prev</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item page-next">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="declined-ads-tab">
                           <div class="mt-0 mb-0">
                              <div class="">
                                 <div class="">
                                    <div class=" mb-0">
                                       <div class="d-none">
                                          <div class="bg-white p-5 item2-gl-nav d-flex">
                                             <h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
                                             <ul class="nav item2-gl-menu ml-auto mt-1">
                                                <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                             </ul>
                                             <div class="d-sm-flex">
                                                <label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
                                                <div class="selectgroup">
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Price" class="selectgroup-input" checked="">
                                                   <span class="selectgroup-button">Price <i class="fa fa-sort ml-1"></i></span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Popularity" class="selectgroup-input">
                                                   <span class="selectgroup-button">Popularity</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-md-0">
                                                   <input type="radio" name="value" value="Latest" class="selectgroup-input">
                                                   <span class="selectgroup-button">Latest</span>
                                                   </label>
                                                   <label class="selectgroup-item mb-0">
                                                   <input type="radio" name="value" value="Rating" class="selectgroup-input">
                                                   <span class="selectgroup-button">Rating</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane active show-declined-cars" id="tab-11">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="center-block text-center d-none">
                                    <ul class="pagination mb-3">
                                       <li class="page-item page-prev disabled">
                                          <a class="page-link" href="#" tabindex="-1">Prev</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item page-next">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Lists-->
            <!--/Lists-->
         </div>
      </div>
   </div>
</section>
</div>
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
                              <label for="e_make_id">Make</label>
                              <select class="form-control ifrequired" type="text" name="make_id" id="e_make_id">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">ACURA</option>
                                 <option value="120">ALFA ROMEO</option>
                                 <option value="3">ASTON MARTIN</option>
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
                                 <option value="4">12</option>
                                 <option value="1">4</option>
                                 <option value="2">6</option>
                                 <option value="3">8</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="transmission">Transmission</label>
                              <select class="form-control ifrequired" type="text" name="transmission" id="e_transmission">
                                 <option value="" selected="">Choose</option>
                                 <option value="2">Automatic</option>
                                 <option value="1">Manual</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="keys">Keys</label>
                              <select class="form-control ifrequired" type="text" name="ckeys" id="e_ckeys">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_exterior">Color-Exterior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_exterior" id="e_color_exterior" style="width:100% !important;" data-select2-id="e_color_exterior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="4">Choose</option>
                                 <option value="7" data-color="#F5F5DC">Beige</option>
                                 <option value="5" data-color="#000000">Black</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_exterior-container"><span class="select2-selection__rendered" id="select2-e_color_exterior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="color_interior">Color-Interior</label>
                              <select class="form-control ifrequired select2-hidden-accessible" type="text" name="color_interior" id="e_color_interior" style="width:100% !important;" data-select2-id="e_color_interior" tabindex="-1" aria-hidden="true">
                                 <option value="" selected="" data-select2-id="2">Choose</option>
                                 <option value="4" data-color="#F5F5DC">Beige</option>
                                 <option value="2" data-color="#000000">Black</option>

                              </select>
                              <span class="select2 select2-container select2-container--default wdt-100"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-e_color_interior-container"><span class="select2-selection__rendered" id="select2-e_color_interior-container" role="textbox" aria-readonly="true" title="Choose">Choose</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="options">Options</label>
                              <select class="form-control ifrequired" type="text" name="options" id="e_options">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">Full Option </option>
                                 <option value="2">Second Option </option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="fuel_type">Fuel Type</label>
                              <select class="form-control ifrequired" type="text" name="fuel_type" id="e_fuel_type">
                                 <option value="" selected="">Choose</option>
                                 <option value="3">Diesel</option>
                                 <option value="4">Electric</option>
                                 <option value="1">Gasoline</option>
                                 <option value="2">Hybrid</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label for="drive_line">Drive Line</label>
                              <select class="form-control ifrequired" type="text" name="drive_line" id="e_drive_line">
                                 <option value="" selected="">Choose</option>
                                 <option value="1">4 x 4</option>
                                 <option value="3">Front</option>
                                 <option value="2">Rear</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 d-none">
                           <div class="form-group">
                              <label for="e_lot">Lot #</label>
                              <input class="form-control" type="text" name="lot" id="e_lot">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 d-none">
                           <div class="form-group">
                              <label for="e_vin">VIN #</label>
                              <input class="form-control" type="text" name="vin" id="e_vin">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 d-none">
                           <div class="form-group">
                              <label for="e_cost_price">Cost Price</label>
                              <input class="form-control isnumber" type="text" name="cost_price" id="e_cost_price">
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
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
                  <div class="row" id="e-images-holder image-heightoverflow">
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
            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-ad">ReSubmit</button>
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
<div class="modal fade" id="add-car-to-my-office-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <form id="add-form">
                     <div class="row">
                        <div class="col-md-4 col-sm-12">
                           <label for="">Make</label>
                           <br>
                           <input type="hidden" class="form-control" name="car_make" id="car_make">
                           <input type="text" class="form-control" id="car_make_title" readonly="" required="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <label for="">Model</label>
                           <br>
                           <input type="hidden" class="form-control" name="car_model" id="car_model">
                           <input type="text" class="form-control" id="car_model_title" readonly="" required="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <label for="">Year</label>
                           <br>
                           <input type="text" class="form-control" name="car_year" id="car_year" readonly="" required="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <label for="">VIN #</label>
                           <input type="text" name="car_vin" id="car_vin" class="form-control" readonly="" required="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <label for="">Cost Price</label>
                           <input type="text" name="car_price" id="car_price" class="form-control isnumber" required="">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-add-to-office">Add</button>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="hidden-val">
@endsection