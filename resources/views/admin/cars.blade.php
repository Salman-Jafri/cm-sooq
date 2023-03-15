@extends('admin.template.app')
@section('customcss')
<!-- Custom js-->
<style>
    .mfp-wrap {
        z-index: 2000 !important;
    }
</style>

@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Cars</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <small>
                            <center><u>Conventions</u></center><br>
                            <i class="fas fa-money-check-alt"></i> = Sell Car |
                            <i class="far fa-bookmark"></i> = Make Payment |
                            <i class="fas fa-cog"></i> = Change Status |
                            <i class="fas fa-file-image"></i> = View Images
                        </small>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="tb-cars-approved" class="nav-link" data-toggle="tab" href="#tab-cars-approved" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Approved (<span id="count-tab-cars-approved"></span>)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a iid="tb-cars-pending" class="nav-link active" data-toggle="tab" href="#tab-cars-pending" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Pending (<span id="count-tab-cars-pending"></span>)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="tb-cars-declined" class="nav-link" data-toggle="tab" href="#tab-cars-declined" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Rejected (<span id="count-tab-cars-declined"></span>)</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane" id="tab-cars-approved" role="tabpanel">
                        <table id="dt_approved" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Username</th>
                                    <!--         <th>Trader</th>
                                    <th>Buyer</th> -->
                                    <th>Contact</th>
                                    <th>Description</th>
                                    <th>LOT #</th>
                                    <th>VIN #</th>
                                    <th>Cost Price</th>
                                    <th>Sell Price</th>
                                    <th>Sold Price</th>
                                    <th>Total Profit(100%)</th>
                                    <th>Platform Profit(30%)</th>
                                    <th>Shareable Profit(70%)</th>
                                    <th>Receivable (Customer)</th>
                                    <th>Received</th>
                                    <th>Remaining (REC)</th>
                                    <th>Payable (Broker)</th>
                                    <th>Paid</th>
                                    <th>Remaining (PAY)</th>
                                    <th>Expected Arrival</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane active" id="tab-cars-pending" role="tabpanel">
                        <table id="dt_pending" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Username</th>
                                    <!--         <th>Trader</th>
                                    <th>Buyer</th> -->
                                    <th>Contact</th>
                                    <th>Description</th>
                                    <th>LOT #</th>
                                    <th>VIN #</th>
                                    <th>Cost Price</th>
                                    <th>Sell Price</th>
                                    <th>Sold Price</th>
                                    <th>Total Profit(100%)</th>
                                    <th>Platform Profit(30%)</th>
                                    <th>Shareable Profit(70%)</th>
                                    <th>Receivable (Customer)</th>
                                    <th>Received</th>
                                    <th>Remaining (REC)</th>
                                    <th>Payable (Broker)</th>
                                    <th>Paid</th>
                                    <th>Remaining (PAY)</th>
                                    <th>Expected Arrival</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab-cars-declined" role="tabpanel">
                        <table id="dt_declined" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Username</th>
                                    <th>Contact</th>
                                    <!--         <th>Trader</th>
                                    <th>Buyer</th> -->
                                    <th>Description</th>
                                    <th>LOT #</th>
                                    <th>VIN #</th>
                                    <th>Cost Price</th>
                                    <th>Sell Price</th>
                                    <th>Sold Price</th>
                                    <th>Total Profit(100%)</th>
                                    <th>Platform Profit(30%)</th>
                                    <th>Shareable Profit(70%)</th>
                                    <th>Receivable (Customer)</th>
                                    <th>Received</th>
                                    <th>Remaining (REC)</th>
                                    <th>Payable (Broker)</th>
                                    <th>Paid</th>
                                    <th>Remaining (PAY)</th>
                                    <th>Expected Arrival</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row --> 

 @endsection 
@section('modal')
<input type="hidden" id="hidden-val">
<input type="hidden" id="hidden-val2">

<div id="sell-car-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Sell </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <label for="sold_price">Amount</label>
                        <input type="text" id="sold_price" class="form-control isnumber">
                    </div>
                    <div class="col-4">
                        <label for="buyer_id">Buyer</label>
                        <select class="form-control" id="buyer_id">
                            <option value="" selected="">Choose</option>
                           
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="sold_date">Date</label>
                        <input type="text" id="sold_date" class="form-control" value="" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
                    </div>
                    <div class="col-12">
                        <label for="sold_notes">Notes</label>
                        <textarea id="sold_notes" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-sell-car">Sell Now</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="get-payment-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Receive Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <label for="rec_payment_amount">Amount</label>
                        <input type="text" id="rec_payment_amount" class="form-control isnumber">
                    </div>
                    <div class="col-6">
                        <label for="rec_payment_date">Date</label>
                        <input type="text" id="rec_payment_date" class="form-control" value="" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
                    </div>
                    <div class="col-12">
                        <label for="rec_payment_notes">Notes</label>
                        <textarea id="rec_payment_notes" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Paid</th>
                                    <th>Remaining</th>
                                    <th>Notes</th>
                                    <th>Actions</th>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <th>-</th>
                                    <th>-</th>
                                    <th id="rec_principal_amount" class="rec-remaining-amount"></th>
                                    <th>-</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody id="rec-payment-history-tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-rec-payment">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="make-payment-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Make Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <label for="payment_amount">Amount</label>
                        <input type="text" id="payment_amount" class="form-control isnumber">
                    </div>
                    <div class="col-6">
                        <label for="payment_date">Date</label>
                        <input type="text" id="payment_date" class="form-control" value="" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
                    </div>
                    <div class="col-12">
                        <label for="payment_notes">Notes</label>
                        <textarea id="payment_notes" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Paid</th>
                                    <th>Remaining</th>
                                    <th>Notes</th>
                                    <th>Actions</th>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <th>-</th>
                                    <th>-</th>
                                    <th id="principal_amount" class="remaining-amount"></th>
                                    <th>-</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody id="payment-history-tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-make-payment">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="car-status-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="statusForm">
                    <div class="row">
                        <input type="hidden" name="uid" id="status-id">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="car_status">Status</label>
                                <select class="form-control ifrequired" name="car_status" id="car_status">
                                    <option value="Pending">Pending</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Declined">Declined</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-none" id="div-decline-reason">
                            <label>Declining Reason</label>
                            <textarea class="form-control" name="decline_reason" id="decline_reason"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-change-status">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="car-images-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Images</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="car-images-holder">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="expected-arrival-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Expected Arrival Date</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="expectedArrivalForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="expected_arrival_date">Date</label>
                                <input class="form-control ifrequired" name="expected_arrival_date" id="expected_arrival_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update-expected">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="report-upload-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Upload Report </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-info" id="btn-upload-car-report"> Upload Report (PDF) </button>
                        <input type="file" class="d-none" id="file-upload-car-report">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12" id="pdf-embed">
                    </div>
                </div>
                <div class="row d-none" id="div-remove-report">
                    <div class="col-12 text-center">
                        <button class="btn btn-danger" id="btn-remove-report"><i class="fas fa-times"></i> Remove Report</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="car-details-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Car Details </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Make</th>
                                    <th id="cdm-cd-make"></th>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <th id="cdm-cd-model"></th>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <th id="cdm-cd-year"></th>
                                </tr>
                                <tr>
                                    <th>VIN#</th>
                                    <th id="cdm-cd-vin"></th>
                                </tr>
                                <tr>
                                    <th>Odometer</th>
                                    <th id="cdm-cd-odometer"></th>
                                </tr>
                                <tr>
                                    <th>LOT#</th>
                                    <th id="cdm-cd-lot"></th>
                                </tr>
                                <tr>
                                    <th>Cylinders</th>
                                    <th id="cdm-cd-cylinders"></th>
                                </tr>
                                <tr>
                                    <th>Transmission</th>
                                    <th id="cdm-cd-transmission"></th>
                                </tr>
                                <tr>
                                    <th>Keys</th>
                                    <th id="cdm-cd-keys"></th>
                                </tr>
                                <tr>
                                    <th>Options</th>
                                    <th id="cdm-cd-options"></th>
                                </tr>
                                <tr>
                                    <th>Interior Color</th>
                                    <th id="cdm-cd-interior-color"></th>
                                </tr>
                                <tr>
                                    <th>Exterior Color</th>
                                    <th id="cdm-cd-exterior-color"></th>
                                </tr>
                                <tr>
                                    <th>Fuel Type</th>
                                    <th id="cdm-cd-fuel-type"></th>
                                </tr>
                                <tr>
                                    <th>Drive Line</th>
                                    <th id="cdm-cd-drive-line"></th>
                                </tr>
                                <tr>
                                    <th>Sell Price</th>
                                    <th id="cdm-cd-sell-price"></th>
                                </tr>
                                <tr>
                                    <th>Notes</th>
                                    <th id="cdm-cd-notes"></th>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-6">
                        <div class="row" id="cdm-images">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="cmd-decline-reason">Reason (if decline)</label>
                        <textarea name="" id="cdm-decline-reason" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" id="btn-approve-new" data-status="Approved"><i class="fas fa-check"></i> APPROVE</button>
                <button type="button" class="btn btn-danger waves-effect" id="btn-decline-new" data-status="Declined"><i class="fas fa-times"></i> DECLINE</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  EDIT Trader MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Car</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <form id="editForm">
                            <input type="hidden" class="hid">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12 d-none">
                                    <div class="form-group">
                                        <label for="e_origin_id">Origin</label>
                                        <select class="form-control ifrequired" type="text" name="origin_id" id="e_origin_id">
                                            <option value="" selected>Choose</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="e_make_id">Make</label>
                                        <select class="form-control ifrequired" type="text" name="make_id" id="e_make_id">
                                            
                                            <!-- <option value="" selected>Select Origin</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="e_model_id">Model</label>
                                        <select class="form-control ifrequired" type="text" name="model_id" id="e_model_id">
                                            <option value="" selected>Select Make</option>
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
                                            <option value="" selected>Choose</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="transmission">Transmission</label>
                                        <select class="form-control ifrequired" type="text" name="transmission" id="e_transmission">
                                            <option value="" selected>Choose</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="keys">Keys</label>
                                        <select class="form-control ifrequired" type="text" name="ckeys" id="e_ckeys">
                                            <option value="" selected>Choose</option>
                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="color_interior">Color-Interior</label>
                                        <select class="form-control ifrequired" type="text" name="color_interior" id="e_color_interior">
                                            <option value="" selected>Choose</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="color_exterior">Color-Exterior</label>
                                        <select class="form-control ifrequired" type="text" name="color_exterior" id="e_color_exterior">
                                            <option value="" selected>Choose</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="options">Options</label>
                                        <select class="form-control ifrequired" type="text" name="options" id="e_options">
                                            <option value="" selected>Choose</option>
                                            
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="fuel_type">Fuel Type</label>
                                        <select class="form-control ifrequired" type="text" name="fuel_type" id="e_fuel_type">
                                            <option value="" selected>Choose</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="drive_line">Drive Line</label>
                                        <select class="form-control ifrequired" type="text" name="drive_line" id="e_drive_line">
                                            <option value="" selected>Choose</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="e_expected_arrival_date">Expected Arrival Date</label>
                                        <input class="form-control ifrequired" type="text" name="expected_arrival_date" id="e_expected_arrival_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
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
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="e_odometer">Odometer</label>
                                        <input class="form-control ifrequired isnumber" type="text" name="odometer" id="e_odometer">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="e_cost_price">Cost Price</label>
                                        <input class="form-control ifrequired isnumber" type="text" name="cost_price" id="e_cost_price">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
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
                    <div class="col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <input type="file" name="car_uploads" id="e_car_uploads" accept="image/*" multiple class="d-none">
                                <button type="button" class="btn btn-primary btn-block" id="e-browse-files"><i class="fas fa-folder-open"></i> Add Images <i class="fas fa-plus"></i> </button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
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
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-update">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="change-member-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Change Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="car_status">Members</label>
                            <select class="form-control ifrequired select2" id="to_change_member" style="width:100%;">
                                <option value="" selected>Choose</option>
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-change-member">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection 
@section('customjs')
<!-- Custom js-->
<script>

</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection