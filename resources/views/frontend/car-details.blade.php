@extends('frontend.template.main')
@section('customcss')
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
                              <h2><strong>{{html_entity_decode($title)}}</strong></h2>
                           </div>
                           <div class="col-3 text-right">
                              <div class="text-info toptime">{{$added_on}}</div>
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
                        @if($sell_price ==0)
                        <span style="arrow-custom-inline"><a href="<?= $ask_link ?>" class="count-whatsapp asktext"  data-carid="<?= $cars_id ?>" data-toggle="tooltip" data-placement="top" title="click here for price">Ask Price</a></span>
                    @else

                        @if($lang=='_ar')
                            <span style="arrow-custom-inline"><?= $currency; ?></span>
                        @endif
                            {{hlp_nf($sell_price,0,false)}}
                        @if($lang!='_ar')
                            <span style="arrow-custom-inline"><?= $currency; ?></span>
                        @endif

                    @endif
                    </div>

                           <ul class="slides">

                            @php
                                $count =null;
                                $image_file =null;
                                if($car_files)
                                {
                                    $x = 0;
                                    $count = $car_files->count();
                                    foreach($car_files as $r)
                                    {
                                        $x++;
                                        $image = public_path('car_uploads') .'/no-car-image-placeholder.png';
                                        $image_loc = $image;
                                        $image_file = $r->file_up_name;
                                        if(is_file(public_path('car_uploads').'/'.$image_file))
                                        {
                                            $image = url('car_uploads/'.$image_file);
                                            $image_loc = public_path('car_uploads').'/'.$image_file;
                                        }
                                        /*
                                        if($this->dvtype=='mobilee')
                                        {
                                            $zoom = 'img-fluid';
                                        }
                                        else
                                        */
                                        {
                                            $zoom = 'zoomimg';
                                        }

                                        list($width, $height, $type, $attr)  = getimagesize($image_loc);

                                        if($height>$width)
                                        {
                                            $size= ($height-$width);
                                            $prop = 'cover';
                                            if($size>110)
                                            {
                                                $prop = 'contain';
                                            }
                                        }
                                        else
                                        {
                                            $size= ($width-$height);
                                            $prop = 'cover';
                                            if($size>110)
                                            {
                                                $prop = 'contain';
                                            }
                                        }
                                        echo '<li class="parent">
                                            <img src="'.$image.'" class="'.$zoom.'" style="object-fit:'.$prop.';" loading="lazy"/>
                                        </li>';


                                    }

                                }
                                else
                                {
                                    $image = public_path('car_uploads') .'/no-car-image-placeholder.png';
                                    echo '
                                        <li>
                                            <img src="'.$image.'" />
                                        </li>';
                                }

                            @endphp
                          </ul>
                       </div>
                       <hr class="mt-1 pt-1 mb-2 pb-1">
                       <div class="row">

                        <?php
		  				        		$orderlist = null;
		  				        		$orderactive = 'active';

		  				        		$image_file = null;

                                        if($car_files->count()>0)
		  				        		{
		  				        			$x = 0;
		  				        			foreach($car_files as $r)
		  				        			{
		  				        				$x++;
		  				        				$image = public_path('car_uploads').'/no-car-image-placeholder.png';
		  				        				$image_file = $r->file_up_name;
		  				        				if(is_file(public_path('car_uploads').'/'.$image_file))
		  				        				{
		  				        					$image = url('car_uploads/'.$image_file);
		  				        				}
		  				        				// if($this->dvtype=='mobilee')
		  				        				// {
		  				        				// 	$cols = 'col-3';
		  				        				// }
		  				        				// else
		  				        				{
		  				        					$cols = 'col-md-img';
		  				        				}
		  				        				echo '<div class="'.$cols.' mb-2">
		  			        							<img src="'.$image.'" id="'.$x.'" class="thumbimg allclick" style="border-radius:5px;max-height:120px;"/>
		  				        					  </div>';


		  				        				$orderlist .='<li data-target="#carouselExampleCaptions" data-slide-to="'.$x.'" class="'.$orderactive.' carosel_circle"></li>';
		  				        				$orderactive='';

		  				        			}

		  				        		}
		  				        		else
		  				        		{
		  				        			$image = public_path('car_uploads').'/no-car-image-placeholder.png';
		  				        			echo '
		  				        				<div class="col-3">
		  	        								<img src="'.$image.'" />
		  	        						  	</div>';
		  				        		}
		  				        	?>
									<div id="custom-ol">
                                        <ol class="carousel-indicators">
                                                <?= $orderlist; ?>
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
            @php
					// if($this->dvtype=='mobilee')
					// {
					// 	$mval = '-20px;';
					// }
					// else
					{
						$mval = '42px;';
					}
            @endphp
            <div class="card topcard" style="margin-top:<?=$mval;?>">
               <div class="p-2" style="background-color:#E8E8E8 !important;">
                  <h3 class="pb-0"><strong>Car Information</strong></h3>
               </div>
               @php
						// if($this->dvtype=='mobilee')
						// {
						// 	$float='float:left;';
						// }
						// else
						{
							$float = $lang=='_ar'?'float:left':'float:right';
						}
						// if($lang=='_ar')
						// {
						// 	$text_dir = 'text-right mr-2 pr-2';
						// 	$color_dir='left';
						// }
						// else
						{
							$text_dir = 'text-left ml-2 pl-2';
							$color_dir='right';
						}
                @endphp
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
                                 <td class="{{$text_dir}}">{{$vin}}</td>
                              </tr>
                              <tr class="trbtm pt-0 mt-0">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Car Name</span>
                                    <div class="font-weight-bold cname"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$make_title.' '.$model_title.' '.$car_year}}</td>
                              </tr>

                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Odometer</span>
                                    <div class="font-weight-bold odm"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$odometer}}</td>
                              </tr>
                              <tr class="trbtm d-none">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">LOT #</span>
                                    <div class="font-weight-bold lot" > : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$lot}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Cylinders</span>
                                    <div class="font-weight-bold cylinder"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$cylinders}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Transmission</span>
                                    <div class="font-weight-bold trans"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$transmission}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Keys</span>
                                    <div class="font-weight-bold keyss"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$ckeys}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Options</span>
                                    <div class="font-weight-bold optn" > : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$options}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Fuel Type</span>
                                    <div class="font-weight-bold fttpye"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$fuel_type}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Drive Line</span>
                                    <div class="font-weight-bold dline" > : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$drive_line}}</td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Color Exterior</span>
                                    <div class="font-weight-bold extr"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">
                                    {{$color_exterior}}
                                    <div style="display:inline-block;width:20px;height: 20px;border-radius: 20px;margin-botrom:-20px ;float: {{$color_dir}};margin-{{$color_dir}}:110px;background-color: {{$color_xshade}};border:1px solid black;"></div>
                                </td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Color Interior</span>
                                    <div class="font-weight-bold intc"> : </div>
                                 </td>
                                 <td class="{{$text_dir}}">
                                    {{$color_interior}}
                                    <div style="display:inline-block;width:20px;height: 20px;border-radius: 20px;margin-botrom:-20px ;float: {{$color_dir}};margin-{{$color_dir}}:110px;background-color: {{$color_ishade}};border:1px solid black;"></div>
                                </td>
                              </tr>

                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Car Report</span>
                                    <div class="font-weight-bold crpt" > : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$car_report=='none'?"":$car_report}} </td>
                              </tr>
                              <tr class="trbtm">
                                 <td class="tdspacing pl-2">
                                    <span class="font-weight-bold">Published Date</span>
                                    <div class="font-weight-bold pshdt" > : </div>
                                 </td>
                                 <td class="{{$text_dir}}">{{$published_date}}</td>
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
                @php
                    $hide_button = 'd-none';
                    $float = 'right';
                    if(auth()->check())
                    {
                        $float='left';
                        $hide_button=null;
                    }
                @endphp
                  <div class="p-1 wl1 {{$hide_button}}">
                     <a href="{{route('member.wishlist')}}"><h6 class="text-center cll1" ><i class="far fa-bookmark"></i> My WatchList</h6></a>
                  </div>
                  <div class="p-1 msdiv">
                    @php
                        if($wishlist!=null)
                        {
                            $t='fas';
                        }else{
                            $t='far';
                        }

                    @endphp
                     <h6 class="text-center btn-wishlist cpnt" data-id="{{$car_id}}" data-rmv="no"><i class="<?=$t;?> fa-heart <?=$wishlist;?>"></i> Watch </h6>
                  </div>
                  <div  class="p-2 s1" id="btn-share">
                     <h5 class="text-left shr"><i class="fas fa-share-alt"></i> Share </h5>
                     <!-- ShareThis BEGIN -->

                     <!-- ShareThis END -->
                  </div>
               </div>
            </div>
            <div class="card">
                <?php
                    $mylink = Route::currentRouteAction();
                    $msgstr = 'I am contacting you about %0a'.$title.' which priced '.$sell_price.' in sooq-cars %0a%0a';
                    $msgstr .='	آتواصل معك بخصوص   '.$title_ar.' الذي يبلغ سعره'.$sell_price.' في موقع السيارات';
                    $msgstr .='%0a%0a'.$mylink;
                ?>
               <div class="p-2 pst1" >
                  <h3 class=""><strong>Posted By</strong></h3>
               </div>
               <div class="card-body  item-user">
                <div class="profile-pic mb-0">
                    <a href="<?=route('car.members', $member_id);?>" class="text-dark">
                        <img src="<?=$profile_image;?>"  alt="user" height="70">
                        <div class="">
                            <h4 class="mt-3 mb-1 font-weight-semibold"><?= $member_name;?></h4>
                            @php
                                if(auth()->check())
                                {
                                    $logged_in_user = auth()->user()->id;
                                }
                                else
                                {
                                    $logged_in_user = NULL;
                                }
                            @endphp
                            <?php if($logged_in_user!=$member_id):?>
                                <a href="" class="direct-call d-none" id="<?=$car_id;?>">call</a>
                                <h6 class="mt-2 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-info btn-call btn-block" data-id="<?=$car_id;?>" data-type="car" data-call="call"><i class="fas fa-phone"></i> Call</a>

                                    <a href="https://api.whatsapp.com/send/?phone=968<?=$member_contact;?>&text=<?=$msgstr;?>&app_absent=0" class="btn btn-success btn-block count-whatsapp" data-carid="<?=$car_id;?>" ><i class="fab fa-whatsapp"></i> Whatsapp</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-block btn-follow-unfollow" data-id="<?= $member_id;?>"> <?=$follow_unfollow;?></a>
                                </h6>
                            <?php endif;?>
                        </div>
                    </a>
                </div>
               </div>

               <div class="card-footer">
                  <div class="text-left">

                    <?php if(empty($buyer_id)):?>
                        <button type="button" id="btn-buy-car" class="btn btn-danger btn-block d-none" data-car-id="<?=$car_id;?>"> BUY THIS CAR </button>
                    <?php endif;?>
                  </div>
               </div>
            </div>
               <div class="card cdtop1">
                  <div class="p-2 cdesc1">
                     <h3 class=""><strong>Car Description</strong></h3>
                  </div>
                  <div class="card-body">
                    <h4><?=nl2br($car_notes);?></h4>
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
<!-- Modal -->
<div class="modal fade" id="share-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Share</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <div class="row">
                  <div class="col-12">
                      <input type="hidden" id="share-hidden-copy-link">
                      <button class="btn btn-info btn-block" id="btn-share-copy-link"><i class="fas fa-copy"></i> Copy Link</button>
                      <center><span class="text-center" id="link-copied-message"></span></center>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-12">
                      <button class="btn btn-success btn-block" id="btn-share-whatsapp"><i class="fab fa-whatsapp"></i> Share on WhatsApp</button>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </div>
<!--/listing-->
@endsection
@section('customjs')
<!-- Custom js-->
<script>
    var lang = "en" ;
</script>
<script src="{{ url('frontend/custom_js/car-details.js')}}"></script>
@endsection
