@extends('frontend.template.main')
@section('customcss')
<style>
    /*details page custom css*/

   flex-caption {
     width: 96%;
     padding: 2%;
     left: 0;
     bottom: 0;
     background: rgba(0,0,0,.5);
     color: #fff;
     text-shadow: 0 -1px 0 rgba(0,0,0,.3);
     font-size: 14px;
     line-height: 18px;
   }
   li.css a {
     border-radius: 0;
   }


#custom-ol .carousel-indicators {
    position: absolute;
    bottom: 276px;
    left: 0;
    z-index: 15;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    margin: 0;
    right: 5px;
}

#custom-ol .carousel-indicators .active {
   color: #fff;
    background: #C33B3E;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    margin: 0px 2px;
}

#custom-ol .carousel-indicators ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
#custom-ol .carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 12px;
    height:12px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255,255,255,.5);
}

#custom-ol .carousel-indicators li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

#custom-ol *, ::after, ::before {
    box-sizing: border-box;
}
.asktext,.asktext:hover{
   color:#fff;
}

.afterb1{
	background-color:transparent;border:none !important;
}

.afterbtop{
	margin-top:-15px;
}

.toptime{
	margin-top:-10px;
}

.topslide{
	margin-top:-7px;
}

.sl1{
background-color:transparent;
border:none;
width:100%;
direction:ltr;
}

.arrow-custom{
font-family: 'Red Hat Display', sans-serif !important;background: #cb373a!important
}

.arrow-custom-inline{
	display: inline-block; font-size:18px;

}
.obj{
object-fit:contain;

}

.sameborder{
	border-radius:5px;max-height:120px;
}
.topcard{
	margin-top:42px;
}

.car-i{
background-color:#E8E8E8 !important;
}

.withwrap{
	width:100% !important;background-color: #FFFFFF !important;margin-top:-20px !important;
	font-size:12px;
}

.vin,.lot,.cylinder,.trans,.keyss,.optn,.fttpye,.dline,.extr,.cname,.odm,.intc,.crpt,.pshdt{
	float:right;display:inline-block;padding-left:20px;margin-right:20px;
}


.circle-color1{
	display:inline-block;width:20px;height: 20px;border-radius: 20px;margin-botrom:-20px ;
	float: right;margin-right:110px;background-color:;border:1px solid black;
}

.circle-color2{
	display:inline-block;width:20px;height: 20px;border-radius: 20px;margin-botrom:-20px ;
	float: right;margin-right:110px;background-color:;border:1px solid black;
}

.wl1{
	width:120px;
	border:2px solid grey;border-radius: 5px;float:right;
	margin-top: 5px;margin-right:5px;
}
.cll1{
	color:#000000;
}
.msdiv{
	width:90px;
	border:2px solid grey;border-radius: 5px;
	float:right; margin-top:5px;margin-right:5px;
}

.cpnt{
	color:#000000;cursor:pointer;
}

.s1{
	width:90px; float:left;margin-top:5px;cursor: pointer;
}

.shr{
	color:#000000;text-decoration:underline;
}

.pst1{
	background-color:#E8E8E8 !important;
}

.cdtop1{
	margin-top:-8px;
}

.cdesc1{
	background-color:#E8E8E8 !important;
}
</style>
<link href="{{ url('frontend/custom_css/details.css') }}" rel="stylesheet" />
@endsection
@section('maincontent')
<section class="">
  <div id="ifcont" style="position: absolute; overflow: hidden; visibility: hidden;">
   <!-- ya slider set karoga tou hat jayege -->
   <img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" class="zoomImg" style="position: absolute; top: -871.309px; left: -881.341px; opacity: 1; width: 4800px; height: 3600px; border: none; max-width: none; max-height: none;">
   <img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03232023224506_92855.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 2568px; height: 3426px; border: none; max-width: none; max-height: none;"><img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03242023222348_28499.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 4800px; height: 3600px; border: none; max-width: none; max-height: none;"><img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03242023222348_63207.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 4800px; height: 3600px; border: none; max-width: none; max-height: none;"><img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03242023222348_82233.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 2568px; height: 3426px; border: none; max-width: none; max-height: none;"><img role="presentation" alt="" src="https://om.sooq-cars.com/car_uploads/03242023222348_90334.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 2568px; height: 3426px; border: none; max-width: none; max-height: none;">
<!-- ya slider set karoga tou hat jayege -->
   </div>
   <div id="zoom-area"></div>
   <div class="container" style="width:93% !important;">
      <div class="row d-none" style="z-index:1000;">
         <div class="col-lg-12 mt-2 mb-0 pb-0">
            <ol class="ownbreadcrumbs">
               <li><span><a href="#"><i class="fas fa-home"></i></a></span></li>
               <li><span><a href="#">Make Title</a></span></li>
               <li><span><a href="#">Model Title</a></span></li>
               <li><span>Title</span></li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 pl-1 pt-1">
            <!--Classified Description-->
            <div class="card overflow-hidden mt-1 afterb1">
               <div class="card-body pl-0 pr-0">
                  <div class="item-det mb-1 mt-1">
                     <div class="row">

                    <!-- mobile -->
<!--                            <div class="col-7" style="margin-top:-15px;">
                              <h4><strong>2014 BMW 3 SERIES</strong></h4>
                           </div>
                           <div class="col-5 text-right">
                              <div class="text-info" style="margin-top:-10px;">24 minute(s) ago</div>
                           </div>
              -->
              <!-- mobile -->
                           <div class="col-9 afterbtop" >
                              <h2><strong>2014 BMW 3 SERIES</strong></h2>
                           </div>
                           <div class="col-3 text-right">
                              <div class="text-info toptime">24 minute(s) ago</div>
                           </div>

                     </div>
                     <div class=" d-flex">
                        <ul class="d-flex mb-0">
                           <!-- <li class="mr-5"><a href="#" class="icons"><i class="ti-car text-muted mr-1 fs-18"></i> Cars</a></li> -->
                           <!-- <li class="mr-5"><a href="#" class="icons"><i class="ti-location-pin text-muted mr-1"></i> USA</a></li> -->
                           <li class="mr-1 text-info"></li>
                           <li class="mr-5 d-none"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i>0</a></li>
                        </ul>
                     </div>
                  </div>

                  <div class="product-slider top-slide" >
                        <div id="slider" class="flexslider mb-0 sl1" >

<div class="arrow-ribbon2 bg-danger arrow-custom">
6,000
<span style="arrow-custom-inline">&nbsp;OMR&nbsp;</span>
</div>

                           <ul class="slides">

                             <li class="parent">
                                 <img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" class="zoomimg obj"  loading="lazy"/>
                             </li>
                          </ul>
                       </div>
                       <hr class="mt-1 pt-1 mb-2   pb-1">
                       <div class="row">
<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="1" class="thumbimg allclick sameborder"/>
</div>
<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="2" class="thumbimg allclick sameborder"/>
</div>

<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="3" class="thumbimg allclick sameborder"/>
</div>

<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="4" class="thumbimg allclick sameborder"/>
</div>
<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="5" class="thumbimg allclick sameborder"/>
</div>
<div class="col-md-img mb-2">
<img src="https://om.sooq-cars.com/car_uploads/03232023224506_81314.jpg" id="6" class="thumbimg allclick sameborder"/>
</div>
   <div id="custom-ol">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active carosel_circle"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2" class=" carosel_circle"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3" class=" carosel_circle"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4" class=" carosel_circle"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5" class=" carosel_circle"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6" class=" carosel_circle"></li>
   </ol>
   </div>

                       </div>
                  </div>
               </div>
            </div>
         </div>

         <!--Right Side Content-->
         <div class="col-xl-3 col-lg-3 col-md-12 pr-1 pl-0 mt-3">
            <div class="row">
               <div class="col-12">

                  <div class="sharethis-inline-share-buttons d-none"></div>

               </div>
            </div>
            <div class="card topcard">
               <div class="p-2 car-i">
                  <h3 class="pb-0"><strong>Car Information</strong></h3>
               </div>
               <div class="card-body pr-0 pl-0 pb-0">
                  <div class="row">
                     <div class="col-xl-12 col-md-12">
                        <table class="m-0 p-0 text-nowrap withwrap">
                           <tbody class="">
                              <tr class="trbtm pt-0 mt-0 d-none">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">VIN #</span>
                                    <div class="font-weight-bold vin" > : </div>
                                 </td>
                                 <td class="text-left">23121323131231313</td>
                              </tr>
                              <tr class="trbtm pt-0 mt-0">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Car Name</span>
                                    <div class="font-weight-bold cname"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">BMW 3 SERIES 2014</td>
                              </tr>

                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Odometer</span>
                                    <div class="font-weight-bold odm"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">130,000 - 139,999</td>
                              </tr>
                              <tr class="trbtm d-none">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">LOT #</span>
                                    <div class="font-weight-bold lot" > : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">Lot</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Cylinders</span>
                                    <div class="font-weight-bold cylinder"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">4</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Transmission</span>
                                    <div class="font-weight-bold trans"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">Automatic</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Keys</span>
                                    <div class="font-weight-bold keyss"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">1</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Options</span>
                                    <div class="font-weight-bold optn" > : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">Full Option</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Fuel Type</span>
                                    <div class="font-weight-bold fttpye"> : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">Gasoline</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Drive Line</span>
                                    <div class="font-weight-bold dline" > : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">Rear </td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Color Exterior</span>
                                    <div class="font-weight-bold extr"> : </div>
                                 </td>
                                 <td class="">
                                    silver
                                    <div clas="circle-color1"></div>
                                 </td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Color Interior</span>
                                    <div class="font-weight-bold intc"> : </div>
                                 </td>
                                 <td class="">
                                    Black
                                    <div class="circle-color2"></div>
                                 </td>
                              </tr>

                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Car Report</span>
                                    <div class="font-weight-bold crpt" > : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">car report </td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Published Date</span>
                                    <div class="font-weight-bold pshdt" > : </div>
                                 </td>
                                 <td class="text-left ml-2 pl-2">23-03-2023 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card d-none">
               <div class="card-header">
                  <h3 class="card-title">Shares</h3>
               </div>
               <div class="card-body product-filter-desc">
                  <div class="product-filter-icons text-center">
                     <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                     <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                     <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <!--/Right Side Content-->

         <!--Right Side Content2-->
         <div class="col-xl-3 col-lg-3 col-md-12 pr-1 pl-0 mt-3">
            <div class="row">
               <div class="col-12">

                  <div class="p-1 wl1">
                     <a href="#"><h6 class="text-center cll1" ><i class="far fa-bookmark"></i> My WatchList</h6></a>
                  </div>
                  <div class="p-1 msdiv">

                     <h6 class="text-center btn-wishlist cpnt" data-id="#" data-rmv="no"><i class="far fa-heart "></i> Watch </h6>
                  </div>
                  <div  class="p-2 s1" id="btn-share">
                     <h5 class="text-left shr"><i class="fas fa-share-alt"></i> Share </h5>
                     <!-- ShareThis BEGIN -->

                     <!-- ShareThis END -->
                  </div>
               </div>
            </div>
            <div class="card">

               <div class="p-2 pst1" >
                  <h3 class=""><strong>Posted By</strong></h3>
               </div>
               <div class="card-body  item-user">
                  <div class="profile-pic mb-0">
                     <a href="#" class="text-dark">
                        <img src="https://om.sooq-cars.com/assets/images/svgs/user.svg"  alt="user" height="70">
                        <div class="">
                           <h4 class="mt-3 mb-1 font-weight-semibold">Adil</h4>
                              <a href="" class="direct-call d-none" id="">call</a>
                              <h6 class="mt-2 mb-0">
                                 <a href="javascript:void(0);" class="btn btn-info btn-call btn-block" data-id="" data-type="car" data-call="call"><i class="fas fa-phone"></i> Call</a>

                                 <a href="#" class="btn btn-success btn-block count-whatsapp" data-carid="#" ><i class="fab fa-whatsapp"></i> Whatsapp</a>
                                 <a href="javascript:void(0);" class="btn btn-danger btn-block btn-follow-unfollow" data-id="#"><i class="fas fa-plus"></i>  Follow</a>
                              </h6>
                        </div>
                     </a>
                  </div>
               </div>

               <div class="card-footer">
                  <div class="text-left">

                        <button type="button" id="btn-buy-car" class="btn btn-danger btn-block d-none" data-car-id=""> BUY THIS CAR </button>
                  </div>
               </div>
            </div>
               <div class="card cdtop1">
                  <div class="p-2 cdesc1">
                     <h3 class=""><strong>Car Description</strong></h3>
                  </div>
                  <div class="card-body">
                     <h4>some testing notes ‏ +Eco - comfort - sport - sport</h4>
                  </div>
               </div>
            <div class="card d-none">
               <div class="card-header">
                  <h3 class="card-title">Shares</h3>
               </div>
               <div class="card-body product-filter-desc">
                  <div class="product-filter-icons text-center">
                     <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                     <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                     <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <!--/Right Side Content-->
      </div>
   </div>
   <input type="hidden" id="hidden-car-id" value="#">
</section>
<!--/listing-->
@endsection
