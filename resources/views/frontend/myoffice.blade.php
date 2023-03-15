@extends('frontend.template.main')
@section('maincontent')
<section>
	<div class="bannerimg bannerstyle  cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}">
		<div class="header-text mb-0 mt-0 pt-0">
			<div class="container mt-0 pt-0">
				<div class="text-center text-white mt-0 pt-0 top-office-margin">
					<h1 class="text-uppercase mt-0 pt-0">My Office</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sptb pt-2 watchlist">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-footer">
						<div class="wideget-user-tab">
							<div class="tab-menu-heading">
								<div class="tabs-menu1">
									<ul class="nav">
									<li><a href="#" class="ofnav ofc-cars">My Cars</a></li>
									<li><a href="#" class="ofnav ofc-expenses">Expenses </a></li>
									<li><a href="#" class="ofnav ofc-expense-category">Expense Category </a></li>
									<li><a href="#" class="ofnav ofc-clients">My Clients</a></li>
									<li><a href="#">Profit Report </a></li>
									<li><a href="#">Invoice Settings </a></li>
									<li><a href="#" class="ofnav ofc-users ">Users </a></li>	
									</ul>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-0">
					<div class="card-body h-100">
						<div class="row">
							<div class="col-12">
								<div class="profile-log-switch">
									<div class="media-heading">
										<div class="row">
											<div class="col-md-12 text-center">
												<h3>Good Afternoon sam150 !</h3>
												<h6>You can access the sections of my office from the navigation above <i class="fas fa-arrow-up"></i></h6>
												<h6>The weather is Clouds and the temperature is 26℃ <img src="http://openweathermap.org/img/wn/04d.png" class="img-office-one"> </h6>
												<h6 class="text-danger">
													Not sam150 ? 
													<a href="#">Sign Out </a>
												</h6>
											</div>
										</div>
									</div>
									<br><br><br><br><br><br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<input type="hidden" id="hidden-val">
@endsection