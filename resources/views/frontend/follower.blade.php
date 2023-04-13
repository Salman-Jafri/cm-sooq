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
    <div class="row">
        <?php foreach($following as $fl):?>
                <?php
                    $follower_name = $fl->memberFollower ? $fl->memberFollower->member_name : "";
                    $follower_image = $fl->memberFollower ? $fl->memberFollower->profile_image : "" ;
                    $follower_id = $fl->member_id ;

                    $profile_image= url('frontend/images/svgs/user.svg');

                if(is_file('./member_profile_images/'.$follower_image))
                {
                    $profile_image = url('member_profile_images/'.$follower_image);
                }
                ?>
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="wideget-user">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <a href="<?=route('car.members', $follower_id);?>">
                                            <div class="wideget-user-desc">
                                                <div class="wideget-user-img">
                                                    <img class="" src="<?=$profile_image;?>" alt="img" style="min-height:100px;max-height:100px;">
                                                </div>
                                                <div class="user-wrap">
                                                    <h4><?=$follower_name;?></h4>
                                                    <!-- <h6 class="text-muted mb-3">Member Since: November 2019</h6> -->
                                                    <a href="#" class="btn btn-danger btn-sm btn-follow-unfollow" data-id="<?=$fl->member_id;?>"><i class="fa fa-plus"></i> Follow Back </a>
                                                    <a href="#" class="btn btn-primary btn-sm btn-remove-follower" data-id="<?=$fl->member_id;?>"><i class="fa fa-times"></i> Remove </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </div>
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
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/members.js')}}"></script>
@endsection

