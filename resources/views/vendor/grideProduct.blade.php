
@extends('layouts.admin')

@section('content')

<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="/Add-Product-view" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<div class="card-bar">
										<div class="col-lg-6 col-md-12">
											<input type="text" class="form-control" id="searchProduct" placeholder="search with product name..">
										</div>
										<div class="col-lg-6 col-md-12 sort">
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownCategory">
													<option value="ALL">ALL Category</option>
													<option value="MEN">Men's</option>
													<option value="WOMAN">Woman's</option>
													<option value="KID">Kids</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownOrderBy">
													<option value="ALL">ORDER BY</option>
													<option value="MEN">Letest</option>
													<option value="WOMAN">Price Low - High</option>
													<option value="KID">Price High - Low</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
    <div class="row">
        @foreach($products as $products)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card-wrapper">
                    <div class="card-container">
                        <div class="card-top">
                            @if(isset(json_decode($products->image_data)[0]))
                                <img class="card-image" src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" alt="">
                            @endif
                        </div>
                        <div class="card-bottom">
                            <h3>{{ $products->product_name }} </h3>
                            <p>{{ $products->price }} DZD</p>
                        </div>
                        <div class="card-action">
                             <a data-bs-toggle="modal" data-bs-target="#productDetails" class="btn btn-outline-success">Details</a>
                         </div>
                    </div>
                </div>
            </div>
            @if($loop->iteration % 4 == 0)
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>
</div>



						   

									<div class="row">
										<nav aria-label="Page navigation example p-0">
											<ul class="pagination pagination-seperated pagination-seperated-rounded">
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Previous">
														<span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span> Prev
														<span class="sr-only">Previous</span>
													</a>
												</li>

												<li class="page-item active">
													<a class="page-link" href="#">1</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														Next
														<span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>





			






			<div class="modal fade modal-add-contact" id="productDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
		 

			<div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 90%;">
				 <div class="modal-content">


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
												<div class="image-scroll-container">
												<div class="image-scroll-container">
												@if(!empty($products->image_data) && json_decode($products->image_data) !== null)
          @foreach (json_decode($products->image_data) as $image)
            <img src="{{ asset('images/products/' . $image) }}" alt="Product Image" style="max-width: 100%; height: auto;">
          @endforeach
		  @endif
        </div> <!-- Add more images as needed -->
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
													<h6>Description :</h6>

													@if(!empty($products->image_data) && json_decode($products->image_data) !== null)	
															<p class="product-desc">{{ $products->slug }}.</p>
															@endif
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
													@if(!empty($products->image_data) && json_decode($products->image_data) !== null)
													<p class="product-price">Price: {{$products -> price}} DZD</p>
													<p class="product-price">Unity: </p>
@endif
 													<ul class="product-size">
	 @if(!empty($products->size) && json_decode($products->size) !== null)

    @foreach(json_decode($products->size) as $size)
        <li class="size"><span> {{ $size }}</span></li>
    @endforeach
@endif
</ul>
<p class="product-price">Type: </p>

													<ul class="product-color">

	 @if(!empty($products->colors) && json_decode($products->colors) !== null)
												@foreach(json_decode($products->colors) as $colors)
        <li class="colors"><span>{{ $colors }}</span></li>
    @endforeach
										@endif
													</ul>

													<div class="product-stock">
														<div class="stock">
															<p class="title">Stock</p>
															@if(!empty($products->stock) && json_decode($products->stock) !== null)
															<p class="text">{{$products -> stock}}</p>
															@endif
														</div>
														 
														<div class="stock">
															<p class="title">InOrder</p>
															@if(!empty($products->purchased_number) && json_decode($products->purchased_number) !== null)
															<p class="text"> {{$products -> purchased_number}}</p>
															@endif
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
													@if(!empty($products->full_detail) && json_decode($products->full_detail) !== null)
													<p>{{ $products->full_detail  }}
													@endif
													</p>
													<ul class="features">
													<li>Explore a variety of cake types, from simple classics to customizable masterpieces.</li>
<li>Indulge in our Downloadable/Digital Cake Collection and experience the magic of Virtual Cakes.</li>
<li>Effortlessly manage your cake inventory, even with Backordered specialties.</li>
<li>Savor the perfection of our cakes, crafted with precision and care, akin to the seamless beauty of flatlock seams.</li>

													</ul>
												</div>
												<p class="product-price">Unity: </p>



												<div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
													<ul>
														<li><span>Stock: </span> {{ $products->stock  }}</li>
														@foreach(json_decode($products->size) as $size)		<li><span>Unity:</span> {{ $size  }}</li> @endforeach
														@if(json_decode($products->colors) != null)	
		@foreach(json_decode($products->colors) as $colors)		
	
														<li><span>Type :</span> {{ $colors  }}</li> @endforeach 	@endif
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
  





			
				 </div>
			 </div>
            @endsection