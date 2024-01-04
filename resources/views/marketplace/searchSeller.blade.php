@extends('layouts.homeLayout')

@section('homecontent')
<!DOCTYPE html>
<html lang="en">

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

     <body>

<header>
    <!-- Ec Header Top Start -->
    <link id="ekka-css" href="assets/css/ekka copy.css" rel="stylesheet">

    <!-- Add your other header content here -->

    <!-- Ec Header Search End -->
</header>
<!-- Add the Product Details Modal -->

<section class="section ec-category-section section-space-p" id="categories">
    @foreach($seller as $seller)

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">{{$seller->name}}</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
         
       

                    </div>
                </div>
            </div>

            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav" role="tablist">
                        <li class="cat-item"><a    class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1" aria-selected="true" role="tab">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_1.png" alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_1_1.png" alt="cat-icon"></div>
                                <div class="cat-desc"><span>Clothes</span><span>440 Products</span></div>
                            </a>
                            <form id="ratingFormSeller" method="POST" action="{{ route('rateSeller') }}">
    @csrf

    <div class="rate">
    <input type="radio" id="star5" name="rateSeller" value="5" {{ $seller->rating == 5 ? 'checked' : '' }} />
    <label for="star5" title="text">5 stars</label>

    <input type="radio" id="star4" name="rateSeller" value="4" {{ $seller->rating == 4 ? 'checked' : '' }} />
    <label for="star4" title="text">4 stars</label>

    <input type="radio" id="star3" name="rateSeller" value="3" {{ $seller->rating == 3 ? 'checked' : '' }} />
    <label for="star3" title="text">3 stars</label>

    <input type="radio" id="star2" name="rateSeller" value="2" {{ $seller->rating == 2 ? 'checked' : '' }} />
    <label for="star2" title="text">2 stars</label>

    <input type="radio" id="star1" name="rateSeller" value="1" {{ $seller->rating == 1 ? 'checked' : '' }} />
    <label for="star1" title="text">1 star</label>
    <input type="radio" id="star0" name="rateSeller" value="1" {{ $seller->rating == 0 ? 'checked' : '' }} />
    <label for="star1" title="text">0 star</label>
</div>

    <input type="hidden" name="id" value="{{ $seller->id }}">
</form>

<script>
    $(document).ready(function () {
        $('.rate input').on('click', function () {
            $('#ratingFormSeller').submit();
        });
    });
</script>
                        </li>
                   
                    </ul>
                 </div>
                <!-- Category Nav End -->
                <!--Category Tab Start -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade show active" id="tab-cat-1" role="tabpanel">
                            <div class="row">
                                <img src="assets/images/cat-banner/1.jpg" alt="">
                            </div>
                            <span class="panel-overlay">
                             <a   data-bs-toggle="modal" data-bs-target="#product{{ $seller->id }}" class="btn btn-outline-success details-btn" class="btn btn-primary">View All</a>
                        </div>
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade" id="tab-cat-2" role="tabpanel">
                            <div class="row">
                                <img src="assets/images/cat-banner/2.jpg" alt="">
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 2nd Category tab end -->
                        <!-- 3rd Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-3" role="tabpanel">
                            <div class="row">
                                <img src="assets/images/cat-banner/3.jpg" alt="">
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 3rd Category tab end -->
                        <!-- 4th Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-4" role="tabpanel">
                            <div class="row">
                                <img src="assets/images/cat-banner/4.jpg" alt="">
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 4th Category tab end -->
                    </div>
                    <!-- Category Tab End -->
                </div>
            </div>
        </div>
      


        @if(is_array($products) || is_object($products))
                                <!-- Product Content -->
                                @foreach($products as $product)
                                @if($product->seller_id == $seller->id)
        <div class="modal" id="productDetailModal{{ $product->id }}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px " >  
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 2000px; width: 2000%; height: 500%; max-height: 1000px;">

        <div class="modal-content" style="max-width: 2000px; width: 2000%;height: 500%; max-height: 1000px;">
            <div class="ec-content-wrapper" style="max-width: 2000px; width: 2000%;height: 500%; max-height: 1000px;">
                <div class="content">
                    <!-- Breadcrumb Section -->
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                             <h1>Product Detail </h1>
                            <p class="breadcrumbs">
                            <button onclick="$('#productDetailModal{{ $product->id }}').modal('hide');" class="w3-button w3-display-topright">&times;</button>

                                <span><a href="/return">Return</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Product
                            </p>
                        </div>
                        <div>
                            <a href="product-list.html" class="btn btn-primary">Edit</a>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Product Detail</h2>
                                </div>
                                <div class="card-body product-detail">
                                    <!-- Product Images -->
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="image-scroll-container">
                                                <!-- Image Loop -->
                                                @if(!empty($product->image_data) && json_decode($product->image_data) !== null)
                                                    @foreach (json_decode($product->image_data) as $image)
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
                                                    <h5 class="product-title">{{$product->name}}</h5>
                                                    <!-- Rating Stars -->
                                                    <p class="product-rate">
                                                        @for($i = 0; $i < 4; $i++)
                                                            <i class="mdi mdi-star is-rated"></i>
                                                        @endfor
                                                        <i class="mdi mdi-star"></i>
                                                    </p>

                                                    <!-- Product Description -->
                                                    <h6>Description :</h6>
                                                    @if(!empty($product->slug))
                                                        <p class="product-desc">{{ htmlspecialchars($product->slug) }}.</p>
                                                    @endif

                                                    <!-- Available Offers -->
                                                    <div class="ec-ofr">
                                                        <h6>Available offers</h6>
                                                        <ul>
                                                            <!-- Offers Loop -->
                                                            <li><b>Special Price :</b> Get extra 16% off (price inclusive of discount) <a href="#">T&amp;C</a></li>
                                                            <li><b>Bank Offer :</b> 10% off on XYZ Bank Cards, up to $12. On orders of $200 and above <a href="#">T&amp;C</a></li>
                                                            <!-- Add more offers as needed -->
                                                        </ul>
                                                    </div>
                                                    {{$product->name}}
                                                    <!-- Product Price -->
                                                    @if(!empty($product->price))
                                                        <p class="product-price">Price: {{$product->price}} DZD</p>
                                                    @endif

                                                    <!-- Product Size -->
                                                    <ul class="product-size">
                                                        @if(!empty($product->size) && is_array(json_decode($product->size)))
                                                            @foreach(json_decode($product->size) as $size)
                                                            <p class="product-price">Unity: <span>{{ $size }}</span></p>

                                                             @endforeach
                                                        @endif
                                                    </ul>
                                                    @if(!empty($product->stock))
                                                    <p class="product-price">Stock : {{$product->stock}}</p>

                                                             @endif
                                                    @if(!empty($product->purchased_number))
                                                    <p class="product-price">InOrder : {{$product->purchased_number}}</p>

                                        
                                                            @endif
                                                    <!-- Product Type -->

                                                    <!-- Product Color -->
                                                    <ul class="product-color">
                                                        @if(!empty($product->colors) && is_array(json_decode($product->colors)))
                                                            @foreach(json_decode($product->colors) as $colors)
                                                            <p class="product-price">Type: <span>{{ $colors }}</span></p>

                                                             @endforeach
                                                        @endif
                                                    </ul>

                                                    <!-- Product Stock and InOrder -->
                                                    <form id="ratingForm" method="POST" action="{{ route('rate') }}">
    @csrf

    <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" {{ $product->rating == 5 ? 'checked' : '' }} />
    <label for="star5" title="text">5 stars</label>

    <input type="radio" id="star4" name="rate" value="4" {{ $product->rating == 4 ? 'checked' : '' }} />
    <label for="star4" title="text">4 stars</label>

    <input type="radio" id="star3" name="rate" value="3" {{ $product->rating == 3 ? 'checked' : '' }} />
    <label for="star3" title="text">3 stars</label>

    <input type="radio" id="star2" name="rate" value="2" {{ $product->rating == 2 ? 'checked' : '' }} />
    <label for="star2" title="text">2 stars</label>

    <input type="radio" id="star1" name="rate" value="1" {{ $product->rating == 1 ? 'checked' : '' }} />
    <label for="star1" title="text">1 star</label>
   
    </div>
    <input type="hidden" name="id" value="{{ $product->id }}">
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

                                        <!-- Seller Information -->
                                        <div class="col-xl-3 col-lg-12 u-card">
                                            <div class="card card-default seller-card">
                                                <div class="card-body text-center">
                                                    <!-- Seller Details -->
                                                    <a href="javascript:0" class="text-secondary d-inline-block">
                                                        <!-- Seller Avatar -->
                                                        <div class="image mb-3">
                                                            <img src="assets/img/user/u-xl-4.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                                                        </div>
                                                        <!-- Seller Information -->
                                                        <h5 class="text-dark">{{$seller->name}}</h5>
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
                                                                <span>{{$seller->store}}</span>
                                                            </li>
                                                            <li class="d-flex mb-1">
                                                                <i class="mdi mdi-map mr-1"></i>
                                                                <span>{{$seller->address}}</span>
                                                            </li>
                                                            <li class="d-flex mb-1">
                                                                <i class="mdi mdi-email mr-1"></i>
                                                                <span>{{$seller->email}}</span>
                                                            </li>
                                                            <li class="d-flex">
                                                                <i class="mdi mdi-whatsapp mr-1"></i>
                                                                <span>{{$seller->phone_number}}</span>
                                                            </li>
                                                        </ul>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review Section -->
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
                                                <!-- Detail Tab Content -->
                                                <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
                                                    @if(!empty($product->full_detail))
                                                        <p>{{ $product->full_detail }}</p>
                                                    @endif
                                                    <!-- Features List -->
                                                    <ul class="features">
                                                        <li>Explore a variety of cake types, from simple classics to customizable masterpieces.</li>
                                                        <li>Indulge in our Downloadable/Digital Cake Collection and experience the magic of Virtual Cakes.</li>
                                                        <li>Effortlessly manage your cake inventory, even with Backordered specialties.</li>
                                                        <li>Savor the perfection of our cakes, crafted with precision and care, akin to the seamless beauty of flatlock seams.</li>
                                                    </ul>
                                                </div>

                                                <!-- Info Tab Content -->
                                                <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
                                                    <ul>
                                                        <li><span>Stock: </span> {{ $product->stock }}</li>
                                                        <!-- Size Loop -->
                                                        @if (!empty($product->size) && is_array(json_decode($product->size)))
                                                            @foreach (json_decode($product->size) as $size)
                                                                <li><span>Unity:</span> {{ $size }}</li>
                                                            @endforeach
                                                        @else
                                                            No valid sizes available.
                                                        @endif
                                                        <!-- Color Loop -->
                                                        @if (!empty($product->colors) && is_array(json_decode($product->colors)))
                                                            @foreach (json_decode($product->colors) as $colors)
                                                                <li><span>Type :</span> {{ $colors }}</li>
                                                            @endforeach
                                                        @endif
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

@endif
@endforeach
@endif















                 
        <div class="modal fade modal-add-contact" id="product{{ $seller->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px " >  
           <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 2000px; width: 2000%; height: 500%; max-height:1000px">  

        <div class="modal-content" style="max-width: 2000px; width: 2000%; " > 
            <div class="ec-content-wrapper" style="max-width: 2000px; width: 2000%;  "  >
   

 

            <div class="row" >
     
            @if(is_array($products) || is_object($products))
                                <!-- Product Content -->
                                @foreach($products as $product)
                                @if($product->seller_id == $seller->id)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                <img src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="Product Image" style="max-width: 100%; height: auto;">
                                                 </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="/storeView/{{$seller->id}}" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="product-left-sidebar.html">{{$product->product_name}}  </a></h5>
                                            <div class="ec-pro-rating">
                                            @for ($i = 0; $i < $product->rating; $i++)
    <i class="ecicon eci-star fill"></i>
@endfor

                                               </div>
                                            <span class="ec-price">
    <span class="new-price">{{ $product->price }}</span>

 

 
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                <a
        data-bs-toggle="modal"
        data-bs-target="#productDetailModal{{ $product->id }}"
        class="btn btn-outline-success details-btn"
    >
        Details
    </a>

                                                </div>
                           
                                            </div>
                                        </div>
                                    </div>
                                </div>

  
 
                                @endif

                                @endforeach
                                
                                @endif
                            </div>
                            
                        </div>
                     </div>
                  </div> 
               </div>

<!-- jQuery -->

 


@endforeach



</section>
 

</body>

</html>         
@endsection



