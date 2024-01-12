
@extends('layouts.admin')

@section('content')

<header  >
    
  <!-- Include this in your HTML head to get the CSRF token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Include Bootstrap CSS -->
 

                        <style>
                            *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
	
}
.rate {
  float: left;
  /* or use "display: inline-block;" if you want it to be inline with surrounding content */
}

.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
 .ec-sidebar-block-item {
    display: inline-block;
    margin-right: 20px; /* Adjust spacing between checkboxes */
}

.ec-sidebar-block-item input[type="checkbox"] {
    display: none;
}

.ec-sidebar-block-item label {
    position: relative;
    padding-left: 30px; /* Adjust as needed */
    cursor: pointer;
    font-size: 14px; /* Adjust as needed */
}

.ec-sidebar-block-item label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px; /* Adjust as needed */
    height: 20px; /* Adjust as needed */
    border: 2px solid #007bff; /* Adjust color as needed */
    background-color: #fff;
    box-sizing: border-box;
}

.ec-sidebar-block-item input[type="checkbox"]:checked + label:before {
    background-color: #007bff; /* Adjust color as needed */
    border: 2px solid #007bff; /* Adjust color as needed */
}

/* Additional styling for checked state */
.ec-sidebar-block-item span.checked {
    position: absolute;
    left: 5px; /* Adjust as needed */
    top: 50%;
    transform: translateY(-50%);
    width: 10px; /* Adjust as needed */
    height: 10px; /* Adjust as needed */
    background-color: #007bff; /* Adjust color as needed */
    border-radius: 50%;
    display: none;
}

.ec-sidebar-block-item input[type="checkbox"]:checked + label + span.checked {
    display: block;
}

/* Styling for scrollable row and content wrapper */
.scrollable-row {
    max-height: 2000px; /* Set the maximum height for the scrollable row */
    overflow-y: auto; /* Enable vertical scroll */
}

.ec-content-wrapper {
    max-width: 2000px;
    width: 100%; /* Set the width to 100% */
    height: 1000px; /* Set the height as per your requirement */
}
</style>
  

<style>
    .modal-content {
        max-width: 2000px;
        width: 100%; /* Set the width to 100% */
        height: 1000px; /* Set the height as per your requirement */
        overflow-y: auto; /* Enable vertical scroll if content overflows */
        border-radius: 10px; /* Rounded corners for the modal */
    }

    .ec-content-wrapper {
        max-width: 100%; /* Set the width to 100% */
        height: 800%; /* Set the height to 100% */
        padding: 20px; /* Add padding to the content wrapper */
    }

    /* Add scrollbar to the modal body if the content overflows */
    .modal-body {
        max-height: 500px; /* Set the maximum height for the modal body */
        overflow-y: auto; /* Enable vertical scroll for the modal body */
    }
    
</style>

                        <!-- Ec Header Search End -->
 
     </header>
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
													@if(isset($products->product_name))
													<h5 class="product-title">{{ $products->product_name }}</h5>
													@endif
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
														<i class="mdi mdi-star-half mr-1"></i> Orders</a>
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
 


												<div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
													<ul>
														<li><span>Stock: </span> 
														@if(isset($products->stock))

														{{ $products->stock  }}
													@endif
													</li>
													@if(isset($products->stock))

														@foreach(json_decode($products->size) as $size)		<li><span>Unity:</span> {{ $size  }}</li> @endforeach @endif
														@if(isset($products->colors))
														@if(json_decode($products->colors) != null)	
		@foreach(json_decode($products->colors) as $colors)		
	
														<li><span>Type :</span> {{ $colors  }}</li> @endforeach 	@endif @endif
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
													<div class="ec-t-review-wrapper">


													@foreach($orders as $orders)
														<div class="ec-t-review-item">
															<div class="ec-t-review-avtar">
 															</div>
															<div class="ec-t-review-content">
																
																<div class="ec-t-review-top">
																	
																	<p class="ec-t-review-name">{{$orders->customer}}</p>
															 

  

<script>
$(document).ready(function () {
	$('.rate input').on('click', function () {
		$('#ratingForm').submit();
	});
});
</script>
																</div>
																
																<div class="ec-t-review-bottom">
																	<p>Lorem Ipsum is simply dummy text of the printing
																		and
																		typesetting industry.
																	</p>
																</div>

																<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" {{ $products->rating == 5 ? 'checked' : '' }} />
    <label for="star5" title="text">5 stars</label>

    <input type="radio" id="star4" name="rate" value="4" {{ $products->rating == 4 ? 'checked' : '' }} />
    <label for="star4" title="text">4 stars</label>

    <input type="radio" id="star3" name="rate" value="3" {{ $products->rating == 3 ? 'checked' : '' }} />
    <label for="star3" title="text">3 stars</label>

    <input type="radio" id="star2" name="rate" value="2" {{ $products->rating == 2 ? 'checked' : '' }} />
    <label for="star2" title="text">2 stars</label>

    <input type="radio" id="star1" name="rate" value="1" {{ $products->rating == 1 ? 'checked' : '' }} />
    <label for="star1" title="text">1 star</label>
   
    </div>

  
															</div>
														</div>
														
										 
@endforeach

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