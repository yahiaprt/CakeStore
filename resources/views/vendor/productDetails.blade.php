@extends('layouts.admin')

@section('content')

<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product Detail</h1>
							<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> Edit
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Product Detail</h2>
								</div>

								<div class="card-body product-detail">
									<div class="row">
										<div class="col-xl-4 col-lg-6">
											<div class="row">
												<div class="single-pro-img">
													<div class="single-product-scroll">
														<div class="single-product-cover slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5555px; transform: translate3d(-505px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" alt="">
															</div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 505px;"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="">
															<img role="presentation" alt="" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" class="zoomImg" style="position: absolute; top: -17.247px; left: -4.8396px; opacity: 0; width: 765px; height: 850px; border: medium; max-width: none; max-height: none;"></div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" alt="">
															<img role="presentation" alt="" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 765px; height: 850px; border: medium; max-width: none; max-height: none;"></div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" alt="">
															<img role="presentation" alt="" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 765px; height: 850px; border: medium; max-width: none; max-height: none;"></div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" alt="">
															<img role="presentation" alt="" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 765px; height: 850px; border: medium; max-width: none; max-height: none;"></div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" alt="">
															<img role="presentation" alt="" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 765px; height: 850px; border: medium; max-width: none; max-height: none;"></div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 505px;" tabindex="-1"><div><div class="single-slide zoom-image-hover" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" alt="">
															</div></div></div></div></div></div>
														<div class="single-nav-thumb slick-initialized slick-slider">
                                                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1834px; transform: translate3d(-524px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="assets/img/products/pd_5.jpg" alt="">
															</div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 131px;"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="">
															</div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 131px;"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" alt="">
															</div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 131px;"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" alt="">
															</div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 131px;"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" alt="">
															</div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[1]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[3]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[4]) }}" alt="">
															</div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 131px;" tabindex="-1"><div><div class="single-slide" style="width: 100%; display: inline-block;">
																<img class="img-responsive" src="{{ asset('images/products/' . json_decode($product->image_data)[2]) }}" alt="">
															</div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-5 col-lg-6">
											<div class="row product-overview">
												<div class="col-12">
													<h5 class="product-title">Pure Leather Purse for Woman</h5>
													<p class="product-rate">
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star"></i>
													</p>
													<p class="product-desc">Lorem Ipsum is simply dummy text of the
														printing and typesetting industry. Lorem Ipsum has been the
														industry's standard dummy text ever since the 1990.</p>
													<p class="product-desc">Lorem Ipsum is simply dummy text of the
														printing and typesetting industry. Lorem Ipsum has been the
														industry's standard dummy text ever since the 1990. Lorem Ipsum
														is simply dummy text of the printing and typesetting industry.
													</p>
													<div class="ec-ofr">
														<h6>Available offers</h6>
														<ul>
															<li><b>Special Price :</b> Get extra 16% off (price
																inclusive of discount) <a href="#">T&amp;C</a> </li>
															<li><b>Bank Offer :</b> 10% off on XYZ Bank Cards, up to
																$12. On orders of $200 and above <a href="#">T&amp;C</a>
															</li>
															<li><b>Bank Offer :</b> 5% Unlimited Cashback on Ekka XYZ
																Bank Credit Card <a href="#">T&amp;C</a></li>
															<li><b>Bank Offer :</b> Flat $50 off on first Ekka Pay Later
																order of $200 and above <a href="#">T&amp;C</a></li>
														</ul>
													</div>
													<p class="product-price">Price: {{$product -> price}} DZD</p>
													<p class="product-sku">SKU#: WH12</p>
													<ul class="product-size">
														<li class="size"><span>S</span></li>
														<li class="size"><span>M</span></li>
														<li class="size"><span>L</span></li>
														<li class="size"><span>XL</span></li>
													</ul>
													<ul class="product-color">
														<li class="color"><span style="background-color:#90cdf7;"></span></li>
														<li class="color"><span style="background-color:#ff3b66;"></span></li>
														<li class="color"><span style="background-color:#ffc476;"></span></li>
														<li class="color"><span style="background-color:#1af0ba;"></span></li>
														<li class="color"><span style="background-color:#f887d6;"></span></li>
													</ul>

													<div class="product-stock">
														<div class="stock">
															<p class="title">Available</p>
															<p class="text">180</p>
														</div>
														<div class="stock">
															<p class="title">Pending</p>
															<p class="text">50</p>
														</div>
														<div class="stock">
															<p class="title">InOrder</p>
															<p class="text">20</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-12 u-card">
											<div class="card card-default seller-card">
												<div class="card-body text-center">
													<a href="javascript:0" class="text-secondary d-inline-block">
														<div class="image mb-3">
															<img src="assets/img/user/u-xl-4.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
														</div>

														<h5 class="text-dark">John Karter</h5>
														<p class="product-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star"></i>
														</p>

														<ul class="list-unstyled">
															<li class="d-flex mb-1">
																<i class="mdi mdi-map mr-1"></i>
																<span>321/2, rio street, usa.</span>
															</li>
															<li class="d-flex mb-1">
																<i class="mdi mdi-email mr-1"></i>
																<span>example@email.com</span>
															</li>
															<li class="d-flex">
																<i class="mdi mdi-whatsapp mr-1"></i>
																<span>+00 987-654-3210</span>
															</li>
														</ul>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="row review-rating mt-4">
										<div class="col-12">
											<ul class="nav nav-tabs" id="myRatingTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab" data-bs-target="#productdetail" href="#productdetail" role="tab" aria-selected="true">
														<i class="mdi mdi-library-books mr-1"></i> Detail</a>
												</li>

												<li class="nav-item">
													<a class="nav-link" id="product-information-tab" data-bs-toggle="tab" data-bs-target="#productinformation" href="#productinformation" role="tab" aria-selected="false">
														<i class="mdi mdi-information mr-1"></i>Info</a>
												</li>

												<li class="nav-item">
													<a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab" data-bs-target="#productreviews" href="#productreviews" role="tab" aria-selected="false">
														<i class="mdi mdi-star-half mr-1"></i> Reviews</a>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent2">
												<div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry.
														Lorem Ipsum has been the industry's standard dummy text ever
														since the
														1500s, when an unknown printer took a galley of type and
														scrambled it to
														make a type specimen book. It has survived not only five
														centuries, but also
														the leap into electronic typesetting, remaining essentially
														unchanged.
													</p>
													<ul class="features">
														<li>Any Product types that You want - Simple, Configurable</li>
														<li>Downloadable/Digital Products, Virtual Products</li>
														<li>Inventory Management with Backordered items</li>
														<li>Flatlock seams throughout.</li>
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
													<ul>
														<li><span>Weight</span> 1000 g</li>
														<li><span>Dimensions</span> 35 × 30 × 7 cm</li>
														<li><span>Color</span> Black, Pink, Red, White</li>
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
													<div class="ec-t-review-wrapper">
														<div class="ec-t-review-item">
															<div class="ec-t-review-avtar">
																<img src="assets/img/review-image/1.jpg" alt="">
															</div>
															<div class="ec-t-review-content">
																<div class="ec-t-review-top">
																	<p class="ec-t-review-name">Jeny Doe</p>
																	<div class="ec-t-rate">
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star"></i>
																	</div>
																</div>
																<div class="ec-t-review-bottom">
																	<p>Lorem Ipsum is simply dummy text of the printing
																		and
																		typesetting industry.
																	</p>
																</div>
															</div>
														</div>
														<div class="ec-t-review-item">
															<div class="ec-t-review-avtar">
																<img src="assets/img/review-image/2.jpg" alt="">
															</div>
															<div class="ec-t-review-content">
																<div class="ec-t-review-top">
																	<p class="ec-t-review-name">Linda Morgus</p>
																	<div class="ec-t-rate">
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star is-rated"></i>
																		<i class="mdi mdi-star"></i>
																	</div>
																</div>
																<div class="ec-t-review-bottom">
																	<p>Lorem Ipsum is simply dummy text of the printing
																		and
																		typesetting industry.
																	</p>
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
					</div>
				</div> <!-- End Content -->
			</div>
 @endsection