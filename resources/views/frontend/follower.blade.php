@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg bannerstyle cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0 ">
               <h1 class="text-uppercase mt-0 pt-0 top-office-margin">Followers</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb mt-0 pt-2 watchlist">
   <div class="container">
      <div class="row"></div>
   </div>
</section>
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