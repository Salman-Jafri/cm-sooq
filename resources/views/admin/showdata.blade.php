@extends('admin.template.app')

@section('customcss')
<link href="" />
 <!-- <link href="{{ url('assets/backend/custom_css')}}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')
   <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">All Members </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Name Plate</a></li>
                                <li class="breadcrumb-item active">All Members</li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Example</h4>
                            <button type="button" class="btn btn-primary w-md waves-effect waves-light mb-4" data-toggle="modal" data-target="#createModal">
                              <i class="fas fa-plus"></i> Add Record
                             </button>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#updateModal"><i class="far fa-edit text-success"></i></a>
                                        <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#updateModal"><i class="far fa-edit text-success"></i></a>
                                        <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

@endsection

@section('modal')
   <!-- insert form-->      
                <div class="modal fade " id="createModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Record</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>memeber title</label>
                                            <input type="text" class="form-control" placeholder="memeber title" id="">
                                            <span id="err-title"></span>
                                        </div>

                                    </div>
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>memeber title2</label>
                                            <input type="text" class="form-control" placeholder="memeber title" id="">
                                            <span id="err-title"></span>
                                        </div>

                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                             <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btn-insert">Add New</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                 
                 <!-- update form-->
                <div class="modal fade" id="updateModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Record</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="h_id" value="">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>memeber title</label>
                                            <input type="text" class="form-control" placeholder="memeber title" id="">
                                            <span id="err-title"></span>
                                        </div>

                                    </div>
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>memeber title2</label>
                                            <input type="text" class="form-control" placeholder="memeber title" id="">
                                            <span id="err-title"></span>
                                        </div>

                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                             <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btn-update">Update</button>
                                <p id="err-msg"></p>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('customjs')
  <!-- Custom js-->
  <script>
     
  </script>
    <!-- <script src="{{ url('assets/backend/custom_js')}}"></script> -->
@endsection
