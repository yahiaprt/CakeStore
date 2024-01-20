@extends('layouts.homeLayout')

@section('homecontent')
<head>
    
    <!-- Include this in your HTML head to get the CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Include Bootstrap CSS -->
    <style>
    .modal-backdrop {
    background-color: rgba(0, 0, 0, 0.7) !important; /* Set the opacity as needed */    }
</style>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked) > input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked) > label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
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

    <link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet">

    <style>
        #productDetails.modal-add-contact .modal-dialog.modal-dialog-centered {
            max-width: 90% !important; /* Adjust the width as needed */
        }

        /* Add more styles as needed */
    </style>
</head>
<section class="ec-page-content section-space-p" style="max-width: 120%;">
        <div class="container" style="max-width: 80%;">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
      





































                    
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
 @if($searchType === 'product')             
                   <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner"style="background-color: white;">

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
                                                <input type="hidden" name="productIdInput" value="{{$products->id}}">
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</a>
                                                     <a  href="" data-bs-toggle="modal" data-bs-target="#productDetailModal{{ $products->id }}"  class="ec-btn-group wishlist" title="Wishlist" ><i class="fi-rr-search"></i></a>

                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$products->product_name}}</a></h5>
                                            <div class="ec-pro-rating">
                                            <style>
        .star {
            font-size: 2em; /* Adjust the size as needed */
            transform: rotate(45deg); /* Rotate the star to make it sharper */
        }
    </style> 

<div class="stars">
    @for($i = 0; $i < $products->rating; $i++)
        <span class="star">&#x2B50;</span>
    @endfor
</div>




                                            </div>
                                            <div class="ec-pro-list-desc">{{$products->full_detail}}.</div>
                                            <span class="ec-price">
                                                <span class="new-price">{{$products->price}}</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                      </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                    @if ($products->size !== null)
    @php
        $sizes = json_decode($products->size);
    @endphp

    @if ($sizes !== null)
        @foreach ($sizes as $size)
            <li class="active">
                <a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">
                    {{ $size }}
                </a>
            </li>
        @endforeach
    @endif
@endif

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>











  @endif
  <div class="modal fade modal-add-contact" id="productDetailModal{{ $products->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px  position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" >  
           <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 2000px; width: 2000%; height: 500%; max-height:1300px">  

        <div class="modal-content" style="  max-width: 2000px; width: 2000%;  height: 500%; max-height:1300px">  
            <div class="ec-content-wrapper" style="max-width: 1950px; width: 2000%;  height: 500%; max-height:1300px">  
   
 
                 <div class="content" >   
                    <div>
                        <button onclick="$('#productDetailModal{{ $products->id }}').modal('hide');" class="btn btn-primary" style="font-size: 30px; display: flex; align-items: center; justify-content: center;">&#8592;</button>
 
 <br>
    </div>
                    <!-- Breadcrumb Section -->
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                        
                        </div>
                        <div>
  
                 
                         </div>
                    </div>

                    <!-- Main Content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default"style="background-color: #f5f0e1;">
                                <div class="card-header card-header-border-bottom">
                                <h2>Product Detail </h2>
                                </div>
                                <div class="card-body product-detail">
                                    <!-- Product Images -->
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6"style="background-color: white;">
                                            <div class="image-scroll-container">
                                                <!-- Image Loop -->
                                                @if(!empty($products->image_data) && json_decode($products->image_data) !== null)
                                                    @foreach (json_decode($products->image_data) as $image)
                                                        <img src="{{ asset('images/products/' . $image) }}" alt="Product Image" style="max-width: 100%; height: auto;">
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Product Information -->
                                        <div class="col-xl-5 col-lg-6">
                                            <div class="row product-overview">
                                                <!-- Product Details -->
                                                <div class="col-12">
                                                    <h5 class="product-title">{{$products->product_name}}</h5>
                                                    <!-- Rating Stars -->
                                                    <p class="product-rate">
                                                        @for($i = 0; $i < 4; $i++)
                                                            <i class="mdi mdi-star is-rated"></i>
                                                        @endfor
                                                        <i class="mdi mdi-star"></i>
                                                    </p>

                                                    <!-- Product Description -->
                                                    <h6>Description :</h6>
                                                    @if(!empty($products->slug))
                                                        <p class="product-desc">{{ htmlspecialchars($products->slug) }}.</p>
                                                    @endif

                                                    <!-- Available Offers -->
                                                    <div class="ec-ofr">
                                                        <h6>Available offers</h6>
                                                        <ul>
                                                            <!-- Offers Loop -->
                                                            <li><b>Slug :</b> {{$products->slug}} <a href="#">T&amp;C</a></li>
                                                            <li><b>Bank Offer :</b> 10% off on BaridiMob paiments, up to DZD 120. On orders of DZD 2000 and above <a href="#">T&amp;C</a></li>
                                                            <!-- Add more offers as needed -->
                                                        </ul>
                                                    </div>
                                                    {{$products->name}}
                                                    <!-- Product Price -->
                                                    @if(!empty($products->price))
                                                        <p class="product-price">Price: {{$products->price}} DZD</p>
                                                    @endif
                                                
                                                    <!-- Product Size -->
                                                 
                                                 
                                                  
                                                    <!-- Product Stock and InOrder -->
                                                    <form id="ratingForm" method="POST" action="{{ route('rate') }}">
    @csrf

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
    <input type="hidden" name="id" value="{{ $products->id }}">
</form>

<script>
    $(document).ready(function () {
        $('.rate input').on('click', function () {
            $('#ratingForm').submit();
        });
    });
</script>

                                                </div>
                                            </div>
                                        </div>
 

          <!-- Assuming $products is defined outside of this snippet -->
             <!-- Seller Information -->
             @if ($seller->count() > 0)
     @foreach ($seller as $item)
     @if ($item->id == $products->seller_id)
     <div class="col-xl-3 col-lg-12 u-card">
                                            <div class="card card-default seller-card">
                                                <div class="card-body text-center">
                                                    <!-- Seller Details -->
                                                    <a href="javascript:0" class="text-secondary d-inline-block">
                                                        <h3>The Artisant</h3>
                                                        <br>
                                                        <!-- Seller Avatar -->
                                                        <div class="image mb-3">
                                                        @if ($item && $item->store_image)
         <img src="{{ asset('images/products/' . $seller->store_image) }}" alt="">
    @else
  
        <!-- Add a default image or handle the case where no image is available -->
        <img src="assets/images/cat-banner/1.jpg" alt="">
    @endif                                                        </div>
                                                        <!-- Seller Information -->
                                                        <h5 class="text-dark">{{$item->store_name}}</h5>
                                                        <!-- Seller Rating Stars -->
                                                        <p class="product-rate">
                                                            @for($i = 0; $i < 4; $i++)
                                                                <i class="mdi mdi-star is-rated"></i>
                                                            @endfor
                                                            <i class="mdi mdi-star"></i>
                                                        </p>
                                                        <!-- Seller Contact Information -->
                                                        <ul class="list-unstyled">
                                                        <li class="d-flex mb-1">
                                                                <i class="mdi mdi-map mr-1"></i>
                                                                <span>{{$item->name}}</span>
                                                            </li>
                                                            <li class="d-flex mb-1">
                                                                <i class="mdi mdi-map mr-1"></i>
                                                                <span>{{$item->address}}</span>
                                                            </li>
                                                            <li class="d-flex mb-1">
                                                                <i class="mdi mdi-email mr-1"></i>
                                                                <span>{{$item->email}}</span>
                                                            </li>
                                                            <li class="d-flex">
                                                                <i class="mdi mdi-whatsapp mr-1"></i>
                                                                <span>{{$item->phone_number}}</span>
                                                            </li>
                                                        </ul>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                         @endforeach
 
 @endif
                                 </div>

                                    <!-- Review Section -->
                                    <div class="row review-rating mt-4">
                                        <div class="col-12">
                                            <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab" data-bs-target="#productdetail" href="#productdetail" role="tab" aria-selected="true">
                                                        <i class="mdi mdi-library-books mr-1"></i> Detail</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent2">
                                                <!-- Detail Tab Content -->
                                                <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
                                                <ul class="product-color">
                                                        @if(!empty($products->colors) && is_array(json_decode($products->colors)))
                                                            @foreach(json_decode($products->colors) as $colors)
                                                            <p class="product-price">Type: <span>{{ $colors }}</span></p>

                                                             @endforeach
                                                        @endif
                                                     
                                                     
                                                     </ul>   
                                                    <!-- Features List -->
                                                    <ul class="features">
                                                    @if(!empty($products->stock))
                                                    <p class="product-price">Minimal quantity To order : {{$products->stock}}</p>

                                                             @endif
                                                    @if(!empty($products->purchased_number))
                                                    <p class="product-price">InOrder : {{$products->purchased_number}}</p>

                                        
                                                            @endif
                                                    <!-- Product Type -->

                                                    <!-- Product Color -->
                                                   
                                                     
                                                    <h6>  Description :  {{$products->full_detail}}.</h6 >

                                                </div>

                                                <!-- Info Tab Content -->
                                                <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
                                                    <ul>
                                                        <li><span>Stock: </span> {{ $products->stock }}</li>
                                                        <!-- Size Loop -->
                                                        <p class="product-price">Unity: 
                                                    <ul class="product-size">
                                                        @if(!empty($product->size) && is_array(json_decode($product->size)))
                                                            @foreach(json_decode($product->size) as $size)
                                                           <span>{{ $size }}</span></p>

                                                             @endforeach
                                                        @endif
                                                    </ul>
                                                        <!-- Color Loop -->
                                                        <ul class="product-color">
                                                        @if(!empty($product->colors) && is_array(json_decode($product->colors)))
                                                            @foreach(json_decode($product->colors) as $colors)
                                                            <p class="product-price">Type: <span>{{ $colors }}</span></p>

                                                             @endforeach
                                                        @endif
                                                    </ul>
                                                    </ul>
                                                </div>

                                                <!-- Reviews Tab Content -->
                                                <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
                                                    <!-- Review Items Loop -->
                                                    <div class="ec-t-review-wrapper">
                                                        <div class="ec-t-review-item">
                                                            <div class="ec-t-review-avtar">
                                                                <img src="assets/img/review-image/1.jpg" alt="">
                                                            </div>
                                                            <div class="ec-t-review-content">
                                                                <div class="ec-t-review-top">
                                                                    <p class="ec-t-review-name">Jeny Doe</p>
                                                                    <div class="ec-t-rate">
                                                                        @for ($i = 0; $i < 4; $i++)
                                                                            <i class="mdi mdi-star is-rated"></i>
                                                                        @endfor
                                                                        <i class="mdi mdi-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ec-t-review-bottom">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Add more review items as needed -->
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
</div>
@endforeach

 
     </div>
                        </div>






                   
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last"  >             
                           <div id="shop_sidebar" style="background-color: white;"><div class="inner-wrapper-sticky">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                           
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




     

        
    </section>

@endsection