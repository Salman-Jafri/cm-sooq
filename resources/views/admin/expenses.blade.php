@extends('admin.template.app') 
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Expenses</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <button type="button" data-toggle="modal" data-target="#add-expense-modal" class="btn btn-primary">
      <i class="fas fa-plus"></i> Add New </button>
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <table id="dt" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Category</th>
              <th>Title</th>
              <th>Amount</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row --> 
@endsection 
@section('modal')
<!--  ADD EXPENSE MODAL -->
<div id="add-expense-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Add New Expense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <form id="addForm">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control ifrequired" type="text" name="category_id" id="category_id">
                      <option value="" selected="">Choose</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="expense_title">Title</label>
                    <input class="form-control ifrequired" type="text" name="expense_title" id="expense_title">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="expense_amount">Amount</label>
                    <input class="form-control ifrequired isnumber" type="text" name="expense_amount" id="expense_amount">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="expense_date">Date</label>
                    <input type="text" name="expense_date" id="expense_date" class="form-control" data-date-autoclose="true" readonly>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="expense_notes">Notes</label>
                    <textarea class="form-control" type="text" name="expense_notes" id="expense_notes"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-sm-12 border-left border-muted">
            <div class="row">
              <div class="col-12">
                <input type="file" name="expense_uploads" id="expense_uploads" multiple class="d-none">
                <button type="button" class="btn btn-primary btn-block" id="browse-files">
                  <i class="fas fa-folder-open"></i> Add Files <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <thead></thead>
                  <tbody id="file-tbody"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-add">Add</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--  EDIT Trader MODAL -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="myModalLabel">Edit Expense</h5>
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
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="e_category_id">Category</label>
                    <select class="form-control ifrequired" type="text" name="category_id" id="e_category_id">
                      <option value="" selected="">Choose</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="e_expense_title">Title</label>
                    <input class="form-control ifrequired" type="text" name="expense_title" id="e_expense_title">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="e_expense_amount">Amount</label>
                    <input class="form-control ifrequired isnumber" type="text" name="expense_amount" id="e_expense_amount">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="e_expense_date">Date</label>
                    <input type="text" name="expense_date" id="e_expense_date" class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" readonly>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="e_expense_notes">Notes</label>
                    <textarea class="form-control" type="text" name="expense_notes" id="e_expense_notes"></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="row">
              <div class="col-12">
                <input type="file" name="expense_uploads" id="e_expense_uploads" multiple class="d-none">
                <button type="button" class="btn btn-primary btn-block" id="e-browse-files">
                  <i class="fas fa-folder-open"></i> Add Files <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <thead></thead>
                  <tbody id="e-file-tbody"></tbody>
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
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal --> 
@endsection 
@section('customjs')
<!-- Custom js-->
<script>

</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection