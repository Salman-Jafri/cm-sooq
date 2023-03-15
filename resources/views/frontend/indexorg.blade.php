<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta name="msapplication-TileColor" content="#162946">
    <meta name="theme-color" content="#e72a1a">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="Duplex VehiclesOptimized" content="320">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Title -->
    <title>Cars Importers</title>
    <!-- Bootstrap Css -->
    <link href="{{ url('frontend/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Dashboard Css -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" />
    <!-- Font-awesome  Css -->
    <link href="{{ url('frontend/css/icons.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('frontend/iconfonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Owl Theme css-->
    <link href="{{ url('frontend/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="{{ url('frontend/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <!-- Toast css-->
    <link href="{{ url('frontend/plugins/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" />
    <!-- Color-Skins -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ url('frontend/color-skins/color15.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Loading Css -->
    <link href="{{ url('frontend/custom_css/loading.css') }}" rel="stylesheet" />
    <link href="{{ url('frontend/custom_css/lazy-loader.css') }}" rel="stylesheet" />
    <!--  Css-custom-css -->
    <!-- <link href="{{ url('frontend/css/custom.css') }}" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{ url('frontend/plugins/flexslider/flexslider.css') }}" rel="stylesheet" />
    <!--Select2 Plugin -->
    <!-- 	<link href="{{ url('frontend/plugins/select2/select2.min-rtl.css') }}" rel="stylesheet" /><link href="{{ url('frontend/plugins/flexslider/flexslider-rtl.css') }}" rel="stylesheet" /> -->
    <link href="{{ url('frontend/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <!-- 		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"><link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> -->
    <script type="text/javascript">
      // var base_url = "";
      // var csrf_token_name  = "";
      // var csrf_token_value = "";
      var sl2_choose = 'Choose';
      var sl2_year_from = ' Year(From)';
      var sl2_year_to = ' Year(To)';
      var sl2_make = ' Make';
      var sl2_model = ' Model';
      // var lang = "";
      // var dvtype= "";
      var cpage = 'web';
      var member_id = 'none';
      var show_loading = 'yes';
    </script>
  </head>
  <body>
    <!--Loader-->
    <div id="global-loader">
      <img src="{{ url('frontend/images/loader.svg') }}" class="loader-img " alt="">
    </div>
    <!--Topbar-->
    <div class="header-main" id="mainpage">

      <!-- Horizontal Header -->
    <div class="horizontal-header bg-dark-transparent clearfix">
        <div class="container" id="mobile-min">
          <a id="" class="animated-arrow pt-2 mt-0 pr-2 main-logo-mob" href="#">
            <img src="{{ url('frontend/images/brand/logo.png') }}" width="120" alt=""/> 
          </a> 
          
<!--             <a href="#"  class="globle-a">
                <i class="fa fa-globe fa-2x"></i>
            </a>
              <a href="#"  class="postbtn btn btn-success text-uppercase">
                <i class="fa fa-plus"></i> Post Ad
              </a>

            <div class="dropdown" class="menu-mmdown" >
              <button class="btn show btn-test" type="button" data-toggle="dropdown" style="" id="btn-test">
                <i class="fa fa-bars" id="menu-bars" style="color:#fff;"></i> Menu
              </button>
            </div>  -->
            <a href="#" class="globe-aa">
                <i class="fa fa-globe fa-2x" style="color:#fff !important;"></i>
            </a>
            <a href="#" class="globe-b">
              <i class="fa fa-user-circle fa-2x" style="color:#fff !important;"></i>
            </a>
            <a href="#"  class="postbtn2 btn btn-success text-uppercase">
              <i class="fa fa-plus" style="color:#fff;"></i> {Post Ad}
            </a>
        </div>
      </div> 
      <!-- /Horizontal Header -->
   <div class="horizontal-main bg-dark-transparent clearfix">
        <div class="horizontal-mainwrapper container clearfix">
          <div class="row">
            <div class="col-6 mt-5">
              <span class="logoa1">
                <a href="index.html">
                  <img src="{{ url('frontend/images/brand/logo.png') }}" alt="">
                </a>
              </span>
              <span class="lang_en">
                <a href="#">en</a>
              </span>
              <span class="num_span1">
                <a href="tel:" class="">
                 <i class="fa fa-phone"></i> 72777222 </a>
              </span>
            </div>
            <div class="col-6">
              <nav class="horizontalMenu " style="z-index:90000 !important;">
                <ul class="horizontalMenu-list"> 
                  <!-- 						<li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="btn btn-secondary" style="color:#ffffff;"><i class="fas fa-user" style="color:#ffffff;"></i> 
								My Account 
								<span class="fas fa-caret-down m-0"></span></a><ul class="sub-menu"> -->
                  <!-- if user login start here -->
          <!--         									<p class="text-danger text-left mt-1 pb-0 mb-0 pl-2">Welcome Admin</p><li aria-haspopup="true"><a href="#">My Ads</a></li><li aria-haspopup="true"><a href="#">Watchlist</a></li><li aria-haspopup="true"><a href="#">Following</a></li><li aria-haspopup="true"><a href="#">Followers</a></li><li aria-haspopup="true"><a href="#">My Profile</a></li><li aria-haspopup="true"><a href="#">My Office</a></li><li aria-haspopup="true"><a href="#">LogOut</a></li> -->
                  <!-- else -->
                  <!-- 				<li aria-haspopup="true"><a href="#">My Office</a></li><li aria-haspopup="true"><a href="#">LogOut</a></li> -->
                  <!-- if user login end here -->
                  <!-- 	</ul></li> -->
                  <!-- if role member -->
                  <!-- 					<li aria-haspopup="true"><a href="#" class="btn btn-success" style="color:#ffffff;"><i class="fas fa-plus" style="color:#ffffff;"></i> POST AD NOW 
									</a></li> -->
                  <!-- end if role member -->
                  <!-- else start here -->
                   <li aria-haspopup="true">
                    <a href="" class="btn btn-secondary" style="color:#ffffff;">
                    <i class="fa fa-user"  style="color:#ffffff;"></i> Login </a>
                  </li>
                  <li aria-haspopup="true">
                    <a href="#" class="btn btn-success" style="color:#ffffff;">
                      <i class="fa fa-plus" style="color:#ffffff;"></i>POST AD NOW </a>
                  </li>  
                  <!-- if end here role member -->
               <!--  </ul>
                <ul class="mb-0"> -->
                  <!-- 							<li aria-haspopup="true" class="mt-5 d-none d-lg-block "><span><a class="btn btn-green ad-post " href="ad-posts.html"><i class="fa fa-car text-white mr-1"></i> Sell Your Car</a></span></li> -->
                <!-- </ul> -->
              </nav> 
              <!--Nav-->
            </div>
          </div>
        </div>
      </div> 
      <!-- /Horizontal Main -->
    </div>

<!--       <div style="position: absolute;z-index:1000;top:60px;background-color: #010408;width:100%;display: none;" class="" id="if-main-menu">
        <div class="row">
          <div class="col-12 text-white">
            
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">{My Ads}</h5>
              </a> 
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {Watchlist}
                </h5>
              </a> 
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {Following}
                </h5>
              </a> 
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {Followers}
                </h5>
              </a> 
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {My Profile}
                   </h5>
              </a>
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {My Office}
                   </h5>
              </a>
              <a href="#" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {LogOut}
                </h5>
              </a> 
            
              <a href="" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {My Office}
                   </h5>
              </a>
              <a href="" class="text-white">
                <h5 class="p-3" style="border-bottom:1px dotted grey;">
                  {LogOut}
                </h5>
              </a> 
          </div>
        </div>
      </div> -->

    <!-- Topbar -->
    <!--Section-->
    <section>
      <input type="hidden" id="page-type" value="home">
      <input type="hidden" id="page-id" value="null">
      <!-- 			<div class="banner-2 cover-image sptb-2 sptb-tab bg-background2" data-image-src="{{ url('frontend/images/banners/banner1.jpg') }}"><div class="header-text mb-0"><div class="container"><div class="text-center text-white "><h1 class="mb-1">WELCOME TO CARS IMPORTERS</h1></div><div class="row"><div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto"><div class="item-search-tabs"><div class="tab-content index-search-select"><div class="tab-pane active" id="tab1"><div class="search-background"><div class="form row no-gutters"><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Choose Make</option><option value="1">Champlain</option><option value="2">Caledonia</option><option value="3">Chittenden</option><option value="4">Shelburne</option><option value="5">Mercedes-Gainsboro</option><option value="6">Bennington</option><option value="7">Sangria Cerise</option><option value="8">Wisteria</option><option value="9">Monastery</option><option value="10">Sherbrooke</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Seating</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Max Price</option><option value="1">$10k</option><option value="2">$10k-$20K</option><option value="3">$20K-$30K</option><option value="4">$30K-$40K</option><option value="5">$40K-$50K</option><option value="6">$50K-$60K</option><option value="7">$60K-$70K</option><option value="8">$70k-$80K</option><option value="9">$80K &#60; Above</option></optgroup></select></div><div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location"><div class="row no-gutters bg-white br-2"><div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0"><input type="text" class="form-control border" id="sale-location" placeholder="Location"><span><i class="fa fa-map-marker location-gps mr-1"></i></span></div><div class="col-xl-4 col-lg-5 col-md-12 mb-0"><a href="#" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a></div></div></div></div></div></div><div class="tab-pane" id="tab2"><div class="search-background"><div class="form row no-gutters"><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Choose Make</option><option value="1">Champlain</option><option value="2">Caledonia</option><option value="3">Chittenden</option><option value="4">Shelburne</option><option value="5">Mercedes-Gainsboro</option><option value="6">Bennington</option><option value="7">Sangria Cerise</option><option value="8">Wisteria</option><option value="9">Monastery</option><option value="10">Sherbrooke</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Seating</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Max Price</option><option value="1">$10k</option><option value="2">$10k-$20K</option><option value="3">$20K-$30K</option><option value="4">$30K-$40K</option><option value="5">$40K-$50K</option><option value="6">$50K-$60K</option><option value="7">$60K-$70K</option><option value="8">$70k-$80K</option><option value="9">$80K &#60; Above</option></optgroup></select></div><div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location"><div class="row no-gutters bg-white br-2"><div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0"><input type="text" class="form-control border" placeholder="Location"><span><i class="fa fa-map-marker location-gps mr-1"></i></span></div><div class="col-xl-4 col-lg-5 col-md-12 mb-0"><a href="#" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a></div></div></div></div></div></div></div></div></div></div></div></div></div> -->
      <div class="banner1 relative slider-images">
        <div class="container-fuild">
          <!-- Carousel -->
          <div class="owl-carousel slide-owl-carousel slider">
            <div class="item">
              <img alt="first slide" src="https://dev.cars-importers.com/slider_images/7876220220084743.jpeg" class="slideimage1">
            </div>
            <div class="item">
              <img alt="first slide" src="https://dev.cars-importers.com/slider_images/7876220220084743.jpeg" class="slideimage1">
            </div>
            <div class="item">
              <img alt="first slide" src="https://dev.cars-importers.com/slider_images/7876220220084743.jpeg" class="slideimage1">
            </div>
          </div>
          <div class="header-text slide-header-text pt-0 mt-0 mb-0 container">
            <div class="col-xl-10 col-lg-10 col-md-12 d-block mx-auto">
              <div class="search-background bg-transparent input-field">
                <!-- mobile type start-->
                <div class="text-center text-white ">
                  <h1 class="mb-1">WELCOME TO CARS IMPORTERS</h1>
                  <p></p>
                </div>
                <!-- mobile type end -->
                <div class="item-search-tabs">
                  <div class="item-search-menu">
                    <ul class="nav"></ul>
                  </div>
                  <div class="tab-content index-search-select">
                    <div class="tab-pane active" id="tab1">
                      <div class="search-background">
                        <div class="form row no-gutters">
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-make border-bottom-0 border-left-0 w-100" data-placeholder="Select" name="search_make" id="make-id" required>
                              <option value="" selected></option>
                              <option value="all" style="background-color:#f0eef7!important;">All</option>
                              <option>Choose Make</option>
                              <option value="1">Champlain</option>
                              <option value="2">Caledonia</option>
                              <option value="3">Chittenden</option>
                              <option value="4">Shelburne</option>
                              <option value="5">Mercedes-Gainsboro</option>
                              <option value="6">Bennington</option>
                              <option value="7">Sangria Cerise</option>
                              <option value="8">Wisteria</option>
                              <option value="9">Monastery</option>
                              <option value="10">Sherbrooke</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-model border-bottom-0 border-left-0 w-100" data-placeholder="Select" name="search_model" id="model-id">
                              <option></option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-yf border-bottom-0 border-left-0 w-100" data-placeholder="Select" name="search_year_from" id="search-year-from">
                              <option></option>
                              <option>Seating</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-yt border-bottom-0 border-left-0 w-100" data-placeholder="Slect" name="search_year_to" id="search-year-to">
                              <option></option>
                              <option>Seating</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                            </select>
                          </div>
                          <div class="col-lg-2 col-md-12 col-sm-6 mb-0">
                            <a href="javascript:void(0);" class="btn btn-block btn-primary fs-14" id="btn-search-cars">
                              <i class="fa fa-search"></i> Search </a>
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
    <!--Section-->
    <!--Section-->
    <!-- 		<section class="categories"><div class="container"><div id="small-categories" class="owl-carousel owl-carousel-icons2"><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/1.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Instinct</h5><small class="badge badge-pill badge-primary mr-2">45</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/2.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Roamer</h5><small class="badge badge-pill badge-primary mr-2">32</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/3.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Enigma</h5><small class="badge badge-pill badge-primary mr-2">19</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/4.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Storm</h5><small class="badge badge-pill badge-primary mr-2">25</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/5.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Prodigy</h5><small class="badge badge-pill badge-primary mr-2">23</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/6.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Prospect</h5><small class="badge badge-pill badge-primary mr-2">52</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/7.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Viper</h5><small class="badge badge-pill badge-primary mr-2">46</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/8.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Behemoth</h5><small class="badge badge-pill badge-primary mr-2">22</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/9.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Marvel</h5><small class="badge badge-pill badge-primary mr-2">31</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/10.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Encounter</h5><small class="badge badge-pill badge-primary mr-2">12</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/11.jpg') }}" alt="img"  class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Resolve</h5><small class="badge badge-pill badge-primary mr-2">21</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div><div class="item"><div class="card mb-0"><div class="card-body"><div class="cat-item text-center"><a href="cars-list.html"></a><div class="cat-img1"><img src="{{ url('frontend/images/media/logos/12.jpg') }}" alt="img" class="mx-auto"></div><div class="cat-desc"><h5 class="mb-1">Inquiry</h5><small class="badge badge-pill badge-primary mr-2">24</small><span class="text-muted">Ads are Posted</span></div></div></div></div></div></div></div></section> -->
    <section class="categories pb-2 mb-3 brand-logo-mtop">
      <div class="container main-container-wd">
        <div id="small-categories" class="owl-carousel owl-carousel-col-5">
          <div class="item">
            <div class="card mb-0">
              <div class="card-body">
                <div class="cat-item text-center">
                  <a href="https://dev.cars-importers.com/cars/list/make/80"></a>
                  <div class="">
                    <img src="https://dev.cars-importers.com/make_logos/make_logo_447983_034911_21022022.png" alt="img" class="mx-auto" height="80">
                  </div>
                  <div class="cat-desc">
                    <h5 class="mb-1">TOYOTA</h5>(104)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h4 class="text-center mt-2">
          <a href="#">View All</a>
        </h4>
      </div>
    </section>
    <!--Section-->
    <!--Section-->
    <section class="sptb bg-white" id="mainpage-inner-one">
      <div class="container latest-cars-wd">
        <div class="section-title center-block text-center">
          <h2>Newest Car</h2>
          <!-- <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p> -->
        </div>
        <!-- <div id="myCarousel1" class="owl-carousel owl-carousel-icons2"> -->
        <div class="row">
          <div class="col-lg-3 col-md-4 col-xl-3 col-sm-12 col-xs-6">
            <div class="item">
              <div class="card mb-0">
                <div class="card-body pb-0">
                  <div class="arrow-ribbon bg-primary">2,550 OMR</div>
                  <div class="custom-section-one">
                    <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" alt="img" class="cover-image">
                  </div>
                  <div class="item-card2">
                    <div class="item-card2-desc">
                      <div class="item-card2-text">
                        <div class="small-one">
                          <p class="">Union <a href="#" class="image-prop1">
                              <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" class="image-prop1">
                            </a>
                          </p>
                        </div>
                        <div class="small-two">
                          <p class="span-price">
                            <span>19,000</span>
                          </p>
                          <p>
                            <span class="days-span">+14 days</span>
                            <a href="javascript:void(0);" class="btn-wishlist">
                              <i class="far fa-heart  mt-1"></i>
                            </a>
                          </p>
                        </div>
                        <div class="small-three">
                          <p class="">
                            <span class="whatsapp-span1 text-success">
                              <i class="fab fa-whatsapp"></i> Whatsapp </span>
                            <span class="call-span1">
                              <i class="fas fa-phone"></i> Call </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic">
                  <i class="fa fa-car text-muted"></i>
                  <span class="text-muted">Auto</span>
                </a>
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs">
                  <i class="fa fa-road text-muted"></i>
                  <span class="text-muted">2300</span>
                </a>
                <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType">
                  <i class="fa fa-tachometer text-muted"></i>
                  <span class="text-muted">Petrol</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xl-3 col-sm-12 col-xs-6">
            <div class="item">
              <div class="card mb-0">
                <div class="card-body pb-0">
                  <div class="arrow-ribbon bg-primary">2,550 OMR</div>
                  <div class="custom-section-one">
                    <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" alt="img" class="cover-image">
                  </div>
                  <div class="item-card2">
                    <div class="item-card2-desc">
                      <div class="item-card2-text">
                        <div class="small-one">
                          <p class="">Union <a href="#" class="image-prop1">
                              <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" class="image-prop1">
                            </a>
                          </p>
                        </div>
                        <div class="small-two">
                          <p class="span-price">
                            <span>19,000</span>
                          </p>
                          <p>
                            <span class="days-span">+14 days</span>
                            <a href="javascript:void(0);" class="btn-wishlist">
                              <i class="far fa-heart  mt-1"></i>
                            </a>
                          </p>
                        </div>
                        <div class="small-three">
                          <p class="">
                            <span class="whatsapp-span1 text-success">
                              <i class="fab fa-whatsapp"></i> Whatsapp </span>
                            <span class="call-span1">
                              <i class="fas fa-phone"></i> Call </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic">
                  <i class="fa fa-car text-muted"></i>
                  <span class="text-muted">Auto</span>
                </a>
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs">
                  <i class="fa fa-road text-muted"></i>
                  <span class="text-muted">2300</span>
                </a>
                <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType">
                  <i class="fa fa-tachometer text-muted"></i>
                  <span class="text-muted">Petrol</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xl-3 col-sm-12 col-xs-6">
            <div class="item">
              <div class="card mb-0">
                <div class="card-body pb-0">
                  <div class="arrow-ribbon bg-primary">2,550 OMR</div>
                  <div class="custom-section-one">
                    <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" alt="img" class="cover-image">
                  </div>
                  <div class="item-card2">
                    <div class="item-card2-desc">
                      <div class="item-card2-text">
                        <div class="small-one">
                          <p class="">Union <a href="#" class="image-prop1">
                              <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" class="image-prop1">
                            </a>
                          </p>
                        </div>
                        <div class="small-two">
                          <p class="span-price">
                            <span>19,000</span>
                          </p>
                          <p>
                            <span class="days-span">+14 days</span>
                            <a href="javascript:void(0);" class="btn-wishlist">
                              <i class="far fa-heart  mt-1"></i>
                            </a>
                          </p>
                        </div>
                        <div class="small-three">
                          <p class="">
                            <span class="whatsapp-span1 text-success">
                              <i class="fab fa-whatsapp"></i> Whatsapp </span>
                            <span class="call-span1">
                              <i class="fas fa-phone"></i> Call </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic">
                  <i class="fa fa-car text-muted"></i>
                  <span class="text-muted">Auto</span>
                </a>
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs">
                  <i class="fa fa-road text-muted"></i>
                  <span class="text-muted">2300</span>
                </a>
                <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType">
                  <i class="fa fa-tachometer text-muted"></i>
                  <span class="text-muted">Petrol</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xl-3 col-sm-12 col-xs-6">
            <div class="item">
              <div class="card mb-0">
                <div class="card-body pb-0">
                  <div class="arrow-ribbon bg-primary">2,550 OMR</div>
                  <div class="custom-section-one">
                    <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" alt="img" class="cover-image">
                  </div>
                  <div class="item-card2">
                    <div class="item-card2-desc">
                      <div class="item-card2-text">
                        <div class="small-one">
                          <p class="">Union <a href="#" class="image-prop1">
                              <img src="https://dev-sooq-cars.com/member_profile_images/115-547621_110013_22022022.jpeg" class="image-prop1">
                            </a>
                          </p>
                        </div>
                        <div class="small-two">
                          <p class="span-price">
                            <span>19,000</span>
                          </p>
                          <p>
                            <span class="days-span">+14 days</span>
                            <a href="javascript:void(0);" class="btn-wishlist">
                              <i class="far fa-heart  mt-1"></i>
                            </a>
                          </p>
                        </div>
                        <div class="small-three">
                          <p class="">
                            <span class="whatsapp-span1 text-success">
                              <i class="fab fa-whatsapp"></i> Whatsapp </span>
                            <span class="call-span1">
                              <i class="fas fa-phone"></i> Call </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic">
                  <i class="fa fa-car text-muted"></i>
                  <span class="text-muted">Auto</span>
                </a>
                <a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs">
                  <i class="fa fa-road text-muted"></i>
                  <span class="text-muted">2300</span>
                </a>
                <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType">
                  <i class="fa fa-tachometer text-muted"></i>
                  <span class="text-muted">Petrol</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="item"><div class="card mb-0"><div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div><div class="item-card2-img"><a class="link" href="cars.html"></a><img src="{{ url('frontend/images/media/others/v5.jpg') }}" alt="img" class="cover-image"><div class="item-tag-overlaytext"><span class="text-white bg-success"> New</span><span class="text-white bg-danger"> Rent</span></div><div class="item-card2-icons"><a href="cars.html" class="item-card2-icons-l bg-primary"><i class="car car-honda"></i></a><a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a></div></div><div class="card-body pb-0"><div class="item-card2"><div class="item-card2-desc"><div class="item-card2-text"><a href="cars.html" class="text-dark"><h4 class="mb-0">Union</h4></a></div><div class="d-flex"><a href=""><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p></a><span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$789.00</span></div><p class="">Lorem Ipsum available, quis int nostrum exercitationem </p></div></div><div class="item-card2-footer mt-4 mb-4"><div class="item-card2-footer-u"><div class="d-md-flex"><span class="review_score mr-2 badge badge-primary">4.0/5</span><div class="rating-stars d-inline-flex ml-auto"><input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"><div class="rating-stars-container"><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div></div> (5 Reviews)
											</div></div></div></div></div><div class="card-footer"><a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i><span class="text-default">Auto</span></a><a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i><span class="text-default">2300</span></a><a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i><span class="text-default">Petrol</span></a></div></div></div><div class="item"><div class="card mb-0"><div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div><div class="item-card2-img"><a class="link" href="cars.html"></a><img src="{{ url('frontend/images/media/others/dummy.jpg') }}" alt="img" class="cover-image"><div class="item-tag-overlaytext"><span class="text-white bg-gray"> Used</span></div><div class="item-card2-icons"><a href="#" class="item-card2-icons-l bg-primary"><i class="car car-toyota"></i></a><a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a></div></div><div class="card-body pb-0"><div class="item-card2"><div class="item-card2-desc"><div class="item-card2-text"><a href="cars.html" class="text-dark"><h4 class="mb-0">Lioness</h4></a></div><div class="d-flex pb-0 pt-0"><a href=""><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p></a><span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span></div><p class="">Lorem Ipsum available, quis int nostrum exercitationem </p></div></div><div class="item-card2-footer mt-4 mb-4"><div class="item-card2-footer-u"><div class="d-md-flex"><span class="review_score mr-2 badge badge-primary">4.0/5</span><div class="rating-stars d-inline-flex ml-auto"><input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"><div class="rating-stars-container"><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div></div> (5 Reviews)
											</div></div></div></div></div><div class="card-footer"><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i><span class="text-default">Manual</span></a><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i><span class="text-default">3000</span></a><a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i><span class="text-default">Petrol</span></a></div></div></div><div class="item"><div class="card mb-0"><div class="item-card2-img"><a class="link" href="cars.html"></a><img src="{{ url('frontend/images/media/others/b1.jpg') }}" alt="img" class="cover-image"><div class="item-tag-overlaytext"><span class="text-white bg-success"> New</span></div><div class="item-card2-icons"><a href="#" class="item-card2-icons-l bg-primary"><i class="car car-volkswagen"></i></a><a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a></div></div><div class="card-body pb-0"><div class="item-card2"><div class="item-card2-desc"><div class="item-card2-text"><a href="cars.html" class="text-dark"><h4 class="mb-0">Millenium</h4></a></div><div class="d-flex pb-0 pt-0"><a href=""><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p></a><span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span></div><p class="">Lorem Ipsum available, quis int nostrum exercitationem </p></div></div><div class="item-card2-footer mt-4 mb-4"><div class="item-card2-footer-u"><div class="d-md-flex"><span class="review_score mr-2 badge badge-primary">4.0/5</span><div class="rating-stars d-inline-flex ml-auto"><input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"><div class="rating-stars-container"><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div></div> (5 Reviews)
											</div></div></div></div></div><div class="card-footer"><a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i><span class="text-default">Auto</span></a><a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i><span class="text-default">4000</span></a><a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i><span class="text-default">Petrol</span></a></div></div></div><div class="item"><div class="card mb-0 sold-out"><div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">sold out</span></div><div class="item-card2-img"><a class="link" href="cars.html"></a><img src="{{ url('frontend/images/media/others/v1.jpg') }}" alt="img" class="cover-image"><div class="item-tag-overlaytext"><span class="text-white bg-success"> New</span></div><div class="item-card2-icons"><a href="#" class="item-card2-icons-l bg-primary"><i class="car car-ferrari"></i></a><a href="#" class="item-card2-icons-r wishlist"><i class="fa fa fa-heart-o"></i></a></div></div><div class="card-body pb-0"><div class="item-card2"><div class="item-card2-desc"><div class="item-card2-text"><a href="cars.html" class="text-dark"><h4 class="mb-0">Roamer</h4></a></div><div class="d-flex pb-0 pt-0"><a href=""><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p></a><span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span></div><p class="">Lorem Ipsum available, quis int nostrum exercitationem </p></div></div><div class="item-card2-footer mt-4 mb-4"><div class="item-card2-footer-u"><div class="d-md-flex"><span class="review_score mr-2 badge badge-primary">4.0/5</span><div class="rating-stars d-inline-flex ml-auto"><input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"><div class="rating-stars-container"><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div></div> (5 Reviews)
											</div></div></div></div></div><div class="card-footer"><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i><span class="text-default">Manual</span></a><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i><span class="text-default">2000</span></a><a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i><span class="text-default">Petrol</span></a></div></div></div><div class="item"><div class="card mb-0"><div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div><div class="item-card2-img"><a class="link" href="cars.html"></a><img src="{{ url('frontend/images/media/others/f3.jpg') }}" alt="img" class="cover-image"><div class="item-tag-overlaytext"><span class="text-white bg-success"> New</span></div><div class="item-card2-icons"><a href="#" class="item-card2-icons-l bg-primary"><i class="car car-honda"></i></a><a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a></div></div><div class="card-body pb-0"><div class="item-card2"><div class="item-card2-desc"><div class="item-card2-text"><a href="cars.html" class="text-dark"><h4 class="mb-0">Union</h4></a></div><div class="d-flex pb-0 pt-0"><a href=""><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p></a><span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span></div><p class="">Lorem Ipsum available, quis int nostrum exercitationem </p></div></div><div class="item-card2-footer mt-4 mb-4"><div class="item-card2-footer-u"><div class="d-md-flex"><span class="review_score mr-2 badge badge-primary">4.0/5</span><div class="rating-stars d-inline-flex ml-auto"><input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"><div class="rating-stars-container"><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm is--active"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div><div class="rating-star sm"><i class="fa fa-star"></i></div></div> (5 Reviews)
											</div></div></div></div></div><div class="card-footer"><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i><span class="text-default">Manual</span></a><a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i><span class="text-default">2000</span></a><a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i><span class="text-default">Petrol</span></a></div></div></div> -->
        <!-- </div> -->
      </div>
      <div class="center-block text-center">
        <a href="#" class="page-link btn btn-primary btn-small" id="show_more_btn">Show All <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
        </a>
        <br>
      </div>
    </section>
    <!--Section-->
    <!--Footer Section-->
    <!-- 		<section><footer class="bg-dark-purple text-white"><div class="footer-main"><div class="container"><div class="row"><div class="col-lg-2 col-md-12"><h6>Resources</h6><hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto"><ul class="list-unstyled mb-0"><li><a href="javascript:;">Our Team</a></li><li><a href="javascript:;">Contact US</a></li><li><a href="javascript:;">About</a></li><li><a href="javascript:;">Harlequini Dawn</a></li><li><a href="javascript:;">Blog</a></li><li><a href="javascript:;">Terms and Conditions</a></li></ul></div><div class="col-lg-3 col-md-12"><h6>Contact</h6><hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto"><ul class="list-unstyled mb-0"><li><a href="#"><i class="fa fa-car mr-3 text-primary"></i> New York, NY 10012, US</a></li><li><a href="#"><i class="fa fa-envelope mr-3 text-primary"></i> info12323@example.com</a></li><li><a href="#"><i class="fa fa-phone mr-3 text-primary"></i> + 01 234 567 88</a></li><li><a href="#"><i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89</a></li></ul></div><div class="col-lg-4 col-md-12"><h6>Download App</h6><hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto"><div class=""><a class="btn bg-store fs-16" href=""><i class="fa fa-apple mr-2"></i> App Store</a><a class="btn bg-store fs-16" href=""><i class="fa fa-android mr-2"></i> Google Pay</a></div><h6 class="mb-0 mt-5">Payments</h6><hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto"><div class="clearfix"></div><ul class="footer-payments"><li class="pl-0"><a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li><li><a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li><li><a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li><li><a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li><li><a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li></ul></div><div class="col-lg-3 col-md-12"><h6>Subscribe</h6><hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto"><div class="clearfix"></div><div class="input-group w-100"><input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email"><div class="input-group-append "><button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button></div></div><h6 class="mt-5 mb-3">Follow Us</h6><hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto"><ul class="list-unstyled list-inline"><li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"><i class="fa fa-facebook bg-facebook"></i></a></li><li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"><i class="fa fa-twitter bg-info"></i></a></li><li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"><i class="fa fa-google-plus bg-danger"></i></a></li><li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"><i class="fa fa-linkedin bg-linkedin"></i></a></li></ul></div></div></div></div><div class="bg-dark-purple text-white p-0"><div class="container"><div class="row d-flex"><div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2019 <a href="#" class="fs-14 text-primary">Autolist</a>. Designed by <a href="#" class="fs-14 text-primary">Spruko</a> All rights reserved.
							</div></div></div></div></footer></section> -->
    <!--Footer Section-->
    <section>
      <footer class="bg-dark-purple text-white">
        <div class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <h6>Quick Links</h6>
                <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="javascript:;">Our Team</a>
                  </li>
                  <li>
                    <a href="javascript:;">Contact US</a>
                  </li>
                  <li>
                    <a href="javascript:;">About</a>
                  </li>
                  <li>
                    <a href="javascript:;">Harlequini Dawn</a>
                  </li>
                  <li>
                    <a href="javascript:;">Blog</a>
                  </li>
                  <li>
                    <a href="javascript:;">Terms and Conditions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <h6>Contact</h6>
                <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">
                      <i class="fa fa-car mr-3 text-primary"></i> New York, NY 10012, US </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-envelope mr-3 text-primary"></i> info12323@example.com </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-phone mr-3 text-primary"></i> + 01 234 567 88 </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89 </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-3">
                <h6>Download App</h6>
                <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <div class="">
                  <a class="btn bg-store fs-16" href="">
                    <i class="fa fa-apple mr-2"></i> App Store </a>
                  <a class="btn bg-store fs-16" href="">
                    <i class="fa fa-android mr-2"></i> Google Pay </a>
                </div>
                <h6 class="mb-0 mt-5">Payments</h6>
                <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                <div class="clearfix"></div>
                <ul class="footer-payments">
                  <li class="pl-0">
                    <a href="javascript:;">
                      <i class="fa fa-cc-amex" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                <h6>
                  <i class="fab fa-whatsapp"></i>Subscribe
                </h6>
                <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <div class="clearfix"></div>
                <div class="input-group w-100">
                  <input type="text" class="form-control br-tl-3  br-bl-3 isnumber animate__faster animate__delay-5s" id="subscribe-wa" placeholder="{Phone} #">
                  <div class="input-group-append ">
                    <button type="button" class="btn btn-primary br-tr-3  br-br-3" id="btn-subscribe-wa"> Subscribe </button>
                  </div>
                </div>
                <h6 class="mt-5 mb-3">Follow Us</h6>
                <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="sm_facebook" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                      <i class="fa fa-facebook bg-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="sm_twitter" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                      <i class="fa fa-twitter bg-info"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="sm_instagram" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                      <i class="fa fa-instagram bg-secondary"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="sm_linkedin" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                      <i class="fa fa-linkedin bg-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-dark-purple text-white p-0">
          <div class="container">
            <div class="row d-flex">
              <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center "> Sooq Cars Oman 2023 </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <!--Footer Section-->
    <!-- Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="single-page">
                <div class="col-12 d-block mx-auto">
                  <div class="wrapper wrapper2">
                    <form id="login-form" class="card-body" tabindex="500">
                      <h3>Login</h3>
                      <div class="row d-none" id="error-msg-div">
                        <div class="col-12">
                          <h5 class="badge badge-danger"> Please Rectify Following to Continue </h5>
                        </div>
                        <div class="col-12 text-left text-danger">
                          <span id="response-msg" class="text-left"></span>
                        </div>
                      </div>
                      <div class="mail">
                        <input type="text" name="username" id="username-modal" required>
                        <label>Username</label>
                      </div>
                      <div class="passwd">
                        <input type="password" name="userpass" id="userpass-modal" required>
                        <label>Password</label>
                      </div>
                      <div class="submit">
                        <button type="button" class="btn btn-primary btn-block" id="btn-login-modal">Login</button>
                      </div>
                      <p class="mb-2">
                        <a href="javascript:void(0);">Forgot Password</a>
                      </p>
                      <p class="text-dark mb-0">Don't have account? <a href="#" class="text-primary ml-1">Sign UP</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="popup-msg-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body" style="border:4px dashed grey;">
            <div class="row mt-0 pt-0 mb-0 pb-0">
              <div class="col-md-11"></div>
              <div class="col-md-1">
                <a href="javascript:void(0);" class="close text-danger" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times" style="font-size:20px;"></i>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div id="subscription-content">
                  <p class="text-center text-success" id="sb-title" style="font-size:120px;"></p>
                </div>
                <h4 class="text-center" id="sb-text"></h4>
                <h6 class="text-center text-warning"> (This message will disappear automatically in <span id="close-counter">10</span>) </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="delete-modal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color:#D30000 !important;color:#FFFFFF !important;">
            <h4 class="modal-title text-center text-white">Confirmation </h4>
            <button type="button" class="close" data-dismiss="modal" style="color:#FFFFFF !important;">&times;</button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="delete-id">
            <h1 class="text-center text-danger" style="font-size:80px;">
              <i class="fas fa-warning"></i>
            </h1>
            <h2 class="text-center text-danger">Are you sure?</h2>
            <h6 class="text-center text-danger">
              <i>All the data will be lost and cannot be recovered</i>
            </h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger" id="btn-delete">Yes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="notify-modal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" id="notify-modal-type" style="color:#FFFFFF !important;">
            <h4 class="modal-title text-center text-white">Notification </h4>
            <button type="button" class="close" data-dismiss="modal" style="color:#FFFFFF !important;">&times;</button>
          </div>
          <div class="modal-body">
            <h1 class="text-center" id="notify-modal-icon" style="font-size:80px;"></h1>
            <h2 class="text-center" id="notify-modal-heading"></h2>
            <h6 class="text-center" id="notify-modal-text"></h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            <!-- <button type="button" class="btn btn-danger">Yes</button> -->
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="single-page">
                <div class="col-12 d-block mx-auto">
                  <div class="wrapper wrapper2">
                    <form id="add-contact-form" class="card-body" tabindex="500">
                      <h3>Please Enter Your Contact Number</h3>
                      <div class="mail">
                        <input type="text" class="isnumber text-center" id="contact-modal-info" required>
                      </div>
                      <p class="text-danger d-none" id="errors-contact"></p>
                      <div class="submit">
                        <button type="button" class="btn btn-primary btn-block" id="btn-contact-modal" data-member="">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="loading-modal"></div>
    <div class="mobile-nav-overlay"></div>
    <!--Footer Section-->
    <!-- Back to top -->
    <a href="#top" id="back-to-top">
      <i class="fa fa-rocket"></i>
    </a>
    <!-- JQuery js-->
    <script src="{{ url('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('frontend/custom_js/jquery-ui.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{ url('frontend/plugins/bootstrap-4.3.1/js/popper.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ url('frontend/plugins/bootstrap-4.3.1/js/bootstrap-rtl.js') }}"></script> -->
    <!--JQueryVehiclerkline Js-->
    <script src="{{ url('frontend/js/jquery.sparkline.min.js') }}"></script>
    <!-- Circle Progress Js-->
    <script src="{{ url('frontend/js/circle-progress.min.js') }}"></script>
    <!-- Star Rating Js-->
    <script src="{{ url('frontend/plugins/rating/jquery.rating-stars.js') }}"></script>
    <!--Counters -->
    <script src="{{ url('frontend/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/counters/numeric-counter.js') }}"></script>
    <!--Owl Carousel js -->
    <script src="{{ url('frontend/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ url('frontend/plugins/flexslider/jquery.flexslider.js') }}"></script>
    <!--Horizontal Menu-->
    <script src="{{ url('frontend/plugins/horizontal-menu/horizontal.js') }}"></script>
    <!--JQuery TouchSwipe js-->
    <script src="{{ url('frontend/js/jquery.touchSwipe.min.js') }}"></script>
    <!--Select2 js -->
    <script src="{{ url('frontend/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ url('frontend/js/select2.js') }}"></script>
    <!-- Sticky Js-->
    <script src="{{ url('frontend/js/sticky.js') }}"></script>
    <!-- Cookie js -->
    <!-- <script src="{{ url('frontend/plugins/cookie/jquery.ihavecookies.js') }}"></script> -->
    <!-- <script src="{{ url('frontend/plugins/cookie/cookie.js') }}"></script> -->
    <!--Showmore Js-->
    <script src="{{ url('frontend/js/jquery.showmore.js') }}"></script>
    <script src="{{ url('frontend/js/showmore.js') }}"></script>
    <!-- Custom scroll bar Js-->
    <script src="{{ url('frontend/plugins/scroll-bar/jquery.mCustomScrollbar.js') }}"></script>
    <!-- JQuery Toast-->
    <script src="{{ url('frontend/plugins/jquery-toast/jquery.toast.min.js') }}"></script>
    <!-- Swipe Js-->
    <script src="{{ url('frontend/js/swipe.js') }}"></script>


<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script> -->

   <!-- Custom Js-->
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- Custom Js-->
    <script src="{{ url('frontend/js/custom.js') }}"></script> 

     <!-- Owl Carousel Js-->
    <script src="{{ url('frontend/js/owl-carousel.js') }}"></script>

    <!-- <script src="{{ url('frontend/js/owl-carousel-rtl.js') }}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>

    <script src="{{ url('frontend/custom_js/main_scripts.js') }}"></script>

  </body>
</html>