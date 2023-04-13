@extends('frontend.template.main')
@section('customcss')
    <link href="{{ url('frontend/custom_css/homepage.css') }}" rel="stylesheet" />
@endsection
@section('maincontent')
    <!--Section-->
    <section>
      <input type="hidden" id="page-type" value="home">
      <input type="hidden" id="page-id" value="null">
      <!-- 			<div class="banner-2 cover-image sptb-2 sptb-tab bg-background2" data-image-src="{{ url('frontend/images/banners/banner1.jpg') }}"><div class="header-text mb-0"><div class="container"><div class="text-center text-white "><h1 class="mb-1">WELCOME TO CARS IMPORTERS</h1></div><div class="row"><div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto"><div class="item-search-tabs"><div class="tab-content index-search-select"><div class="tab-pane active" id="tab1"><div class="search-background"><div class="form row no-gutters"><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Choose Make</option><option value="1">Champlain</option><option value="2">Caledonia</option><option value="3">Chittenden</option><option value="4">Shelburne</option><option value="5">Mercedes-Gainsboro</option><option value="6">Bennington</option><option value="7">Sangria Cerise</option><option value="8">Wisteria</option><option value="9">Monastery</option><option value="10">Sherbrooke</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 border-left-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Seating</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Max Price</option><option value="1">$10k</option><option value="2">$10k-$20K</option><option value="3">$20K-$30K</option><option value="4">$30K-$40K</option><option value="5">$40K-$50K</option><option value="6">$50K-$60K</option><option value="7">$60K-$70K</option><option value="8">$70k-$80K</option><option value="9">$80K &#60; Above</option></optgroup></select></div><div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location"><div class="row no-gutters bg-white br-2"><div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0"><input type="text" class="form-control border" id="sale-location" placeholder="Location"><span><i class="fa fa-map-marker location-gps mr-1"></i></span></div><div class="col-xl-4 col-lg-5 col-md-12 mb-0"><a href="#" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a></div></div></div></div></div></div><div class="tab-pane" id="tab2"><div class="search-background"><div class="form row no-gutters"><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Choose Make</option><option value="1">Champlain</option><option value="2">Caledonia</option><option value="3">Chittenden</option><option value="4">Shelburne</option><option value="5">Mercedes-Gainsboro</option><option value="6">Bennington</option><option value="7">Sangria Cerise</option><option value="8">Wisteria</option><option value="9">Monastery</option><option value="10">Sherbrooke</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Seating</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></optgroup></select></div><div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0"><select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select"><optgroup label="Categories"><option>Max Price</option><option value="1">$10k</option><option value="2">$10k-$20K</option><option value="3">$20K-$30K</option><option value="4">$30K-$40K</option><option value="5">$40K-$50K</option><option value="6">$50K-$60K</option><option value="7">$60K-$70K</option><option value="8">$70k-$80K</option><option value="9">$80K &#60; Above</option></optgroup></select></div><div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location"><div class="row no-gutters bg-white br-2"><div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0"><input type="text" class="form-control border" placeholder="Location"><span><i class="fa fa-map-marker location-gps mr-1"></i></span></div><div class="col-xl-4 col-lg-5 col-md-12 mb-0"><a href="#" class="btn btn-block btn-primary  fs-14"><i class="fa fa-search"></i> Search</a></div></div></div></div></div></div></div></div></div></div></div></div></div> -->
      <div class="banner1 relative slider-images" height="270">
        <div class="container-fuild">
          <!-- Carousel -->
          <div class="owl-carousel slide-owl-carousel slider">
            <div class="item">
              <img alt="first slide" src="http://phplaravel-740076-3229977.cloudwaysapps.com/all_images/slider_mobile/6310220220084748_1679393448.jpg" class="slideimage1">
            </div>
            <div class="item">
              <img alt="first slide" src="http://phplaravel-740076-3229977.cloudwaysapps.com/all_images/slider_mobile/6310220220084748_1679393448.jpg" class="slideimage1">
            </div>
            <div class="item">
              <img alt="first slide" src="http://phplaravel-740076-3229977.cloudwaysapps.com/all_images/slider_mobile/6310220220084748_1679393448.jpg" class="slideimage1">
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
                                <option value="all" style="background-color:#f0eef7!important;">Show All</option>
                                <?php
                                    $arr_en = array('9','8','7','6','5','4','3','2','1','0');
                                    $arr_ar = array('٩','٨','٧','٦','٥','٤','٣','٢','١','٠');
                                ?>
                                <?php foreach($brand_slider as $cmke):?>
                                    <?php
                                        $make_title= $cmke->make;

                                        $make_count= $cmke->mcount;
                                    ?>
                                    <option value="<?=$cmke->make_id;?>">
                                        <?=$make_title.' ('.$make_count.')';?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-model border-bottom-0 border-left-0 w-100" data-placeholder="Select" name="search_model" id="model-id">
                              <option></option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-yf border-bottom-0 border-left-0 w-100 from-year-filter-main" data-placeholder="Select" name="search_year_from" id="search-year-from">
                                <option></option>
                                <?= hlp_gen_years(1990,true,1);?>
                            </select>
                          </div>
                          <div class="form-group col-lg-2 col-md-6 col-sm-6 mb-0">
                            <select class="form-control select2-show-search-yt border-bottom-0 border-left-0 w-100 to-year-filter-main" data-placeholder="Slect" name="search_year_to" id="search-year-to">
                                <option></option>
                                <?= hlp_gen_years(1990,true,1);?>
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
            @if(count($brand_slider)>0)
                @foreach($brand_slider as $bs)

                @php
                    $make_logo = $bs->make_logo;
                    $make_title = $bs->make;
                    $make_title_en =  $bs->make;
                    $make_count = $bs->mcount;
                    // if(is_file('./make_logos/'.$make_logo))
                    // {
                    // 	$makee_logo = base_url('make_logos/'.$make_logo);
                    // }
                    // else
                    // {
                    // 	$makee_logo = create_txtToimg($make_title_en,'./make_logos/');
                    // 	if(is_file('./make_logos/'.$make_logo))
                    // 	{
                    // 		$makee_logo = base_url('make_logos/'.$make_logo);
                    // 	}
                    // }
                @endphp
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="<?=route('car.list-make',$bs->make_id);?>"></a>
                                <div class="">
                                    <img src="<?=url('all_images/make_logos/'.$make_logo);?>" alt="img" class="mx-auto" height="80">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1"><?=$make_title;?></h5>
                                    (<?=$make_count;?>)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            @endif
        </div>
        <h4 class="text-center">
          <a href="#" class="btn">View All</a>
        </h4>
      </div>
    </section>
    <!--Section-->
    <!--Section-->
@if(count($latest_cars)>0):
    <section class="sptb bg-white mt-0 pt-2 pb-0" style="margin-top:10px;">
        <div class="container latest-cars-wd">
            <div class="center-block text-center mt-0 pt-0">
                <h2><?=$homelt_main_text;?></h2>
                <p><?=$homelt_sub_text;?></p>
            </div>

            <div id="load_data" class="row"></div>
            <div id="load_data_message"></div>

        </div>
    <div class="center-block text-center">
    <!-- 	<ul class="pagination mb-3">
        <li class="page-item page-prev disabled">
            <a class="page-link" href="#" tabindex="-1">Prev</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item page-next">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul> -->
    <a href="#" class="page-link btn btn-primary btn-small" id="show_more_btn">Show All <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
    <br>
    </div>
    </section>
@endif
@endsection
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/lazzy-loader.js')}}"></script>
@endsection
