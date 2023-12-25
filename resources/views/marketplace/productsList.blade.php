@extends('marketplace.searchSeller')

@section('homecontent')
 

                 
 



<html lang="en" class=" sizes customelements history pointerevents postmessage postmessage-structuredclones webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers sizes customelements history pointerevents postmessage postmessage-structuredclones webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox picture srcset webworkers"><!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 18:25:15 GMT --><head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template + Admin Dashboard.</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops">
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="marketplace/assets/images/favicon/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="marketplace/assets/images/favicon/favicon.png">
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png">

    <!-- css Icon Font -->
    <link rel="stylesheet" href="marketplace/assets/css/vendor/ecicons.min.css">

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="marketplace/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="marketplace/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="marketplace/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="marketplace/assets/css/plugins/countdownTimer.css">
    <link rel="stylesheet" href="marketplace/assets/css/plugins/slick.min.css">
    <link rel="stylesheet" href="marketplace/assets/css/plugins/bootstrap.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="marketplace/assets/css/demo1.css">
    <link rel="stylesheet" href="marketplace/assets/css/style.css">
    <link rel="stylesheet" href="marketplace/assets/css/responsive.css">

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="marketplace/assets/css/backgrounds/bg-4.css">







 

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet">

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet">

	<!-- Ekka CSS -->
 
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
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script type="text/javascript" charset="UTF-8" src="../../../../../www.gstatic.com/charts/%25%7bversion%7d/loader.html"></script> 














<style id="infiniteslide1701803717203d00_style">@keyframes infiniteslide1701803717203d00{from {transform:translate3d(0,0,0);}to {transform:translate3d(-1750px,0,0);}}</style><style id="infiniteslide170283156642518d4_style">@keyframes infiniteslide170283156642518d4{from {transform:translate3d(0,0,0);}to {transform:translate3d(-1750px,0,0);}}</style></head>

<body>
 

            <div class="row" >
     
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
                                                <a   data-bs-toggle="modal" data-bs-target="#productDetail{{ $product->id }}" class="btn btn-outline-success details-btn">Details</a>
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



 


 





 

                                @endforeach
                                
                    
                  </div> 
 </body>
 </html>
               
@endsection



