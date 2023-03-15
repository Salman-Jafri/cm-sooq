@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}" style="padding-top: 5rem; height: 20px !important; background: url({{ url('frontend/images/banners/banner2.jpg') }}) center center;">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0" style="margin-top:-60px !important;">
               <h1 class="text-uppercase mt-0 pt-0">My Office</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb pt-2 watchlist">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-footer">
                  <div class="wideget-user-tab">
                     <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                           <ul class="nav">
                              <li><a href="#" class="ofnav ofc-cars">My Cars</a></li>
                              <li><a href="#" class="ofnav ofc-expenses">Expenses </a></li>
                              <li><a href="#" class="ofnav ofc-expense-category">Expense Category </a></li>
                              <li><a href="#" class="ofnav ofc-clients active">My Clients</a></li>
                              <li><a href="#" class="ofnav ofc-profit-report">Profit Report </a></li>
                              <li><a href="#" class="ofnav ofc-invoice-settings">Invoice Settings </a></li>
                              <li><a href="#" class="ofnav ofc-users ">Users </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card mb-0">
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <div class="profile-log-switch">
                           <div class="media-heading">
                              <div class="row">
                                 <div class="col-6">
                                    <h3 class="card-title mb-3 font-weight-bold">My Clients</h3>
                                 </div>
                                 <div class="col-6 text-right">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#add-new-modal"><i class="fas fa-plus"></i> Add New</button>
                                 </div>
                              </div>
                           </div>
                           <hr class="mt-0 pt-0">
                           <div class="row">
                              <div class="col-12">
                                 <div style="width:100% !important;">
                                    <div id="dt_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                       <div class="row">
                                          <div class="col-sm-12 col-md-6">
                                             <div class="dataTables_length" id="dt_length">
                                                <label>
                                                   Show 
                                                   <select name="dt_length" aria-controls="dt" class="custom-select custom-select-sm form-control form-control-sm">
                                                      <option value="10">10</option>
                                                      <option value="25">25</option>
                                                      <option value="50">50</option>
                                                      <option value="100">100</option>
                                                   </select>
                                                   entries
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6">
                                             <div id="dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dt"></label></div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <table id="dt" class="table table-bordered dt-reponsive dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="dt_info">
                                                <thead>
                                                   <tr>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 76px;" aria-label="#: activate to sort column ascending">#</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 135px;" aria-label="Name: activate to sort column ascending">Name</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 150px;" aria-label="Phone: activate to sort column ascending">Phone</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 126px;" aria-label="Sold: activate to sort column ascending">Sold</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 118px;" aria-label="Paid: activate to sort column ascending">Paid</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 263px;" aria-label="Outstanding: activate to sort column ascending">Outstanding</th>
                                                      <th class="sorting sorting_desc" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 182px;" aria-label="Actions: activate to sort column ascending" aria-sort="descending">Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="odd">
                                                      <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="modal fade" id="add-new-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="add-form">
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <label for="">Name</label>
                     <input type="text" name="client_name" id="client_name" class="form-control ifrequired">
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <label for="">Contact</label>
                     <input type="text" name="client_phone" id="client_phone" class="form-control isnumber ifrequired">
                  </div>
                  <div class="col-md-4 col-sm-12 d-none">
                     <label for="">Email</label>
                     <input type="text" name="client_email" id="client_email" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-12 d-none">
                     <label for="">Username</label>
                     <input type="text" name="client_username" id="client_username" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-12 d-none">
                     <label for="">Password</label>
                     <input type="password" name="client_password" id="client_password" class="form-control">
                  </div>
                  <div class="col-12 d-none">
                     <h6 class="text-center">{trn_access_link}</h6>
                     <div class="row">
                        <div class="col-12 text-center">
                           <h4 class="text-info" id="client_access_link"><b>https://dev.cars-importers.com/clients/<span class="text-danger" id="fill-link"></span></b></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-add">Add</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <input type="hidden" class="hid">
            <form id="edit-form">
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <label for="">Name</label>
                     <input type="text" name="client_name" id="e_client_name" class="form-control" required="">
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <label for="">Phone</label>
                     <input type="text" name="client_phone" id="e_client_phone" class="form-control isnumber" required="">
                  </div>
                  <div class="col-md-4 col-sm-12 d-none">
                     <label for="">Email</label>
                     <input type="text" name="client_email" id="e_client_email" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-12 d-none">
                     <label for="">Username</label>
                     <input type="text" name="client_username" id="e_client_username" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-12 d-none">
                     <label for="">Password</label>
                     <input type="password" name="client_password" id="e_client_password" class="form-control">
                  </div>
                  <div class="col-12 d-none">
                     <h6 class="text-center">{trn_access_link}</h6>
                     <div class="row">
                        <div class="col-12 text-center">
                           <h4 class="text-info" id="e_client_access_link"><b>https://dev.cars-importers.com/clients/<span class="text-danger" id="e-fill-link"></span></b></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-update">Save Changes</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="cars-list-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog mw-100 w-75" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cars List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-12">
                  <table class="table" id="dt-cars">
                     <thead>
                        <tr>
                           <th class="mfsz">#</th>
                           <th class="mfsz">Image</th>
                           <th class="mfsz">Description</th>
                           <th class="mfsz">VIN</th>
                           <th class="mfsz">Price</th>
                           <th class="mfsz">Parts</th>
                           <th class="mfsz">Total Cost</th>
                           <th class="mfsz">Sold</th>
                           <th class="mfsz">Paid</th>
                           <th class="mfsz">Outstanding</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="hidden-val">
@endsection