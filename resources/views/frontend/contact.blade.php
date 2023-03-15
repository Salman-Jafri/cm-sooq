@extends('frontend.template.main')
@section('maincontent')
<!--Contact-->
<div class="sptb-normal">
<div class="sptb bg-white mb-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-xl-4 col-md-12">
            <div class="contact-description">
               <h2>Say Hello</h2>
               <p class="mt-5">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
               <div class="mb-5">
                  <small class="text-muted">Need Help?</small>
                  <p class="mb-0 fs-16 font-weight-bold">me@Autolist.com</p>
               </div>
               <div class="mb-5">
                  <small class="text-muted">Feel Like Talking?</small>
                  <p class="mb-0 fs-16 font-weight-bold">+65 856 965 85</p>
               </div>
               <small class="text-muted">Socail Share</small>
               <ul class="list-unstyled list-inline mt-3 mb-5">
                  <li class="list-inline-item">
                     <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                     <i class="fa fa-facebook bg-facebook"></i>
                     </a>
                  </li>
                  <li class="list-inline-item">
                     <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                     <i class="fa fa-twitter bg-info"></i>
                     </a>
                  </li>
                  <li class="list-inline-item">
                     <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                     <i class="fa fa-google-plus bg-danger"></i>
                     </a>
                  </li>
                  <li class="list-inline-item">
                     <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                     <i class="fa fa-linkedin bg-linkedin"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-7 col-xl-8 col-md-12">
            <div class="single-page" >
               <div class="col-lg-12 col-md-12 mx-auto d-block">
                  <div class="wrapper wrapper2">
                     <div class="card box-shadow-0 mb-0">
                        <div class="card-body">
                           <div class="form-group">
                              <input type="text" class="form-control" id="name1" placeholder="Your Name">
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="Email Address">
                           </div>
                           <div class="form-group">
                              <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                           </div>
                           <a href="#" class="btn btn-primary">Send Message</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Contact-->
<!-- Recent Post-->
<section class="sptb2 border-top">
   <div class="container">
      <h6 class="fs-18 mb-4">Latest Posts</h6>
      <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
      <div class="row">
         <div class="col-md-12 col-lg-4">
            <div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
               <img class="w-8 h-8 mr-4" src="{{ url('frontend/images/media/6.png') }}" alt="img">
               <div class="media-body">
                  <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
                  <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
                  <div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
               <img class="w-8 h-8 mr-4" src="{{ url('frontend/images/media/4.png') }}" alt="img">
               <div class="media-body">
                  <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
                  <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
                  <div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
               <img class="w-8 h-8 mr-4" src="{{ url('frontend/images/media/2.png') }}" alt="img">
               <div class="media-body">
                  <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
                  <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
                  <div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Recent Post-->
</div>
@endsection