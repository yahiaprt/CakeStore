@extends('layouts.admin')

@section('content')
<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control" placeholder="search.." autofocus="" autocomplete="off">
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="assets/img/user/user.png" class="user-image" alt="User Image">
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<img src="assets/img/user/user.png" class="img-circle" alt="User Image">
										<div class="d-inline-block">
											John Deo <small class="pt-1">john.example@gmail.com</small>
										</div>
									</li>
									<li>
										<a href="user-profile.html">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-email"></i> Message
										</a>
									</li>
									<li>
										<a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
									</li>
									<li class="right-sidebar-in">
										<a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
									</li>
									<li class="dropdown-footer">
										<a href="index-2.html"> <i class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<li class="dropdown notifications-menu custom-dropdown">
								<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
									<i class="mdi mdi-bell-outline"></i>
								</button>

								<div class="card card-default dropdown-notify dropdown-menu-right mb-0">
									<div class="card-header card-header-border-bottom px-3">
										<h2>Notifications</h2>
									</div>

									<div class="card-body px-0 py-0">
										<ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab" role="tablist">
											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link active pb-3" id="home2-tab" data-bs-toggle="tab" data-bs-target="#home2" role="tab" aria-controls="home2" aria-selected="true">All (10)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab" data-bs-target="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Msgs (5)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab" data-bs-target="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Others (5)</a>
											</li>
										</ul>

										<div class="tab-content" id="myNotifications">
											<div class="tab-pane fade show active" id="home2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar="init" style="height: 360px"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-ec-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Nitin</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Lovina</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Crinali</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification event-active">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Yearly Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span class="my-1 btn btn-sm btn-success">Accept</span>
																	<span class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></ul>
											</div>

											<div class="tab-pane fade" id="profile2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar="init" style="height: 360px"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-ec-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u6.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Hardiko</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u7.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browin</h4>
																	<p class="last-msg">Nam ut nisi erat. Ut quis tortor
																		varius, hendrerit arcu quis, congue nisl. In
																		scelerisque, sem ut ve.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">jenelia</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Bhavlio</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browini</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></ul>
											</div>

											<div class="tab-pane fade" id="contact2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar="init" style="height: 360px"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-ec-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
													<li>
														<a href="javscript:void(0)" class="media media-message media-notification event-active">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span class="my-1 btn btn-sm btn-success">Accept</span>
																	<span class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)" class="media media-message media-notification">

															<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>
												</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></ul>
											</div>
										</div>
									</div>
								</div>

								<ul class="dropdown-menu dropdown-menu-right d-none">
									<li class="dropdown-header">You have 5 notifications</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-plus"></i> New user registered
											<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-remove"></i> User deleted
											<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
											<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-supervisor"></i> New client
											<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-server-network-off"></i> Server overloaded
											<span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
										</a>
									</li>
									<li class="dropdown-footer">
										<a class="text-center" href="#"> View All </a>
									</li>
								</ul>
							</li>
							<li class="right-sidebar-in right-sidebar-2-menu">
								<i class="mdi mdi-settings-outline mdi-spin"></i>
							</li>
						</ul>
					</div>
				</nav>
			</header>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<!-- Top Statistics -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">13</h2>
									<p>Daily Signups</p>
									<span class="mdi mdi-account-arrow-left"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">73</h2>
									<p>Daily Visitors</p>
									<span class="mdi mdi-account-clock"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">15</h2>
									<p>Daily Order</p>
									<span class="mdi mdi-package-variant"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">DZD 98,13</h2>
									<p>Daily Revenue</p>
									<span class="mdi mdi-currency-usd"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- Sales Graph -->
							<div id="user-acquisition" class="card card-default">
								<div class="card-header">
									<h2>Sales Report</h2>
								</div>
								<div class="card-body">
									<ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab" aria-selected="true">Today's</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab" aria-selected="false">Monthly </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab" aria-selected="false">Yearly</a>
										</li>
									</ul>
									<div class="tab-content pt-4" id="salesReport">
										<div class="tab-pane fade show active" id="source-medium" role="tabpanel">
											<div class="mb-6" style="max-height:247px"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
												<canvas id="acquisition" class="chartjs2 chartjs-render-monitor" style="display: block; width: 1442px; height: 247px;" width="1442" height="247"></canvas>
												<div id="acqLegend" class="customLegend mb-2"><ul class="2-legend"><li><span style="background-color:rgba(52, 116, 212, .2)"></span>Via Referral</li><li><span style="background-color:rgba(255, 192, 203, .3)"></span>Direct</li><li><span style="background-color:rgb(178, 251, 212, .3)"></span>Via Social</li></ul></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12 p-b-15">
							<!-- Doughnut Chart -->
							<div class="card card-default">
								<div class="card-header justify-content-center">
									<h2>Orders Overview</h2>
								</div>
								<div class="card-body"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
									<canvas id="doChart" style="display: block; width: 684px; height: 210px;" width="684" height="210" class="chartjs-render-monitor"></canvas>
								</div>
								<a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
								<div class="card-footer d-flex flex-wrap bg-white p-0">
									<div class="col-6">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ff7b7b "></i>Order returned</li>
											</ul>
										</div>
									</div>
									<div class="col-6 border-left">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #7be6ff"></i>Order Broken</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- User activity statistics -->
							<div class="card card-default" id="user-activity">
								<div class="no-gutters">
									<div>
										<div class="card-header justify-content-between">
											<h2>User Activity</h2>
											<div class="date-range-report ">
												<span>Jan 11, 2024 - Jan 11, 2024</span>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content" id="userActivityContent"> 
												<div class="tab-pane fade show active" id="user" role="tabpanel"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
													<canvas id="activity" class="chartjs chartjs-render-monitor" style="display: block; width: 1442px; height: 280px;" width="1442" height="280"></canvas>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white border-top">
											<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 p-b-15">
							<div class="card card-default">
								<div class="card-header flex-column align-items-start">
									<h2>Current Users</h2>
								</div>
								<div class="card-body"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
									<canvas id="currentUser" class="chartjs chartjs-render-monitor" style="display: block; width: 684px; height: 283px;" width="684" height="283"></canvas>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white border-top">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-12 p-b-15">
						 
						<div class="col-xl-4 col-12 p-b-15">
							<!-- Top Sell Table -->
						 
						</div>
					</div>

					<div class="row">
						<div class="col-12 p-b-15">
							<!-- Recent Order Table -->
							<div class="card card-table-border-none card-default recent-orders" id="recent-orders">
								<div class="card-header justify-content-between">
									<h2>Recent Orders</h2>
									<div class="date-range-report">
										<span>Dec 14, 2023 - Jan 12, 2024</span>
									</div>
								</div>
								<div class="card-body pt-0 pb-5">
									<table class="table card-table table-responsive table-responsive-large" style="width:100%">
										<thead>
											<tr>
												<th>Order ID</th>
 												<th class="d-none d-lg-table-cell">Order Date</th>
												<th class="d-none d-lg-table-cell">Order Cost</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											 @foreach($orders as $orders)
											<tr>
												<td>{{$orders->id}}</td>
											 
 												<td class="d-none d-lg-table-cell">{{$orders->created_at}}</td>
												<td class="d-none d-lg-table-cell">DZD {{$orders->total_amount}}</td>
												<td>
													<span class="badge badge-danger">{{$orders->status}}</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
@endforeach



										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-5">
							<!-- New Customers -->
							<div class="card ec-cust-card card-table-border-none card-default">
								<div class="card-header justify-content-between ">
									<h2>New Customers</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20">
											<i class="mdi mdi-cached"></i>
										</button>
										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="#">Action</a></li>
												<li class="dropdown-item"><a href="#">Another action</a></li>
												<li class="dropdown-item"><a href="#">Something else here</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body pt-0 pb-15px">
									<table class="table ">
										<tbody>
         @foreach($users as $users)
      
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img class="profile-img rounded-circle w-45" src="assets/img/user/u1.jpg" alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">{{$users->name}}
																	 </h6>
															</a>
															<small>{{$users-> email}}</small>
														</div>
													</div>
												</td>
 											 
											</tr>

@endforeach

					 


										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="col-xl-7">
							<!-- Top Products -->
							<div class="card card-default ec-card-top-prod">
								<div class="card-header justify-content-between">
									<h2>Top Products</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="#">Update Data</a></li>
												<li class="dropdown-item"><a href="#">Detailed Log</a></li>
												<li class="dropdown-item"><a href="#">Statistics</a></li>
												<li class="dropdown-item"><a href="#">Clear Data</a></li>
											</ul>
										</div>
									</div>
								</div>


								<div class="card-body mt-10px mb-10px py-0">





                                    @foreach($products as $product)
									@if($product-> rating > 4)
									<div class="row media d-flex pt-15px pb-15px">
										<div class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">{{$product->product_name}}</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">58</span>Sales</p>
											<p class="d-none d-md-block">{{$product->description}}</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">DZD {{$product->price}}</span>
 											</p>
										</div>
									</div>
									@endif
									@endforeach

							 





								</div>
							
							</div>
							
							
							<!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright © <span id="ec-year">2024</span><a class="text-primary" href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div>

        @endsection