@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg bannerstyle cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0">
               <h1 class="text-uppercase mt-0 pt-0 top-office-margin">Watchlist</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="watchlist">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <!--Lists-->
            <div class="mt-0 mb-0">
               <div class="">
                  <div class="sptb">
                     <div class="tab-content">
                        <div class="tab-pane active" id="tab-11">
                            {!! $cars_list !!}
                        </div>
                        <div class="row d-none" id="no-results-found">
                           <div class="col-12 text-center">
                              <h2 class="text-info"><i> Sorry ! No Results Found </i></h2>
                           </div>
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
            <!--/Lists-->
         </div>
      </div>
   </div>
</section>
<input type="hidden" id="hidden-val">
@endsection
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/members.js')}}"></script>
@endsection
