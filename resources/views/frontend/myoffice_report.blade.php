@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg bannerstyle cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0 ">
               <h1 class="text-uppercase mt-0 pt-0 top-office-margin">My Office</h1>
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
                              <li><a href="" class="ofnav ofc-expense-category">Expense Category </a></li>
                              <li><a href="#">My Clients</a></li>
                              <li><a href="#" class="ofnav ofc-profit-report active">Profit Report </a></li>
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
                     <div class="col-md-6 text-left">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="start_date">From</label>
                              <input type="date" class="form-control" id="start_date" placeholder="From">
                           </div>
                           <div class="col-md-4">
                              <label for="end_date">To</label>
                              <input type="date" class="form-control" id="end_date" placeholder="To">
                           </div>
                           <div class="col-md-4">
                              <label for="">&nbsp;</label>
                              <button class="btn btn-block btn-dark" id="btn-show"><i class="fas fa-search"></i> Show</button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <h2 class="gross-margin">Gross Profit : 
                           <a href="#" data-toggle="modal" data-target="#profit-details-modal">
                           <span id="total-profit">0</span>
                           </a>
                        </h2>
                        <h2 class="gross-margin">Total Expenses : 
                           <a href="#" data-toggle="modal" data-target="#expense-details-modal">
                           <span id="total-expenses">0.00</span>
                           </a>
                        </h2>
                        <h2 class="gross-margin">Net Profit : 
                           <a href="javascript:void(0);">
                           <span id="net-profit">0.00</span>
                           </a>
                        </h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="modal fade" id="profit-details-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog mw-100 w-75" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Profit Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-12">
                  <table id="profit-dt" class="table dt-reponsive wdt-100">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Image</th>
                           <th>Description</th>
                           <th>VIN</th>
                           <th>Price</th>
                           <th>Parts</th>
                           <th>Total</th>
                           <th>Sold</th>
                           <th>Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                     <tfoot>
                        <tr class="bg-secondary text-white">
                           <th colspan="4" class="text-white"> GRAND TOTAL </th>
                           <th id="gtotal_car_price" class="text-white"></th>
                           <th id="gtotal_part_price" class="text-white"></th>
                           <th id="gtotal_total_selling" class="text-white"></th>
                           <th id="gtotal_sold_price" class="text-white"></th>
                           <th id="gtotal_profit" class="text-white"></th>
                        </tr>
                     </tfoot>
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
<div class="modal fade" id="expense-details-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Expense Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-12">
                  <table id="expense-dt" class="table dt-reponsive wdt-100">
                     <thead>
                        <tr>
                        </tr>
                        <tr>
                           <th>#</th>
                           <th>Date</th>
                           <th>Category</th>
                           <th>Title</th>
                           <th>Notes</th>
                           <th>Amount</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                     <tfoot>
                        <tr class="bg-secondary text-white">
                           <th colspan="5"> GRAND TOTAL </th>
                           <th id="gtotal_expenses"></th>
                        </tr>
                     </tfoot>
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