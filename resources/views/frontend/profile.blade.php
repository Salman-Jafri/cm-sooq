@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}" style="padding-top: 5rem; height: 20px !important; background: url(https://dev.cars-importers.com/assets/images/banners/banner2.jpg) center center;">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0" style="margin-top:-60px !important;">
               <h1 class="text-uppercase mt-0 pt-0">My Profile</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb mt-0 pt-2">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">My Profile</h3>
               </div>
               <div class="card-body text-center item-user border-bottom">
                  <div class="profile-pic">
                     <div class="profile-pic-img">
                        <input type="file" name="profile_image" id="profile_image" class="d-none">
                        <img src="{{ url($data['profile_image']) }}" class="avatar-xl rounded-circle" alt="user" id="profile_image_preview" style="cursor:pointer;border:1px solid grey;">
                     </div>
                     <a href="#" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{ $data['member_name']}}</h4></a>
                  </div>
               </div>
               <div class="item1-links  mb-0">
                  <a href="javascript:void(0);" class="active d-flex border-bottom">
                     <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit
                  </a>
                  <a href="#" class=" d-flex  border-bottom">
                     <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> My Ads
                  </a>
                  <a href="#" class=" d-flex border-bottom">
                     <span class="icon1 mr-3"><i class="icon icon-heart"></i></span> Watchlist
                  </a>
                  <a href="#" class="d-flex  border-bottom">
                     <span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> Following
                  </a>
                  <a href="#" class=" d-flex  border-bottom">
                     <span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Followers
                  </a>
                  <a href="#" class="d-flex">
                     <span class="icon1 mr-3"><i class="icon icon-power"></i></span> LogOut
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card mb-0">
               <div class="card-header">
                  <h3 class="card-title">Edit</h3>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           
                           <label class="form-label">Name  <small><i><span class="text-danger d-none">(*Required)</span></i></small> </label>
                           <input type="text" class="form-control ifrequired" placeholder="Name" value="{{ $data['member_name']}}" id="member_name">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           <label class="form-label">Contact <small><i><span class="text-danger d-none">(*Required)</span></i></small></label>
                           <input type="text" class="form-control ifrequired isnumber" placeholder="Contact" value="{{ $data['member_contact']}}" id="member_contact">
                        </div>
                     </div>
                     
                     <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           <label class="form-label">Username <small><i><span class="text-danger d-none">(*Required)</span></i></small></label>
                           <input type="text" class="form-control ifrequired nospace" placeholder="Username" value="{{$data['username']}}" id="username">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           <label class="form-label">Update Password</label>
                           <input type="password" class="form-control ifrequired" placeholder="Password" id="userpass">
                        </div>
                     </div>
                     
                     <div class="col-md-12 border border-muted p-2 mb-2">
                        <input type="file" class="d-none" id="banner-img">
                        <img src="{{ url($data['banner_image']) }}" id="banner-img-holder" style="width:inherit;cursor: pointer;max-height:300px !important;">
                        <span class="float-right text-danger">(2400x800)</span>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                           <label class="form-label">Email</label>
                           <input type="email" class="form-control ifrequired" placeholder="Email" value="{{$data['member_email']}}" id="member_email">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                           <label class="form-label">Contact-2 </label>
                           <input type="text" class="form-control ifrequired isnumber" placeholder="Contact-2" value="{{$data['member_contact2']}}" id="member_contact2">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                           <label class="form-label">Location </label>
                           <input type="text" class="form-control ifrequired" placeholder="Location" value="{{$data['member_location']}}" id="member_location">
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                           <label class="form-label">Description </label>
                           <textarea class="form-control ifrequired" placeholder="Description" value="{{$data['member_description']}}" id="member_description"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="button" class="btn btn-success" id="btn-update-profile">Update</button>
               </div>
            </div>
         </div>
</section>
@endsection
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/members.js')}}"></script>
@endsection