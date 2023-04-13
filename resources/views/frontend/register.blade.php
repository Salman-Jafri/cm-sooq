@extends('frontend.template.main')
@section('customcss')
<!-- Custom css-->
<link href="{{ url('frontend/custom_css/multi-form.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
@endsection
@section('maincontent')
<div class="sptb-new">
<section class="sptb">
	<div class="container customerpage">
		<div class="row">
		    <div class="single-page">
				<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto ">
					<div class="wrapper wrapper2">
					<form id="registration-form" class="card-body" tabindex="500" method="post">
						<!-- One "tab" for each step in the form: -->
                        @csrf
							<div class="row d-none" id="error-msg-div">
								<div class="col-12">
									<h5 class="badge badge-danger"> Please Rectify Following to Continue </h5>
								</div>
								<div class="col-12 text-center text-danger">
									<span id="response-msg" class="text-center"></span>
								</div>
							</div>
						<div class="tab">
							<h3 class="">Register</h3>

                                <select type="text" name="country_code" id="country_code" >
                                    <option value="" selected="">Choose</option>
                                    @foreach($countries as $country):
                                    <option value="<?=$country->phonecode;?>" data-tnumber="<?=$country->total_numbers;?>" data-iso="{{$country->iso2}}"><?=$country->iso2;?></option>
                                    @endforeach
                                </select>

                                <input type="email" id="set_value" name="set_value" value=""/>
                                <input placeholder="Enter Phone Number" name="member_contact" id="member_contact" class="isnumber">

						  </div>
						<div class="tab">
							<h3>Enter OTP</h3>
						  <p><input placeholder="Enter the OTP" id="member_otp" name="member_otp" class="isnumber"></p>
						</div>
						<div class="tab">
							<h3>Login Info</h3>
						  <p><input placeholder="Name" name="member_name"></p>
						  <p><input placeholder="Password" name="userpass" type="password"></p>
						  <p><input placeholder="Confirm Password" name="userpass_confirmation" type="password"></p>
						</div>
						<div style="overflow:auto;">
						  <div>
								{{-- <button type="button" class="previous btn btn-primary btn-block" >Previous</button> --}}
								<button type="button" class="Next btn btn-primary btn-block">Next</button>
							    <button type="button" class="submit btn btn-primary btn-block" id="btn-register">Save</button>
						  </div>
						</div>
					  </form>
					  <div class="card-body social-images">
						<p class="text-body text-center">Sign In With Social Accounts</p>
						<div class="row">
							<div class="col-6 d-none">
								<a href="#" class="btn btn-white mr-2 border px-2 btn-lg btn-block mb-0 text-left">
									<img src="{{ url('frontend/images/svgs/facebook.svg') }}" class="h-5 w-5" alt=""><span class="ml-3 d-inline-block font-weight-bold"> Facebook</span>
								</a>
							</div>
							<div class="col-12">
								<a href="#" class="btn btn-white mr-2 px-2 border btn-lg btn-block mb-0 text-left">
									<img src="{{ url('frontend/images/svgs/search.svg') }}" class="h-5 w-5" alt=""><span class="ml-3 d-inline-block font-weight-bold"> Google</span>
								</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sptb2 bg-white border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-6 col-md-12">
				<div class="sub-newsletter">
					<h3 class="mb-2"><i class="fab fa-whatsapp mr-2"></i> Subscribe To Our WhatsApp</h3>
					<p class="mb-0">We will not share your number to any third party companies</p>
				</div>
			</div>
			<div class="col-lg-5 col-xl-6 col-md-12">
				<div class="input-group sub-input mt-1">
					<input type="text" class="form-control input-lg " placeholder="Enter your Phone Number">
					<div class="input-group-append ">
						<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
							Subscribe
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
@endsection
@section('customjs')
<!-- Custom js-->
<script src="{{ url('frontend/custom_js/register.js')}}"
src="{{ url('frontend/custom_js/jquery.steps.min.js')}}"
src="{{ url('frontend/custom_js/jquery.steps.js')}}"
src="{{ url('frontend/js/jquery.validate.min.js') }}">
</script>
@endsection
