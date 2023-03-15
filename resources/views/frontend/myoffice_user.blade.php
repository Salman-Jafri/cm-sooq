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
                              <li><a href="#">Expenses </a></li>
                              <li><a href="#" class="ofnav ofc-expense-category">Expense Category </a></li>
                              <li><a href="#" class="ofnav ofc-clients">My Clients</a></li>
                              <li><a href="#" class="ofnav ofc-profit-report">Profit Report </a></li>
                              <li><a href="#" class="ofnav ofc-invoice-settings">Invoice Settings </a></li>
                              <li><a href="#" class="ofnav ofc-users active">Users </a></li>
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
                                    <h3 class="card-title mb-3 font-weight-bold">My Users</h3>
                                 </div>
                                 <div class="col-6 text-right">
                                    <button class="btn btn-danger prefix" data-toggle="modal" data-target="#add-prefix-new-modal"><i class="fas fa-plus"></i> Add Prefix</button>&nbsp;&nbsp;
                                    <button class="btn btn-danger relate-animate" data-toggle="modal" data-target="#add-new-modal" disabled=""><i class="fas fa-plus"></i> Add New</button>
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
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 13px;" aria-label="#: activate to sort column ascending">#</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 74px;" aria-label="Username: activate to sort column ascending">Username</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 79px;" aria-label="Password: activate to sort column ascending">Password</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 45px;" aria-label="Prefix: activate to sort column ascending">Prefix</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 58px;" aria-label="My Cars: activate to sort column ascending">My Cars</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 67px;" aria-label="Expenses: activate to sort column ascending">Expenses</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 124px;" aria-label="Expense Category: activate to sort column ascending">Expense Category</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 74px;" aria-label="My Clients: activate to sort column ascending">My Clients</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 92px;" aria-label="Profit Report: activate to sort column ascending">Profit Report</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 104px;" aria-label="Invoice Setting: activate to sort column ascending">Invoice Setting</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 43px;" aria-label="Users: activate to sort column ascending">Users</th>
                                                      <th class="sorting" tabindex="0" aria-controls="dt" rowspan="1" colspan="1" style="width: 62px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="odd">
                                                      <td valign="top" colspan="12" class="dataTables_empty">No data available in table</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12 col-md-5">
                                             <div class="dataTables_info" id="dt_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                          </div>
                                          <div class="col-sm-12 col-md-7">
                                             <div class="dataTables_paginate paging_simple_numbers" id="dt_paginate">
                                                <ul class="pagination">
                                                   <li class="paginate_button page-item previous disabled" id="dt_previous"><a href="#" aria-controls="dt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                   <li class="paginate_button page-item next disabled" id="dt_next"><a href="#" aria-controls="dt" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
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
                  <div class="col-md-4 col-sm-12 ">
                     <label for="">Username</label>
                     <input type="text" name="username" id="username" class="form-control nospace" required="">
                  </div>
                  <div class="col-md-4 col-sm-12 ">
                     <label class="prefix_name" style="margin-top:35px;"></label>
                  </div>
                  <div class="col-md-4 col-sm-12 ">
                     <label for="">Password</label>
                     <input type="password" name="userpass" id="userpass" class="form-control" required="">
                  </div>
               </div>
               <div class="row" style="margin-top:25px;">
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="mycars"> My Cars
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="expenses"> expenses
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="expensecategory"> Expense Category
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="myclient"> My Client
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="profitreport"> Profit Report
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="invoicesetting"> Invoice Setting
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="pchk" value="users"> Users
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-add-user">Add</button>
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
            <input type="hidden" name="uid" id="e_uid">
            <form id="edit-form">
               <div class="row">
                  <div class="col-md-4 col-sm-12 ">
                     <label for="">Username</label>
                     <input type="text" name="username" id="e_username" class="form-control nospace" required="">
                  </div>
                  <div class="col-md-4 col-sm-12 ">
                     <label class="prefix_name" style="margin-top:35px;"></label>
                  </div>
                  <div class="col-md-4 col-sm-12 ">
                     <label for="">Password</label>
                     <input type="password" name="userpass" id="e_userpass" class="form-control" required="">
                  </div>
                  <!--               <div class="col-md-4 col-sm-12 ">
                     <label for="">Prefix</label>
                     <input type="text" name="prefix" id="e_prefix" class="form-control">
                     </div> -->
               </div>
               <div class="row" style="margin-top:25px;">
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="mycars" id="per_mycars"> My Cars
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="expenses" id="per_expenses"> expenses
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="expensecategory" id="per_expensecategory"> Expense Category
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="myclient" id="per_myclient"> My Client
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="profitreport" id="per_profitreport"> Profit Report
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="invoicesetting" id="per_invoicesetting"> Invoice Setting
                  </div>
                  <div class="col-md-3">
                     <input type="checkbox" class="epchk" value="users" id="per_users"> Users
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
<div class="modal fade" id="add-prefix-new-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="add-form2">
               <div class="row">
                  <div class="col-md-12 col-sm-12 ">
                     <label for="">Prefix <span class="text-danger"><i>(Please choose wisely once added cannot be modified later)</i></span></label>
                     <input type="text" name="prefix_name" id="prefix_name" class="form-control" required="">
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-add-prefix-user">Add</button>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="hidden-val">
@endsection