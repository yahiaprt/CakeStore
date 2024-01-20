@extends('layouts.admin')

@section('content')
<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>User Profile</h1>
  							</p>
						</div>
						<div>
 						</div>
					</div>
					<div class="card bg-white profile-content">
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="profile-content-left profile-left-spacing">
									<div class="text-center widget-profile px-0 border-0">
									<div class="row">
@if ($seller && $seller->store_image)
         <img src="{{ asset('images/products/' . $seller->store_image) }}" alt="">
    @else
  
        <!-- Add a default image or handle the case where no image is available -->
        <img src="assets/images/cat-banner/1.jpg" alt="">
    @endif
</div>
										<div class="card-body">
											<h4 class="py-2 text-dark">{{$seller->name}}</h4>
											<p>{{$seller->email}}</p>
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
										<p>{{$seller->email}}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
										<p>{{$seller->phone_number}}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Birthday</p>
										<p>{{$seller->birthdate}}</p>
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
											<button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">

										<div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="tab-widget mt-5">
												<div class="row">
													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															
													 

														 
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
														 

														 
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															 

														 
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-12">

														<!-- Notification Table -->
														<div class="card card-default">
															<div class="card-header justify-content-between mb-1">
																<h2>Store Details</h2>
																<div>

																<form method="POST" action="/sellerProfile">
																	@csrf
																	
																	<button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
																	<div class="dropdown show d-inline-block widget-dropdown">
																		<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
																		<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
																			<li class="dropdown-item"><a href="#">Action</a></li>
																			<li class="dropdown-item"><a href="#">Another action</a></li>
																			<li class="dropdown-item"><a href="#">Something else here</a>
																			</li>
																		</ul>
																	</div>
																</div>

															</div>
															<div class="card-body compact-notifications" data-simplebar="init" style="height: 434px;"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-ec-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px;">
																<div class="media pb-3 align-items-center justify-content-between">
																	<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																		<i class="mdi mdi-cart-outline font-size-20"></i>
																	</div>

																	<div class="media-body pr-3 ">
																	<div id="size-options" class="col-md-8 mb-25">
        <label class="form-label">Cake Type</label>
        <div class="form-checkbox-box">
            <div class="form-check form-check-inline">
                <input type="checkbox" name="colors[]" value="S">
                <label>sucré</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="colors[]" value="M">
                <label>salé</label>
            </div>
			<div class="form-check form-check-inline">
                <input type="checkbox" name="colors[]" value="M">
                <label>les deux</label>
            </div>
        </div>
    </div>

																	</div>
																	
																	<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>






																<div class="media py-3 align-items-center justify-content-between">
																	<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
																		<i class="mdi mdi-email-outline font-size-20"></i>
																	</div>


																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Store NAme</a><br>
																		<input type="text" name="store_name" value="{{$seller->store_name}}" class='form-control' style='height: 40px;'> </input>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Adress</a><br>
																		<input type="text" name="address" value="{{$seller->address}}" class='form-control' style='height: 40px;'> </input>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 
																		</span>
																</div>
																


																<div class="media py-3 align-items-center justify-content-between">
    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
        <i class="mdi mdi-stack-exchange font-size-20"></i>
    </div>
    <div class="media-body pr-3">
        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Description</a><br>
        <input type='text' name='description' value='{{ $seller->description }}' class='form-control' style='height: 40px;'>
    </div>
    <span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>  </span>
</div>

																

																<div class="media py-3 align-items-center justify-content-between">
																	<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																		<i class="mdi mdi-cart-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark" href="#">opening Time</a> <br>
																		<input type='time' Name='closing_time' value='{{ $seller -> closing_time }}'>	
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark" href="#">closing Time</a> <br>
																		<input type='time' Name='opening_time' value='{{ $seller -> opening_time }}'>	
																	</div>
																	<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 
																		</span>
																</div>
                                                                    <button type="submit" class="btn btn-primary">Update</button>
 
																 </form>

															</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 590px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 319px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
															<div class="mt-3"></div>
														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
											<div class="tab-pane-content mt-5">


												<form method="POST" action="/sellerProfile"enctype="multipart/form-data">



    @csrf
													<div class="form-group row mb-6">
														<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
														<div class="col-sm-8 col-lg-10">
															<div class="custom-file mb-1">
 																<input type="file" id="imageUpload" class="custom-file-input" name="image" required="" accept=".png, .jpg, .jpeg">
 
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
																<input type="text" class="form-control" id="first_name" name="first_name" value="{{$seller->first_name}}">
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label for="lastName">Last name</label>
																<input type="text" class="form-control" id="last_name" name="last_name" value="{{$seller->last_name}}">
															</div>
														</div>
													</div>

													<div class="col-lg-6">
															<div class="form-group">
																<label for="phone_number">phone_number</label>
																<input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$seller->phone_number}}">
															</div>
														</div>
													</div>


													<div class="form-group mb-4">
														<label for="userName">User name</label>
														<input type="text" class="form-control" id="userName" value="{{$seller->first_name}}">
														<span class="d-block mt-1">Accusamus nobis at omnis consequuntur
															culpa tempore saepe animi.</span>
													</div>

													<div class="form-group mb-4">
														<label for="email">Email</label>
														<input type="email" class="form-control" id="email" name="email" value="{{$seller->email}}">
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