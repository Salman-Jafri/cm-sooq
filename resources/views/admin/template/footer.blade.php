 <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2023 © RWT.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Design & Develop by Royal World Technology
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->
<div id="delete-modal" class="animated flipInY modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#D30000 !important;color:#FFFFFF !important;">
        <h4 class="modal-title text-center text-white">Confirmation </h4>
        <button type="button" class="close" data-dismiss="modal" style="color:#FFFFFF !important;">&times;</button>
      </div>
      <div class="modal-body">
           <input type="hidden" id="delete-id">
           <h1 class="text-center text-danger" style="font-size:80px;"><i class="mdi mdi-alert-decagram-outline"></i></h1>
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
