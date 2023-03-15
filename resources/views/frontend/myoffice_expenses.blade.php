@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg bannerstyle  cover-image bg-background3 mb-0 pb-0" data-image-src="/{{ url('frontend/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0 top-office-margin">
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
                              <li><a href="#" class="ofnav ofc-expenses active">Expenses </a></li>
                              <li><a href="#" class="ofnav ofc-expense-category">Expense Category </a></li>
                              <li><a href="#" class="ofnav ofc-clients">My Clients</a></li>
                              <li><a href="#">Profit Report </a></li>
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
                                    <h3 class="card-title mb-3 font-weight-bold">Expenses</h3>
                                 </div>
                                 <div class="col-6 text-right">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#add-new-modal"><i class="fas fa-plus"></i> Add New</button>
                                 </div>
                              </div>
                           </div>
                           <hr class="mt-0 pt-0">
                           <div class="row">
                              <div class="col-12">
                                 <div class="wdt-100">
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
                                                      <th>#</th>
                                                      <th>Date</th>
                                                      <th >Category</th>
                                                      <th>Title</th>
                                                      <th >Notes</th>
                                                      <th>Amount</th>
                                                      <th >Actions</th>
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
<!-- modal starts -->
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
            <div class="row">
               <div class="col-md-8 col-ms-12">
                  <form id="add-form">
                     <div class="row">
                        <div class="col-md-3 col-sm-12">
                           <label for="">Category <a href="#" data-toggle="modal" data-target="#add-new-category-modal"><i class="fas fa-plus"></i></a></label>
                           <select name="category" id="category" class="form-control" required="">
                              <option value="" selected="">Choose</option>
                           </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Title</label>
                           <input type="text" name="expense_title" id="expense_title" class="form-control" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Amount</label>
                           <input type="text" name="expense_amount" id="expense_amount" class="form-control isnumber" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Date</label>
                           <input type="date" name="expense_date" id="expense_date" class="form-control" required="">
                        </div>
                        <div class="col-md-12 col-sm-12">
                           <label for="">Notes</label>
                           <textarea name="expense_notes" id="expense_notes" class="form-control"></textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-4 col-sm-12 border-left">
                  <div class="row">
                     <div class="col-md-12">
                        <input type="file" name="expense_uploads" id="expense_uploads" multiple="" class="d-none">
                        <h5 class="text-center">Add Images <a href="javascript:void(0);" id="browse-files"><i class="fas fa-plus"></i></a></h5>
                     </div>
                     <div class="col-md-12 imgs-div-flow" id="imgs-div">
                        <table class="table">
                           <thead>
                           </thead>
                           <tbody id="file-tbody">
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
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
            <div class="row">
               <div class="col-md-8 col-ms-12">
                  <form id="edit-form">
                     <div class="row">
                        <div class="col-md-3 col-sm-12">
                           <label for="">Category <a href="#" data-toggle="modal" data-target="#add-new-category-modal"><i class="fas fa-plus"></i></a></label>
                           <select name="category" id="e_category" class="form-control" required="">
                              <option value="" selected="">Choose</option>
                           </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Title</label>
                           <input type="text" name="expense_title" id="e_expense_title" class="form-control" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Amount</label>
                           <input type="text" name="expense_amount" id="e_expense_amount" class="form-control isnumber" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                           <label for="">Date</label>
                           <input type="date" name="expense_date" id="e_expense_date" class="form-control" required="">
                        </div>
                        <div class="col-md-12 col-sm-12">
                           <label for="">Notes</label>
                           <textarea name="expense_notes" id="e_expense_notes" class="form-control"></textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-4 col-sm-12 border-left">
                  <div class="row">
                     <div class="col-md-12">
                        <input type="file" name="expense_uploads" id="e_expense_uploads" multiple="" class="d-none">
                        <h5 class="text-center"> Add Images <a href="javascript:void(0);" id="e-browse-files"><i class="fas fa-plus"></i></a></h5>
                     </div>
                     <div class="col-md-12 imgs-div-flow" id="e-imgs-div">
                        <table class="table">
                           <thead>
                           </thead>
                           <tbody id="e-file-tbody">
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-update">Save Changes</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="add-new-category-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="add-form-category">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <label for="">Title</label>
                     <input type="text" name="category_title" id="category_title" class="form-control" required="">
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-my-modal" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-add-new-category">Add</button>
         </div>
      </div>
   </div>
</div>
@endsection