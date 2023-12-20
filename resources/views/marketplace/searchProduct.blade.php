@extends('layouts.homeLayout')

@section('homecontent')
<head>
<link id="ekka-css" href="assets/css/ekka copy.css" rel="stylesheet">
<style>
    #productDetails.modal-add-contact .modal-dialog.modal-dialog-centered {
        max-width: 90% !important; /* Adjust the width as needed */
    }

    /* Add more styles as needed */
</style>



    </head>
<section class="ec-page-content section-space-p" style="max-width: 100%;">>
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><i class="fi-rr-apps"></i></button>
                                <button class="btn btn-list"><i class="fi-rr-list"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected="" disabled="">Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->








































                    
                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">
                              



                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $('.details-btn').on('click', function () {
        var productId = $(this).data('product-id');
        $('#productIdInput').val(productId);

        // Fetch and update product details content (you need to implement this part)
        fetchProductDetails(productId);
    });

    // Function to fetch and update product details
    function fetchProductDetails(productId) {
        // You should replace this URL with the actual endpoint to fetch product details
        var url = '/get-product-details/' + productId;

        // Make an Ajax request to fetch product details
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                // Update the product details content in the modal
                $('#productDetailsContent').html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>


@foreach($products as $products)

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" alt="Product">
                                                    <img class="hover-image" src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a data-bs-toggle="modal" data-bs-target="#productDetails" data-product-id="{{ $products->id }}" class="btn btn-outline-success details-btn">Details</a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$products->product_name}}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">{{$products->full_detail}}.</div>
                                            <span class="ec-price">
                                                <span class="new-price">{{$products->price}}</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" data-src-hover="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" data-src-hover="{{ asset('images/products/' . json_decode($products->image_data)[0]) }}" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$18.00" data-new="$15.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

@endforeach











 





                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div id="shop_sidebar"><div class="inner-wrapper-sticky">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                   <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category<div class="ec-sidebar-res"><i class="ecicon eci-angle-down"></i></div></h3>
                                </div>
                                <div class="ec-sb-block-content ec-sidebar-dropdown">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
 <a href="{{ route('searchCategoryProductName', 'sucre') }}" id="myLink1">🍪 Sucré</a><span  ></span>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="ec-sidebar-block-item">
 <a href="{{ route('searchCategoryProductName', 'salle') }}" id="myLink2">🧁 Salleé</a><span  ></span>                                            </div>
                                        </li>
                     
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                            <a href="{{ route('searchProductName') }}" class="emoji-checkbox">🍪/🧁 les deux</a>
                                            </div>
                                        </li>
                                 
                                        <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                            <ul class="ec-cat-sub-dropdown">
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox"> <a href="#">Watch</a><span class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox"> <a href="#">Cap</a><span class="checked"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">More
                                                    Categories</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size<div class="ec-sidebar-res"><i class="ecicon eci-angle-down"></i></div></h3>
                                </div>
                                <div class="ec-sb-block-content ec-sidebar-dropdown">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" checked=""><a href="#">S</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value=""><a href="#">M</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value=""> <a href="#">L</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value=""><a href="#">XL</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value=""><a href="#">XXL</a><span class="checked"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Color item -->
                            <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Color<div class="ec-sidebar-res"><i class="ecicon eci-angle-down"></i></div></h3>
                                </div>
                                <div class="ec-sb-block-content ec-sidebar-dropdown">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#c4d6f9;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ff748b;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#000000;"></span></div>
                                        </li>
                                        <li class="active">
                                            <div class="ec-sidebar-block-item"><span style="background-color:#2bff4a;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ff7c5e;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#f155ff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ffef00;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#c89fff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#7bfffa;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#56ffc1;"></span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Price Block -->
                            <div class="price-filter-container">
    <form  action="/searchPriceProductName" method="post">
        @csrf
        <div class="price-filter-header">
            <h3 class="price-filter-title">
                Price Range
                <div class="price-filter-icon">
                    <i class="ecicon eci-angle-down"></i>
                </div>
            </h3>
        </div>
        <div class="price-filter-content">
            <div class="price-slider" id="ec-sliderPrice" data-min="0" data-max="250" data-step="10"></div>
            <div class="price-inputs">
                <div class="price-input">
                    <label for="min_price" class="input-label">Min:</label>
                    <input type="text" id="min_price" class="price-input-field form-control" name="min_price">
                </div>
                <div class="price-input">
                    <label for="max_price" class="input-label">Max:</label>
                    <input type="text" id="max_price" class="price-input-field form-control" name="max_price">
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Apply Filter</button>
            </div>
        </div>
    </form>
</div>
<form action="/searchRatingProductName" method="post" >
    @csrf
    <div class="filter-header">
        <h3 class="filter-title">
            Rating Filter
            <div class="filter-icon">
                <i class="ecicon eci-angle-down"></i>
            </div>
        </h3>
    </div>
    <div class="filter-content">
        <div class="rating-input">
            <label for="rating" class="input-label">Min Rating:</label>
            <input type="number" id="rating" class="rating-input-field form-control" name="rating" min="0" max="5" step="1">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Apply Rating Filter</button>
        </div>
    </div>
</form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>




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


                    <div class="modal fade modal-add-contact" id="productDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px; width: 90%;">
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
        




        
    </section>

@endsection