@extends('layouts.homeLayout')

@section('homecontent')
<header  >
     
     </header>



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
                            </a></li>
                   
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
      



















                 
        <div class="modal fade modal-add-contact" id="product{{ $seller->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 2200px; width: 2000%; hight: 500%; max-hight:1000px " >  
           <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 2000px; width: 2000%; height: 500%; max-height:1000px">  

        <div class="modal-content" style="max-width: 2000px; width: 2000%;  > 
            <div class="ec-content-wrapper" style="max-width: 2000px; width: 2000%;  "  >
   

 

            <div class="row" >
     
            @if(is_array($products) || is_object($products))
                                <!-- Product Content -->
                                @foreach($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product">
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
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck
                                                    T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                                <a   data-bs-toggle="modal" data-bs-target="#productDetails{{ $product-> id }}" class="btn btn-outline-success details-btn">Details</a>
                                            </span>

                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg" data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg" data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





















                                <div class="modal fade modal-add-contact show" id="productDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block;" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px; width: 90%;">
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
                                    <h2>&nbsp; Product Detail</h2>
                                </div>
                                <div class="card-body product-detail">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="image-scroll-container">
                                                                                                                                                            <img src="http://localhost/images/products/1700762824.jpg" alt="Product Image" style="max-width: 100%; height: auto;">
                                                                                                                                                </div> <!-- Add more images as needed -->
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
                                                                                                            <p class="product-desc">hthtt.</p>
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
                                                                                                            <p class="product-price">Price: 252.00 DZD</p>
                                                                                                        <ul class="product-size">
                                                                                                            </ul>
                                                    <p class="product-price">Type: </p>
                                                    <ul class="product-color">
                                                                                                            </ul>
                                                    <div class="product-stock">
                                                        <div class="stock">
                                                            <p class="title">Stock</p>
                                                                                                                    </div>
                                                        <div class="stock">
                                                            <p class="title">InOrder</p>
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
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab" data-bs-target="#productdetail" href="#productdetail" role="tab" aria-selected="true">
                                                        <i class="mdi mdi-library-books mr-1"></i> Detail</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="product-information-tab" data-bs-toggle="tab" data-bs-target="#productinformation" href="#productinformation" role="tab" aria-selected="false" tabindex="-1">
                                                        <i class="mdi mdi-information mr-1"></i>Info</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab" data-bs-target="#productreviews" href="#productreviews" role="tab" aria-selected="false" tabindex="-1">
                                                        <i class="mdi mdi-star-half mr-1"></i> Reviews</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent2">
                                                <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel" aria-labelledby="#product-detail-tab">
                                                                                                        <ul class="features">
                                                        <li>Explore a variety of cake types, from simple classics to customizable masterpieces.</li>
                                                        <li>Indulge in our Downloadable/Digital Cake Collection and experience the magic of Virtual Cakes.</li>
                                                        <li>Effortlessly manage your cake inventory, even with Backordered specialties.</li>
                                                        <li>Savor the perfection of our cakes, crafted with precision and care, akin to the seamless beauty of flatlock seams.</li>
                                                    </ul>
                                                </div>
                                                <p class="product-price">Unity: </p>
                                                <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel" aria-labelledby="#product-information-tab">
                                                    <ul>
                                                        <li><span>Stock: </span> 0</li>
                                                            // Handle the case when $products-&gt;size is null or not a valid array
    No valid sizes available.
                                                                                                             </ul>
                                                </div>
                                                <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel" aria-labelledby="#product-reviews-tab">
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
</div>
                                @endforeach
                                
                                @endif
                            </div>
                            
                        </div>
                     </div>
                  </div> 
               </div>







@endforeach




</section>

 


               
@endsection



