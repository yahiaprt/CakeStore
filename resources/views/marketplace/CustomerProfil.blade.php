@extends('layouts.homeLayout')
@section('homecontent')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

	<title>Ekka - Admin Dashboard eCommerce HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet">

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet">

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet">

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon">









	<style>
  .image-scroll-container {
    overflow-x: auto;
    white-space: nowrap; /* Prevents images from wrapping to the next line */
  }

  .horizontal-scroll-wrapper {
    display: flex; /* Enable flex container */
  }

  .horizontal-scroll-wrapper img {
    flex: 0 0 auto; /* Don't grow or shrink the images */
    margin-right: 10px; /* Add some space between images */
  }
</style>











	

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script type="text/javascript" charset="UTF-8" src="../../../../../www.gstatic.com/charts/%25%7bversion%7d/loader.html"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<div class="ec-content-wrapper" style="width: 60%; margin: 0 auto; margin-top: 20px; margin-bottom: 20px;    ">    <!-- Your content goes here -->
 

				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>User Profile</h1>
							<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Profile
							</p>
						</div>
						<div>
							<a href="user-list.html" class="btn btn-primary">Edit</a>
						</div>
					</div>
					<div class="card bg-white profile-content">
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="profile-content-left profile-left-spacing">
									<div class="text-center widget-profile px-0 border-0">
										<div class="card-img mx-auto rounded-circle">
										<img src="{{ asset('images/' . $user->users_images) }}" alt="user image">
										</div>
										<div class="card-body">
											<h4 class="py-2 text-dark">{{$user->name}}</h4>
											<p>{{$user->email}}</p>
											<a class="btn btn-primary my-3" href="#">Follow</a>
										</div>
									</div>

									<div class="d-flex justify-content-between ">
										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">546</h6>
											<p>Bought</p>
										</div>

										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">32</h6>
											<p>Wish List</p>
										</div>

										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">1150</h6>
											<p>Following</p>
										</div>
									</div>

									<hr class="w-100">

									<div class="contact-info pt-4">
										<h5 class="text-dark">Contact Information</h5>
										<p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
										<p>{{$user->email}}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
										<p>{{$user->phone_number}}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Birthday</p>
										<p>{{$user->birthdate}}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Social Profile</p>
										<p class="social-button">
											<a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
												<i class="mdi mdi-twitter"></i>
											</a>

											<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
												<i class="mdi mdi-linkedin"></i>
											</a>

											<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
												<i class="mdi mdi-facebook"></i>
											</a>

											<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
												<i class="mdi mdi-skype"></i>
											</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-8 col-xl-9">
								<div class="profile-content-right profile-right-spacing py-5">
									<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
									 
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="true">Settings</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">
 

										<div class="tab-pane fade active show" id="settings" role="tabpanel" aria-labelledby="settings-tab">
											<div class="tab-pane-content mt-5">


												<form method="POST" action="/upadateUserProfile" enctype="multipart/form-data">
 



    @csrf
													<div class="form-group row mb-6">
														<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
														<div class="col-sm-8 col-lg-10">
															<div class="custom-file mb-1">
																<input type="file" class="custom-file-input" name="coverImage" id="coverImage" required="">
																<label class="custom-file-label" for="coverImage">Choose
																	file...</label>
																<div class="invalid-feedback">Example invalid custom
																	file feedback</div>
															</div>
														</div>
													</div>

													<div class="row mb-2">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="firstName">First name</label>
																<input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label for="lastName">Last name</label>
																<input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
															</div>
														</div>
													</div>

													<div class="col-lg-6">
															<div class="form-group">
																<label for="phone_number">phone_number</label>
																<input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$user->phone_number}}">
															</div>
														</div>
													</div>


													<div class="form-group mb-4">
														<label for="userName">User name</label>
														<input type="text" class="form-control" id="userName" value="{{$user->first_name}}">
														<span class="d-block mt-1">Accusamus nobis at omnis consequuntur
															culpa tempore saepe animi.</span>
													</div>

													<div class="form-group mb-4">
														<label for="email">Email</label>
														<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
													</div>

													<div class="form-group mb-4">
														<label for="oldPassword">Old password</label>
														<input type="password" class="form-control" id="oldPassword">
													</div>

													<div class="form-group mb-4">
														<label for="newPassword">New password</label>
														<input type="password" class="form-control" id="newPassword">
													</div>

													<div class="form-group mb-4">
														<label for="conPassword">Confirm password</label>
														<input type="password" class="form-control" id="conPassword">
													</div>

													<div class="d-flex justify-content-end mt-5">
														<button type="submit" class="btn btn-primary mb-2 btn-pill">Update
															Profile</button>
													</div>
												</form>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div> <!-- End Content -->
			</div>
            @endsection