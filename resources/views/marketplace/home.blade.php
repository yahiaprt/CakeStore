@extends('layouts.homeLayout')

@section('homecontent')
<head><head>
	<title>Taste.it - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><link href="data:text/css,%3Ais(%5Bid*%3D'google_ads_iframe'%5D%2C%5Bid*%3D'taboola-'%5D%2C.taboolaHeight%2C.taboola-placeholder%2C%23credential_picker_container%2C%23credentials-picker-container%2C%23credential_picker_iframe%2C%5Bid*%3D'google-one-tap-iframe'%5D%2C%23google-one-tap-popup-container%2C.google-one-tap-modal-div%2C%23amp_floatingAdDiv%2C%23ez-content-blocker-container)%20%7Bdisplay%3Anone!important%3Bmin-height%3A0!important%3Bheight%3A0!important%3B%7D" rel="stylesheet" type="text/css"><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/55/8/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/55/8/util.js"></script></head>
<style>
    .modal-backdrop {
    background-color: rgba(0, 0, 0, 0.7) !important; /* Set the opacity as needed */    }
</style>

 
<style>
    /* Styles for the star rating */
    .rating {
      display: flex;
      flex-direction: row-reverse; /* Reverse the order for proper display */
    }

    .rating input {
      display: none; /* Hide the default radio buttons */
    }

    .rating label {
      cursor: pointer;
      font-size: 2em;
      color: #888;
      margin: 0 0.1em;
    }

    .rating label:before {
      content: '\2606'; /* Unicode character for an unfilled star */
      display: block;
    }

    .rating input:checked ~ label:before {
      content: '\2605'; /* Unicode character for a filled star */
      color: #f39c12; /* Change color of stars on hover */
    }
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
<style>
    .btn.btn-outline-success.details-btn {
        text-align: left;
    }

    .add-to-cart {
        display: inline-block;
        /* Add any additional styles you may need */
    }
</style>
<style>
    .ec-pro-actions {
        margin-bottom: 10px; /* Adjust the bottom margin as needed */
    }

    .add-to-cart {
        font-size: 18px; /* Adjust the font size as needed */
    }
</style>
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
 
<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet">
<style>
    .category-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Adjust the gap between category items as needed */
}

.category-item {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    background-color: #f5f5f5;
}

.category-item h5 {
    margin: 0;
    color: #333;
}

    #productDetails.modal-add-contact .modal-dialog.modal-dialog-centered {
        max-width: 90% !important; /* Adjust the width as needed */
    }

    /* Add more styles as needed */
</style>



    </head>

<body>
    <div id="ec-overlay" style="display: none;">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Header start  -->
    
    <!-- Header End  -->
 

    <!-- Category Sidebar start -->
    <div class="ec-side-cat-overlay"></div>
    <div class="col-lg-3 category-sidebar fadeIn" data-animation="fadeIn" data-animated="true">
        <div class="cat-sidebar">
            <div class="cat-sidebar-box">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button><div class="ec-sidebar-res"><i class="ecicon eci-angle-down"></i></div></h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/dress-8.png" class="svg_img" alt="drink">Cothes</div>
                                    <ul style="display: block;" class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Shirt <span title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shorts &amp; jeans <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">jacket<span title="Available Stock">- 500</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">dress &amp; frock <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/shoes-8.png" class="svg_img" alt="drink">Footwear</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sports <span title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Formal <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Casual <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">safety shoes <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/jewelry-8.png" class="svg_img" alt="drink">jewelry</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Earrings <span title="Available Stock">- 50</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Couple Rings <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Necklace <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/perfume-8.png" class="svg_img" alt="drink">perfume</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Air
                                                    Freshener<span title="Available Stock">- 35 pack</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/cosmetics-8.png" class="svg_img" alt="drink">cosmetics</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shampoo<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunscreen<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">body
                                                    wash<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">makeup kit<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/glasses-8.png" class="svg_img" alt="drink">glasses</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunglasses <span title="Available Stock">- 20</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Lenses <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/bag-8.png" class="svg_img" alt="drink">bags</div>
                                    <ul class="ec-cat-sub-dropdown">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shopping bag <span title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Gym
                                                    backpack <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">purse <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">wallet <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Category Block -->
                </div>
            </div>
            <div class="ec-sidebar-slider-cat">
                <div class="ec-sb-slider-title">Best Sellers</div>
                <div class="ec-sb-pro-sl slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2900px; transform: translate3d(-1160px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 580px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/5.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Womens purse</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/6.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Baby toy doctor kit</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$45.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/7.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">teddy bear baby toy</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$35.00</span>
                                    <span class="new-price">$25.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/2.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Mens hoodies blue</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$13.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 580px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/1.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">baby fabric shoes</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$4.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/2.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Men's hoodies t-shirt</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$10.00</span>
                                    <span class="new-price">$7.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/3.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Girls t-shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$3.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/4.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">woolen hat for men</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 580px;"><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="0"><img src="assets/images/product-image/5.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="0">Womens purse</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="0"><img src="assets/images/product-image/6.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="0">Baby toy doctor kit</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$45.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="0"><img src="assets/images/product-image/7.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="0">teddy bear baby toy</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$35.00</span>
                                    <span class="new-price">$25.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="0"><img src="assets/images/product-image/2.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="0">Mens hoodies blue</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$13.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" style="width: 580px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/1.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">baby fabric shoes</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$4.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/2.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Men's hoodies t-shirt</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$10.00</span>
                                    <span class="new-price">$7.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/3.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Girls t-shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$3.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/4.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">woolen hat for men</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 580px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/5.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Womens purse</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/6.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Baby toy doctor kit</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$45.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/7.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">teddy bear baby toy</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$35.00</span>
                                    <span class="new-price">$25.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div><div><div style="width: 100%; display: inline-block;">
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img" tabindex="-1"><img src="assets/images/product-image/2.jpg" alt="product"></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Mens hoodies blue</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$13.00</span>
                                </span>
                            </div>
                        </div>
                    </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
            </div>
        </div>
    </div>



    
<!-- Main Food Slider Start -->
<div class="sticky-header-next-sec ec-main-slider section section-space-pb">
    <div class="ec-slider swiper-container main-slider-nav main-slider-dot swiper-container-initialized swiper-container-horizontal">
        <!-- Main slider -->
        <div class="swiper-wrapper" style="transition: all 2000ms ease 0s; transform: translate3d(-15360px, 0px, 0px);" id="swiper-wrapper-4e6e12ed1ee66fb1" aria-live="off">
            
            <!-- Viennoiserie Delight Slide -->
            <div class="ec-slide-item swiper-slide d-flex ec-slide-1 swiper-slide-duplicate-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 2560px;" role="group" aria-label="1 / 13">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">Viennoiserie Delight</h1>
                                <h2 class="ec-slide-stitle">Elegant Pastries</h2>
                                <p style="color: white;">Experience the delicate layers and buttery goodness of our viennoiserie selection. Indulge in a world of refined pastries crafted with precision and care.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pâtisserie Elegance Slide -->
            <div class="ec-slide-item swiper-slide d-flex ec-slide-2 swiper-slide-duplicate-prev swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 2560px;" role="group" aria-label="2 / 13">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">Pâtisserie Elegance</h1>
                                <h2 class="ec-slide-stitle">Sweet Indulgence</h2>
                                <p style="color: white;">Indulge in the exquisite world of pâtisserie elegance. Our artisanal pastries are a symphony of flavors and textures, creating a truly unforgettable experience.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Petit Four Extravaganza Slide -->
            <div class="ec-slide-item swiper-slide d-flex ec-slide-4 swiper-slide-duplicate-prev swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 2560px;" role="group" aria-label="4 / 13">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">Petit Four Extravaganza</h1>
                                <h2 class="ec-slide-stitle">Mini Delights</h2>
                                <p style="color: white;">Indulge in the art of petite sweetness with our petit four extravaganza. These mini delights pack a punch of flavor in every bite, perfect for your refined taste.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mini Pizza Feast Slide -->
            <div class="ec-slide-item swiper-slide d-flex ec-slide-33 swiper-slide-duplicate-prev swiper-slide-duplicate-next" data-swiper-slide-index="3" style="width: 2560px;" role="group" aria-label="3 / 13">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                            <h1 class="ec-slide-title">Mini Pizza Feast</h1>
                                <h2 class="ec-slide-stitle">Tiny Pizzeria</h2>
                                <p style="color: white;">Savor the goodness of our mini pizza feast. Each bite is a burst of flavors, offering a delightful experience in every tiny slice. Perfect for pizza lovers of all sizes!</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

        

            <!-- Bourek Bliss Slide -->
            <div class="ec-slide-item swiper-slide d-flex ec-slide-5 swiper-slide-duplicate-prev swiper-slide-duplicate-next" data-swiper-slide-index="5" style="width: 2560px;" role="group" aria-label="5 / 13">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">Bourek Bliss</h1>
                                <h2 class="ec-slide-stitle">Savory Delicacy</h2>
                                <p style="color: white;">Delight in the savory layers of our Bourek bliss. Our perfectly crafted pastries filled with flavorful ingredients are a taste of culinary excellence.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper Pagination and Navigation -->
        <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets">
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
        </div>

        <div class="swiper-buttons">
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4e6e12ed1ee66fb1"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4e6e12ed1ee66fb1"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>
<!-- Main Food Slider End -->





<section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">⭐ Our Top Products ⭐</h2>
                        <h2 class="ec-title">⭐ Our Top Products ⭐</h2>
                     </div>
                </div>

              
            </div>


           
                    <div class="tab-content">





<div class="tab-pane fade show active" id="tab-pro-for-all" role="tabpanel">
                            <div class="row">
                                <!-- Product Content -->




 
@foreach($products as $products)
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content" >
    <div class="ec-product-inner" style="background-color: white;">
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
                                            <style>
        .star {
            font-size: 2em; /* Adjust the size as needed */
            transform: rotate(45deg); /* Rotate the star to make it sharper */
        }
    </style> 
        <p> <span class="star"> &#x2B50;</span><span class="star"> &#x2B50;</span><span class="star"> &#x2B50;</span><span class="star"> &#x2B50;</span><span class="star"> &#x2B50;</span></p>                            
                                             <div class="ec-pro-list-desc">{{$products->full_detail}}.</div>
                                            <span class="ec-price">
                                                <span class="new-price">DZD {{$products->price}}</span>
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
            <a style="font-size: 20px;">
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


              
                                <div class="modal fade modal-add-contact" id="productDetailModal{{ $products->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="max-width: 3000px; width: 3000%; hight: 500%; max-hight:1000px  position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" >  
           <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 2000px; width: 2000%; height: 500%; max-height:1300px">  

        <div class="modal-content" style="max-width: 2000px; width: 2000%;  height: 500%; max-height:1300px">  
            <div class="ec-content-wrapper" style="max-width: 1950px; width: 2000%;  height: 500%; max-height:1300px">  
   


                 <div class="content">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                                  <button onclick="$('#productDetailModal{{ $products->id }}').modal('hide');" class="btn btn-primary" style="font-size: 30px; display: flex; align-items: center; justify-content: center;">&#8592;</button>

                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default"style="background-color: #f5f0e1;">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Product Detail</h2>
                                </div>
                                <div class="card-body product-detail">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6"style="background-color: white;">
                                            


                                        
                                            <div class="image-scroll-container">
                                                @if(!empty($products->image_data) && json_decode($products->image_data) !== null)
                                                    @foreach (json_decode($products->image_data) as $image)
                                                        <img src="{{ asset('images/products/' . $image) }}" alt="Product Image" style="max-width: 100%; height: auto;">
                                                    @endforeach
                                                @endif
                                            </div> <!-- Add more images as needed -->
                                            
                                        </div>
                                        <div class="col-xl-5 col-lg-6">
                                            <div class="row product-overview">
                                                <div class="col-12">
                                                    <h5 class="product-title">{{ $products->products_name }}</h5>
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
                                                    <div class="ec-ofr">
                                                        <h6>Available offers</h6>
                                                        <ul>
                                                        <li><b>Slug :</b> {{$products->slug}} <a href="#">T&amp;C</a></li>
                                                            <li><b>Bank Offer :</b> 10% off on BaridiMob paiments, up to DZD 120. On orders of DZD 2000 and above <a href="#">T&amp;C</a></li>
                                                            <!-- Add more offers as needed -->
                                                        </ul>
                                                    </div>
                                                    @if(!empty($products->image_data) && json_decode($products->image_data) !== null)
                                                        <p class="product-price">Price: {{$products -> price}} DZD</p>
                                                    @endif
                                                   
                                              
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
                                    <div class="row review-rating mt-4">
                                        <div class="col-12">
                                            <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                                               
                                          
                                                <li class="nav-item">
                                                    <a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab" data-bs-target="#productreviews" href="#productreviews" role="tab" aria-selected="false">
                                                        <i class="mdi mdi-star-half mr-1"></i> Reviews</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent2">
                                                <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
                                                    @if(!empty($products->full_detail) && json_decode($products->full_detail) !== null)
                                                        <p>{{ $products->full_detail  }}</p>
                                                    @endif
                                                    <ul class="features">
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
                                                   
                                                     
                                                    <p>  Description :  {{$products->full_detail}}.</p >

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
</div>

  

@endforeach


 
                            </div>
                        </div>

                        </div>
                        </div>
</section>




































<br>
<br>
<br>




<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <br>
 					<h2 class="mb-4">⭐ Best Artisants ⭐</h2>
				</div>
			</div>

			<div class="row">


            @foreach($seller as $seller)
            
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry">
                    <style>
        .star {
            font-size: 2em; /* Adjust the size as needed */
            transform: rotate(45deg); /* Rotate the star to make it sharper */
        }
    </style>
                    <div class="row">


@if ($seller && $seller->store_image)
         <img src="{{ asset('images/products/' . $seller->store_image) }}" style="max-width: 100%; max-height: 300px;" alt="">
    @else
  
        <!-- Add a default image or handle the case where no image is available -->
        <img src="assets/images/cat-banner/1.jpg"style="max-width: 100%; max-height: 300px;"  alt="">
    @endif
</div>
<a href="#" class="float-left read btn btn-primary" style="font-size: 18px; font-weight: bold; text-decoration: none; color: #fff;">open at {{$seller-> opening_time}}  closed at {{$seller-> closing_time}}</a>

<p> <span class="star"> ⭐</span><span class="star"> ⭐</span><span class="star"> ⭐</span><span class="star"> ⭐</span><span class="star"> ⭐</span></p>


						<div class="text px-4 pt-3 pb-4">
							
							<h3 class="heading"><a href="#">{{$seller->store_name}}</a></h3>
 <div class="meta">
								<div><h4 href="#">{{$seller->name}}</h4></div>
								<div><h6 href="#">{{$seller->description}}</h6></div>
							</div>

							<p class="clearfix">
                                <br>
                                </a>
 							</p>
						</div>
					</div>
				</div>
                
@endforeach


		 
			</div>
		</div>
	</section>











<section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Discover More</h2>
                        <h2 class="ec-title">Discover More</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                </div>
            </div>
</div>
</section>















 
<html lang="en-US"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<script type="text/javascript" async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PW78FQ8"></script><script type="text/javascript">

	var isInIFrame = ( window.self !== window.top ) ? true : false;

	if(! isInIFrame ) {
		var jsData = ["showcase-cta","https:\/\/websitedemos.net\/pizzeria-04\/wp-content\/plugins\/astra-sites-server\/admin\/showcase-cta\/switcher\/dist\/style-main.css?ver=308d53dc52d1fcf8ca1e"];
		var style = document.createElement('link');
		style.setAttribute('id', jsData[0]);
		style.setAttribute('rel', 'stylesheet');
		style.setAttribute('type', 'text/css');
		style.setAttribute('media', 'all');
		style.setAttribute('href', jsData[1]);

		document.head.appendChild(style);
	}
	</script><link id="showcase-cta" rel="stylesheet" type="text/css" media="all" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/admin/showcase-cta/switcher/dist/style-main.css?ver=308d53dc52d1fcf8ca1e">
<script type="text/javascript">

	var isInIFrame = ( window.self !== window.top ) ? true : false;

	if(! isInIFrame ) {
		var jsData = ["showcase-cta-google-fonts","\/\/fonts.googleapis.com\/css?family=DM%20Sans%3A400%2C500%2C700&subset=latin%2Clatin-ext"];
		var style = document.createElement('link');
		style.setAttribute('id', jsData[0]);
		style.setAttribute('rel', 'stylesheet');
		style.setAttribute('type', 'text/css');
		style.setAttribute('media', 'all');
		style.setAttribute('href', jsData[1]);

		document.head.appendChild(style);
	}
	</script><link id="showcase-cta-google-fonts" rel="stylesheet" type="text/css" media="all" href="//fonts.googleapis.com/css?family=DM%20Sans%3A400%2C500%2C700&amp;subset=latin%2Clatin-ext">
<meta name="robots" content="noindex, nofollow">

<title>Home - The Pizzeria</title>
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Home - The Pizzeria">
<meta property="og:description" content="Authentic Italian Pizzeria Et praesent nulla urna consequat dui arcu cursus diam fringilla libero risus, aliquam diam, aliquam ullamcorper urna pulvinar velit suspendisse aliquam lacus sollicitudin mauris. Book a Table Takeaway Fresh Ingredients Risus egestas felis, purus ultricies tortor feugiat aliquam euismod senectus sed amet felis viverra mi bibendum. Handmade Mozarella Feugiat neque, rhoncus suspendisse … Home Read More »">
<meta property="og:url" content="https://websitedemos.net/pizzeria-04/">
<meta property="og:site_name" content="The Pizzeria">
<meta property="article:modified_time" content="2024-01-11T05:19:11+00:00">
<meta property="og:image" content="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://websitedemos.net/pizzeria-04/","url":"https://websitedemos.net/pizzeria-04/","name":"Home - The Pizzeria","isPartOf":{"@id":"https://websitedemos.net/pizzeria-04/#website"},"about":{"@id":"https://websitedemos.net/pizzeria-04/#organization"},"primaryImageOfPage":{"@id":"https://websitedemos.net/pizzeria-04/#primaryimage"},"image":{"@id":"https://websitedemos.net/pizzeria-04/#primaryimage"},"thumbnailUrl":"https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png","datePublished":"2021-03-23T04:45:18+00:00","dateModified":"2024-01-11T05:19:11+00:00","breadcrumb":{"@id":"https://websitedemos.net/pizzeria-04/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://websitedemos.net/pizzeria-04/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://websitedemos.net/pizzeria-04/#primaryimage","url":"https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png","contentUrl":"https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png","width":475,"height":457},{"@type":"BreadcrumbList","@id":"https://websitedemos.net/pizzeria-04/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://websitedemos.net/pizzeria-04/#website","url":"https://websitedemos.net/pizzeria-04/","name":"The Pizzeria","description":"A smile in every slice","publisher":{"@id":"https://websitedemos.net/pizzeria-04/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://websitedemos.net/pizzeria-04/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://websitedemos.net/pizzeria-04/#organization","name":"The Pizzeria","url":"https://websitedemos.net/pizzeria-04/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://websitedemos.net/pizzeria-04/#/schema/logo/image/","url":"https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-site-logo.svg","contentUrl":"https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-site-logo.svg","width":124,"height":32,"caption":"The Pizzeria"},"image":{"@id":"https://websitedemos.net/pizzeria-04/#/schema/logo/image/"}}]}</script>

<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="alternate" type="application/rss+xml" title="The Pizzeria » Feed" href="https://websitedemos.net/pizzeria-04/feed/">
<link rel="alternate" type="application/rss+xml" title="The Pizzeria » Comments Feed" href="https://websitedemos.net/pizzeria-04/comments/feed/">
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"wpemoji":"https:\/\/websitedemos.net\/pizzeria-04\/wp-includes\/js\/wp-emoji.js?ver=6.4.2","twemoji":"https:\/\/websitedemos.net\/pizzeria-04\/wp-includes\/js\/twemoji.js?ver=6.4.2"}};
/**
 * @output wp-includes/js/wp-emoji-loader.js
 */

/**
 * Emoji Settings as exported in PHP via _print_emoji_detection_script().
 * @typedef WPEmojiSettings
 * @type {object}
 * @property {?object} source
 * @property {?string} source.concatemoji
 * @property {?string} source.twemoji
 * @property {?string} source.wpemoji
 * @property {?boolean} DOMReady
 * @property {?Function} readyCallback
 */

/**
 * Support tests.
 * @typedef SupportTests
 * @type {object}
 * @property {?boolean} flag
 * @property {?boolean} emoji
 */

/**
 * IIFE to detect emoji support and load Twemoji if needed.
 *
 * @param {Window} window
 * @param {Document} document
 * @param {WPEmojiSettings} settings
 */
( function wpEmojiLoader( window, document, settings ) {
	if ( typeof Promise === 'undefined' ) {
		return;
	}

	var sessionStorageKey = 'wpEmojiSettingsSupports';
	var tests = [ 'flag', 'emoji' ];

	/**
	 * Checks whether the browser supports offloading to a Worker.
	 *
	 * @since 6.3.0
	 *
	 * @private
	 *
	 * @returns {boolean}
	 */
	function supportsWorkerOffloading() {
		return (
			typeof Worker !== 'undefined' &&
			typeof OffscreenCanvas !== 'undefined' &&
			typeof URL !== 'undefined' &&
			URL.createObjectURL &&
			typeof Blob !== 'undefined'
		);
	}

	/**
	 * @typedef SessionSupportTests
	 * @type {object}
	 * @property {number} timestamp
	 * @property {SupportTests} supportTests
	 */

	/**
	 * Get support tests from session.
	 *
	 * @since 6.3.0
	 *
	 * @private
	 *
	 * @returns {?SupportTests} Support tests, or null if not set or older than 1 week.
	 */
	function getSessionSupportTests() {
		try {
			/** @type {SessionSupportTests} */
			var item = JSON.parse(
				sessionStorage.getItem( sessionStorageKey )
			);
			if (
				typeof item === 'object' &&
				typeof item.timestamp === 'number' &&
				new Date().valueOf() < item.timestamp + 604800 && // Note: Number is a week in seconds.
				typeof item.supportTests === 'object'
			) {
				return item.supportTests;
			}
		} catch ( e ) {}
		return null;
	}

	/**
	 * Persist the supports in session storage.
	 *
	 * @since 6.3.0
	 *
	 * @private
	 *
	 * @param {SupportTests} supportTests Support tests.
	 */
	function setSessionSupportTests( supportTests ) {
		try {
			/** @type {SessionSupportTests} */
			var item = {
				supportTests: supportTests,
				timestamp: new Date().valueOf()
			};

			sessionStorage.setItem(
				sessionStorageKey,
				JSON.stringify( item )
			);
		} catch ( e ) {}
	}

	/**
	 * Checks if two sets of Emoji characters render the same visually.
	 *
	 * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
	 * scope. Everything must be passed by parameters.
	 *
	 * @since 4.9.0
	 *
	 * @private
	 *
	 * @param {CanvasRenderingContext2D} context 2D Context.
	 * @param {string} set1 Set of Emoji to test.
	 * @param {string} set2 Set of Emoji to test.
	 *
	 * @return {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( context, set1, set2 ) {
		// Cleanup from previous test.
		context.clearRect( 0, 0, context.canvas.width, context.canvas.height );
		context.fillText( set1, 0, 0 );
		var rendered1 = new Uint32Array(
			context.getImageData(
				0,
				0,
				context.canvas.width,
				context.canvas.height
			).data
		);

		// Cleanup from previous test.
		context.clearRect( 0, 0, context.canvas.width, context.canvas.height );
		context.fillText( set2, 0, 0 );
		var rendered2 = new Uint32Array(
			context.getImageData(
				0,
				0,
				context.canvas.width,
				context.canvas.height
			).data
		);

		return rendered1.every( function ( rendered2Data, index ) {
			return rendered2Data === rendered2[ index ];
		} );
	}

	/**
	 * Determines if the browser properly renders Emoji that Twemoji can supplement.
	 *
	 * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
	 * scope. Everything must be passed by parameters.
	 *
	 * @since 4.2.0
	 *
	 * @private
	 *
	 * @param {CanvasRenderingContext2D} context 2D Context.
	 * @param {string} type Whether to test for support of "flag" or "emoji".
	 * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
	 *
	 * @return {boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( context, type, emojiSetsRenderIdentically ) {
		var isIdentical;

		switch ( type ) {
			case 'flag':
				/*
				 * Test for Transgender flag compatibility. Added in Unicode 13.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + transgender symbol).
				 */
				isIdentical = emojiSetsRenderIdentically(
					context,
					'\uD83C\uDFF3\uFE0F\u200D\u26A7\uFE0F', // as a zero-width joiner sequence
					'\uD83C\uDFF3\uFE0F\u200B\u26A7\uFE0F' // separated by a zero-width space
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					context,
					'\uD83C\uDDFA\uD83C\uDDF3', // as the sequence of two code points
					'\uD83C\uDDFA\u200B\uD83C\uDDF3' // as the two code points separated by a zero-width space
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather a five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					context,
					// as the flag sequence
					'\uD83C\uDFF4\uDB40\uDC67\uDB40\uDC62\uDB40\uDC65\uDB40\uDC6E\uDB40\uDC67\uDB40\uDC7F',
					// with each code point separated by a zero-width space
					'\uD83C\uDFF4\u200B\uDB40\uDC67\u200B\uDB40\uDC62\u200B\uDB40\uDC65\u200B\uDB40\uDC6E\u200B\uDB40\uDC67\u200B\uDB40\uDC7F'
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Why can't we be friends? Everyone can now shake hands in emoji, regardless of skin tone!
				 *
				 * To test for Emoji 14.0 support, try to render a new emoji: Handshake: Light Skin Tone, Dark Skin Tone.
				 *
				 * The Handshake: Light Skin Tone, Dark Skin Tone emoji is a ZWJ sequence combining 🫱 Rightwards Hand,
				 * 🏻 Light Skin Tone, a Zero Width Joiner, 🫲 Leftwards Hand, and 🏿 Dark Skin Tone.
				 *
				 * 0x1FAF1 == Rightwards Hand
				 * 0x1F3FB == Light Skin Tone
				 * 0x200D == Zero-Width Joiner (ZWJ) that links the code points for the new emoji or
				 * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
				 * 0x1FAF2 == Leftwards Hand
				 * 0x1F3FF == Dark Skin Tone.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
				isIdentical = emojiSetsRenderIdentically(
					context,
					'\uD83E\uDEF1\uD83C\uDFFB\u200D\uD83E\uDEF2\uD83C\uDFFF', // as the zero-width joiner sequence
					'\uD83E\uDEF1\uD83C\uDFFB\u200B\uD83E\uDEF2\uD83C\uDFFF' // separated by a zero-width space
				);

				return ! isIdentical;
		}

		return false;
	}

	/**
	 * Checks emoji support tests.
	 *
	 * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
	 * scope. Everything must be passed by parameters.
	 *
	 * @since 6.3.0
	 *
	 * @private
	 *
	 * @param {string[]} tests Tests.
	 * @param {Function} browserSupportsEmoji Reference to browserSupportsEmoji function, needed due to minification.
	 * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
	 *
	 * @return {SupportTests} Support tests.
	 */
	function testEmojiSupports( tests, browserSupportsEmoji, emojiSetsRenderIdentically ) {
		var canvas;
		if (
			typeof WorkerGlobalScope !== 'undefined' &&
			self instanceof WorkerGlobalScope
		) {
			canvas = new OffscreenCanvas( 300, 150 ); // Dimensions are default for HTMLCanvasElement.
		} else {
			canvas = document.createElement( 'canvas' );
		}

		var context = canvas.getContext( '2d', { willReadFrequently: true } );

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		var supports = {};
		tests.forEach( function ( test ) {
			supports[ test ] = browserSupportsEmoji( context, test, emojiSetsRenderIdentically );
		} );
		return supports;
	}

	/**
	 * Adds a script to the head of the document.
	 *
	 * @ignore
	 *
	 * @since 4.2.0
	 *
	 * @param {string} src The url where the script is located.
	 *
	 * @return {void}
	 */
	function addScript( src ) {
		var script = document.createElement( 'script' );
		script.src = src;
		script.defer = true;
		document.head.appendChild( script );
	}

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	// Create a promise for DOMContentLoaded since the worker logic may finish after the event has fired.
	var domReadyPromise = new Promise( function ( resolve ) {
		document.addEventListener( 'DOMContentLoaded', resolve, {
			once: true
		} );
	} );

	// Obtain the emoji support from the browser, asynchronously when possible.
	new Promise( function ( resolve ) {
		var supportTests = getSessionSupportTests();
		if ( supportTests ) {
			resolve( supportTests );
			return;
		}

		if ( supportsWorkerOffloading() ) {
			try {
				// Note that the functions are being passed as arguments due to minification.
				var workerScript =
					'postMessage(' +
					testEmojiSupports.toString() +
					'(' +
					[
						JSON.stringify( tests ),
						browserSupportsEmoji.toString(),
						emojiSetsRenderIdentically.toString()
					].join( ',' ) +
					'));';
				var blob = new Blob( [ workerScript ], {
					type: 'text/javascript'
				} );
				var worker = new Worker( URL.createObjectURL( blob ), { name: 'wpTestEmojiSupports' } );
				worker.onmessage = function ( event ) {
					supportTests = event.data;
					setSessionSupportTests( supportTests );
					worker.terminate();
					resolve( supportTests );
				};
				return;
			} catch ( e ) {}
		}

		supportTests = testEmojiSupports( tests, browserSupportsEmoji, emojiSetsRenderIdentically );
		setSessionSupportTests( supportTests );
		resolve( supportTests );
	} )
		// Once the browser emoji support has been obtained from the session, finalize the settings.
		.then( function ( supportTests ) {
			/*
			 * Tests the browser support for flag emojis and other emojis, and adjusts the
			 * support settings accordingly.
			 */
			for ( var test in supportTests ) {
				settings.supports[ test ] = supportTests[ test ];

				settings.supports.everything =
					settings.supports.everything && settings.supports[ test ];

				if ( 'flag' !== test ) {
					settings.supports.everythingExceptFlag =
						settings.supports.everythingExceptFlag &&
						settings.supports[ test ];
				}
			}

			settings.supports.everythingExceptFlag =
				settings.supports.everythingExceptFlag &&
				! settings.supports.flag;

			// Sets DOMReady to false and assigns a ready function to settings.
			settings.DOMReady = false;
			settings.readyCallback = function () {
				settings.DOMReady = true;
			};
		} )
		.then( function () {
			return domReadyPromise;
		} )
		.then( function () {
			// When the browser can not render everything we need to load a polyfill.
			if ( ! settings.supports.everything ) {
				settings.readyCallback();

				var src = settings.source || {};

				if ( src.concatemoji ) {
					addScript( src.concatemoji );
				} else if ( src.wpemoji && src.twemoji ) {
					addScript( src.twemoji );
					addScript( src.wpemoji );
				}
			}
		} );
} )( window, document, window._wpemojiSettings );
</script>
<link rel="stylesheet" id="astra-theme-css-css" href="https://websitedemos.net/pizzeria-04/wp-content/themes/astra/assets/css/minified/main.min.css?ver=4.5.2" media="all">
<style id="astra-theme-css-inline-css">
:root{--ast-container-default-xlg-padding:6.67em;--ast-container-default-lg-padding:5.67em;--ast-container-default-slg-padding:4.34em;--ast-container-default-md-padding:3.34em;--ast-container-default-sm-padding:6.67em;--ast-container-default-xs-padding:2.4em;--ast-container-default-xxs-padding:1.4em;--ast-code-block-background:#EEEEEE;--ast-comment-inputs-background:#FAFAFA;}html{font-size:106.25%;}a,.page-title{color:var(--ast-global-color-2);}a:hover,a:focus{color:var(--ast-global-color-1);}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:'Source Sans Pro',sans-serif;font-weight:400;font-size:17px;font-size:1rem;line-height:1.6em;}blockquote{color:var(--ast-global-color-3);}p,.entry-content p{margin-bottom:1em;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6,.site-title,.site-title a{font-family:'Oswald',sans-serif;font-weight:500;}.site-title{font-size:35px;font-size:2.0588235294118rem;display:none;}.site-header .site-description{font-size:15px;font-size:0.88235294117647rem;display:none;}.entry-title{font-size:30px;font-size:1.7647058823529rem;}h1,.entry-content h1{font-size:96px;font-size:5.6470588235294rem;font-family:'Oswald',sans-serif;line-height:1.4em;}h2,.entry-content h2{font-size:64px;font-size:3.7647058823529rem;font-family:'Oswald',sans-serif;line-height:1.25em;}h3,.entry-content h3{font-size:40px;font-size:2.3529411764706rem;font-family:'Oswald',sans-serif;line-height:1.2em;}h4,.entry-content h4{font-size:32px;font-size:1.8823529411765rem;line-height:1.2em;font-family:'Oswald',sans-serif;}h5,.entry-content h5{font-size:22px;font-size:1.2941176470588rem;line-height:1.2em;font-family:'Oswald',sans-serif;}h6,.entry-content h6{font-size:16px;font-size:0.94117647058824rem;line-height:1.25em;font-family:'Oswald',sans-serif;}::selection{background-color:var(--ast-global-color-0);color:#ffffff;}body,h1,.entry-title a,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-3);}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:var(--ast-global-color-2);background-color:var(--ast-global-color-2);}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:var(--ast-global-color-2);}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:var(--ast-global-color-2);background-color:var(--ast-global-color-2);box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:var(--ast-global-color-2);border-color:var(--ast-global-color-2);}.single .nav-links .nav-previous,.single .nav-links .nav-next{color:var(--ast-global-color-2);}.entry-meta,.entry-meta *{line-height:1.45;color:var(--ast-global-color-2);}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:var(--ast-global-color-1);}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:var(--ast-global-color-2);}.secondary .calendar_wrap #today,.ast-progress-val span{background:var(--ast-global-color-2);}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:var(--ast-global-color-2);border-color:var(--ast-global-color-2);}.calendar_wrap #today > a{color:#ffffff;}.page-links .page-link,.single .post-navigation a{color:var(--ast-global-color-2);}.ast-search-menu-icon .search-form button.search-submit{padding:0 4px;}.ast-search-menu-icon form.search-form{padding-right:0;}.ast-search-menu-icon.slide-search input.search-field{width:0;}.ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-form,.ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field:focus{border-color:var(--ast-global-color-0);transition:all 0.2s;}.search-form input.search-field:focus{outline:none;}.wp-block-latest-posts > li > a{color:var(--ast-global-color-2);}.widget-title,.widget .wp-block-heading{font-size:24px;font-size:1.4117647058824rem;color:var(--ast-global-color-3);}a:focus-visible,.ast-menu-toggle:focus-visible,.site .skip-link:focus-visible,.wp-block-loginout input:focus-visible,.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,.ast-header-navigation-arrow:focus-visible,.woocommerce .wc-proceed-to-checkout > .checkout-button:focus-visible,.woocommerce .woocommerce-MyAccount-navigation ul li a:focus-visible,.ast-orders-table__row .ast-orders-table__cell:focus-visible,.woocommerce .woocommerce-order-details .order-again > .button:focus-visible,.woocommerce .woocommerce-message a.button.wc-forward:focus-visible,.woocommerce #minus_qty:focus-visible,.woocommerce #plus_qty:focus-visible,a#ast-apply-coupon:focus-visible,.woocommerce .woocommerce-info a:focus-visible,.woocommerce .astra-shop-summary-wrap a:focus-visible,.woocommerce a.wc-forward:focus-visible,#ast-apply-coupon:focus-visible,.woocommerce-js .woocommerce-mini-cart-item a.remove:focus-visible{outline-style:dotted;outline-color:inherit;outline-width:thin;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="number"]:focus,textarea:focus,.wp-block-search__input:focus,[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,.ast-mobile-popup-drawer.active .menu-toggle-close:focus,.woocommerce-ordering select.orderby:focus,#ast-scroll-top:focus,#coupon_code:focus,.woocommerce-page #comment:focus,.woocommerce #reviews #respond input#submit:focus,.woocommerce a.add_to_cart_button:focus,.woocommerce .button.single_add_to_cart_button:focus,.woocommerce .woocommerce-cart-form button:focus,.woocommerce .woocommerce-cart-form__cart-item .quantity .qty:focus,.woocommerce .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper .woocommerce-input-wrapper > .input-text:focus,.woocommerce #order_comments:focus,.woocommerce #place_order:focus,.woocommerce .woocommerce-address-fields .woocommerce-address-fields__field-wrapper .woocommerce-input-wrapper > .input-text:focus,.woocommerce .woocommerce-MyAccount-content form button:focus,.woocommerce .woocommerce-MyAccount-content .woocommerce-EditAccountForm .woocommerce-form-row .woocommerce-Input.input-text:focus,.woocommerce .ast-woocommerce-container .woocommerce-pagination ul.page-numbers li a:focus,body #content .woocommerce form .form-row .select2-container--default .select2-selection--single:focus,#ast-coupon-code:focus,.woocommerce.woocommerce-js .quantity input[type=number]:focus,.woocommerce-js .woocommerce-mini-cart-item .quantity input[type=number]:focus,.woocommerce p#ast-coupon-trigger:focus{border-style:dotted;border-color:inherit;border-width:thin;}input{outline:none;}.ast-logo-title-inline .site-logo-img{padding-right:1em;}.site-logo-img img{ transition:all 0.2s linear;}body .ast-oembed-container *{position:absolute;top:0;width:100%;height:100%;left:0;}.ast-page-builder-template .hentry {margin: 0;}.ast-page-builder-template .site-content > .ast-container {max-width: 100%;padding: 0;}.ast-page-builder-template .site-content #primary {padding: 0;margin: 0;}.ast-page-builder-template .no-results {text-align: center;margin: 4em auto;}.ast-page-builder-template .ast-pagination {padding: 2em;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {margin-top: 0;}.ast-page-builder-template .entry-header.ast-header-without-markup {margin-top: 0;margin-bottom: 0;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {margin-bottom: 0;}.ast-page-builder-template.single .post-navigation {padding-bottom: 2em;}.ast-page-builder-template.single-post .site-content > .ast-container {max-width: 100%;}.ast-page-builder-template .entry-header {margin-top: 4em;margin-left: auto;margin-right: auto;padding-left: 20px;padding-right: 20px;}.single.ast-page-builder-template .entry-header {padding-left: 20px;padding-right: 20px;}.ast-page-builder-template .ast-archive-description {margin: 4em auto 0;padding-left: 20px;padding-right: 20px;}.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {margin-left: 0;margin-right: 0;}@media (max-width:921px){#ast-desktop-header{display:none;}}@media (min-width:922px){#ast-mobile-header{display:none;}}.wp-block-buttons.aligncenter{justify-content:center;}@media (max-width:921px){.ast-theme-transparent-header #primary,.ast-theme-transparent-header #secondary{padding:0;}}@media (max-width:921px){.ast-plain-container.ast-no-sidebar #primary{padding:0;}}.ast-plain-container.ast-no-sidebar #primary{margin-top:0;margin-bottom:0;}.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,.ast-outline-button{border-color:var(--ast-global-color-0);border-top-width:2px;border-right-width:2px;border-bottom-width:2px;border-left-width:2px;font-family:'Montserrat',sans-serif;font-weight:700;font-size:14px;font-size:0.82352941176471rem;line-height:1em;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}.wp-block-button.is-style-outline .wp-block-button__link:hover,.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,.wp-block-buttons .wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color):hover,.wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover,.ast-outline-button:hover,.ast-outline-button:focus{background-color:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.wp-block-button .wp-block-button__link.wp-element-button.is-style-outline:not(.has-background),.wp-block-button.is-style-outline>.wp-block-button__link.wp-element-button:not(.has-background){background-color:rgba(226,3,48,0);}@media (max-width:544px){.wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,.ast-outline-button{font-size:13px;font-size:0.76470588235294rem;}}.entry-content[ast-blocks-layout] > figure{margin-bottom:1em;}@media (max-width:921px){.ast-separate-container #primary,.ast-separate-container #secondary{padding:1.5em 0;}#primary,#secondary{padding:1.5em 0;margin:0;}.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 2.14em;}.ast-author-box img.avatar{margin:20px 0 0 0;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}.elementor-button-wrapper .elementor-button{border-style:solid;text-decoration:none;border-top-width:1px;border-right-width:1px;border-left-width:1px;border-bottom-width:1px;}body .elementor-button.elementor-size-sm,body .elementor-button.elementor-size-xs,body .elementor-button.elementor-size-md,body .elementor-button.elementor-size-lg,body .elementor-button.elementor-size-xl,body .elementor-button{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;padding-top:15px;padding-right:23px;padding-bottom:15px;padding-left:23px;}@media (max-width:921px){.elementor-button-wrapper .elementor-button.elementor-size-sm,.elementor-button-wrapper .elementor-button.elementor-size-xs,.elementor-button-wrapper .elementor-button.elementor-size-md,.elementor-button-wrapper .elementor-button.elementor-size-lg,.elementor-button-wrapper .elementor-button.elementor-size-xl,.elementor-button-wrapper .elementor-button{padding-top:14px;padding-right:21px;padding-bottom:14px;padding-left:21px;}}@media (max-width:544px){.elementor-button-wrapper .elementor-button.elementor-size-sm,.elementor-button-wrapper .elementor-button.elementor-size-xs,.elementor-button-wrapper .elementor-button.elementor-size-md,.elementor-button-wrapper .elementor-button.elementor-size-lg,.elementor-button-wrapper .elementor-button.elementor-size-xl,.elementor-button-wrapper .elementor-button{padding-top:13px;padding-right:19px;padding-bottom:13px;padding-left:19px;}}.elementor-button-wrapper .elementor-button{border-color:var(--ast-global-color-0);background-color:rgba(226,3,48,0);}.elementor-button-wrapper .elementor-button:hover,.elementor-button-wrapper .elementor-button:focus{color:var(--ast-global-color-4);background-color:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.wp-block-button .wp-block-button__link ,.elementor-button-wrapper .elementor-button,.elementor-button-wrapper .elementor-button:visited{color:var(--ast-global-color-0);}.elementor-button-wrapper .elementor-button{font-family:'Montserrat',sans-serif;font-weight:700;font-size:14px;font-size:0.82352941176471rem;line-height:1em;text-transform:uppercase;letter-spacing:2px;}body .elementor-button.elementor-size-sm,body .elementor-button.elementor-size-xs,body .elementor-button.elementor-size-md,body .elementor-button.elementor-size-lg,body .elementor-button.elementor-size-xl,body .elementor-button{font-size:14px;font-size:0.82352941176471rem;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:var(--ast-global-color-4);background-color:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.elementor-widget-heading h1.elementor-heading-title{line-height:1.4em;}.elementor-widget-heading h2.elementor-heading-title{line-height:1.25em;}.elementor-widget-heading h3.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h4.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h5.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h6.elementor-heading-title{line-height:1.25em;}.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{border-style:solid;border-top-width:1px;border-right-width:1px;border-left-width:1px;border-bottom-width:1px;border-color:var(--ast-global-color-0);background-color:rgba(226,3,48,0);color:var(--ast-global-color-0);font-family:'Montserrat',sans-serif;font-weight:700;line-height:1em;text-transform:uppercase;letter-spacing:2px;font-size:14px;font-size:0.82352941176471rem;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;padding-top:15px;padding-right:23px;padding-bottom:15px;padding-left:23px;}@media (max-width:921px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{padding-top:14px;padding-right:21px;padding-bottom:14px;padding-left:21px;}}@media (max-width:544px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{font-size:13px;font-size:0.76470588235294rem;padding-top:13px;padding-right:19px;padding-bottom:13px;padding-left:19px;}}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.woocommerce-js a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{border-style:solid;border-top-width:1px;border-right-width:1px;border-left-width:1px;border-bottom-width:1px;color:var(--ast-global-color-0);border-color:var(--ast-global-color-0);background-color:rgba(226,3,48,0);padding-top:15px;padding-right:23px;padding-bottom:15px;padding-left:23px;font-family:'Montserrat',sans-serif;font-weight:700;font-size:14px;font-size:0.82352941176471rem;line-height:1em;text-transform:uppercase;letter-spacing:2px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-bottom-left-radius:4px;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.ast-custom-button:hover .button:hover,.ast-custom-button:hover ,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,body .wp-block-file .wp-block-file__button:hover,body .wp-block-file .wp-block-file__button:focus,.woocommerce-js a.button:hover,.woocommerce button.button:hover,.woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce input.button.alt:hover,.woocommerce input.button:hover,.woocommerce button.button.alt.disabled:hover,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover,[CLASS*="wc-block"] button:hover,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping):hover,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout:hover,.woocommerce button.button.alt.disabled.wc-variation-selection-needed:hover{color:var(--ast-global-color-4);background-color:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}@media (max-width:921px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.woocommerce-js a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{padding-top:14px;padding-right:21px;padding-bottom:14px;padding-left:21px;}}@media (max-width:544px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.woocommerce-js a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{padding-top:13px;padding-right:19px;padding-bottom:13px;padding-left:19px;font-size:13px;font-size:0.76470588235294rem;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 2.14em;}.ast-separate-container .comment-respond{padding:2em 2.14em;}.ast-comment-meta{padding:0 1.8888em 1.3333em;}}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .comments-title,.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 1em;margin-bottom:1.5em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}.menu-toggle,button,.ast-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"]{font-size:13px;font-size:0.76470588235294rem;}}body,.ast-separate-container{background-color:var(--ast-global-color-4);;background-image:none;;}@media (max-width:921px){.widget-title{font-size:22px;font-size:1.375rem;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-size:16px;font-size:0.94117647058824rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:16px;font-size:0.94117647058824rem;}.site-title{display:none;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:72px;}h2,.entry-content h2{font-size:48px;}h3,.entry-content h3{font-size:32px;}h4,.entry-content h4{font-size:24px;font-size:1.4117647058824rem;}h5,.entry-content h5{font-size:20px;font-size:1.1764705882353rem;}h6,.entry-content h6{font-size:15px;font-size:0.88235294117647rem;}}@media (max-width:544px){.widget-title{font-size:21px;font-size:1.4rem;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-size:15px;font-size:0.88235294117647rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:15px;font-size:0.88235294117647rem;}.site-title{display:none;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:56px;}h2,.entry-content h2{font-size:40px;}h3,.entry-content h3{font-size:28px;}h4,.entry-content h4{font-size:22px;font-size:1.2941176470588rem;}h5,.entry-content h5{font-size:18px;font-size:1.0588235294118rem;}h6,.entry-content h6{font-size:14px;font-size:0.82352941176471rem;}}@media (max-width:544px){html{font-size:106.25%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@media (min-width:922px){.site-content .ast-container{display:flex;}}@media (max-width:921px){.site-content .ast-container{flex-direction:column;}}@media (min-width:922px){.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu{margin-left:-0px;}}.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element svg{fill:var(--ast-global-color-4);}.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg{fill:var(--ast-global-color-4);}.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element .social-item-label{color:var(--ast-global-color-4);}.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element:hover .social-item-label{color:var(--ast-global-color-4);}.ast-theme-transparent-header [CLASS*="ast-header-button-"] .ast-custom-button{color:var(--ast-global-color-4);}.ast-theme-transparent-header [CLASS*="ast-header-button-"] .ast-custom-button:hover{color:var(--ast-global-color-2);background:var(--ast-global-color-4);}.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg{fill:var(--ast-global-color-4);}.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu{color:var(--ast-global-color-4);}.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal{background:transparent;}.footer-widget-area[data-section^="section-fb-html-"] .ast-builder-html-element{text-align:center;}blockquote,cite {font-style: initial;}.wp-block-file {display: flex;align-items: center;flex-wrap: wrap;justify-content: space-between;}.wp-block-pullquote {border: none;}.wp-block-pullquote blockquote::before {content: "\201D";font-family: "Helvetica",sans-serif;display: flex;transform: rotate( 180deg );font-size: 6rem;font-style: normal;line-height: 1;font-weight: bold;align-items: center;justify-content: center;}.has-text-align-right > blockquote::before {justify-content: flex-start;}.has-text-align-left > blockquote::before {justify-content: flex-end;}figure.wp-block-pullquote.is-style-solid-color blockquote {max-width: 100%;text-align: inherit;}html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 3em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 3em;--wp--custom--ast-container-width: 1200px;--wp--custom--ast-content-width-size: 1200px;--wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));}.ast-narrow-container {--wp--custom--ast-content-width-size: 750px;--wp--custom--ast-wide-width-size: 750px;}@media(max-width: 921px) {html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 2em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 2em;}}@media(max-width: 544px) {html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 1.5em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 1.5em;}}.entry-content > .wp-block-group,.entry-content > .wp-block-cover,.entry-content > .wp-block-columns {padding-top: var(--wp--custom--ast-default-block-top-padding);padding-right: var(--wp--custom--ast-default-block-right-padding);padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);padding-left: var(--wp--custom--ast-default-block-left-padding);}.ast-plain-container.ast-no-sidebar .entry-content > .alignfull,.ast-page-builder-template .ast-no-sidebar .entry-content > .alignfull {margin-left: calc( -50vw + 50%);margin-right: calc( -50vw + 50%);max-width: 100vw;width: 100vw;}.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {margin-left: auto;margin-right: auto;width: 100%;}[ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {height: 0;}[ast-blocks-layout] .wp-block-separator {margin: 20px auto;}[ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {max-width: 100px;}[ast-blocks-layout] .wp-block-separator.has-background {padding: 0;}.entry-content[ast-blocks-layout] > * {max-width: var(--wp--custom--ast-content-width-size);margin-left: auto;margin-right: auto;}.entry-content[ast-blocks-layout] > .alignwide {max-width: var(--wp--custom--ast-wide-width-size);}.entry-content[ast-blocks-layout] .alignfull {max-width: none;}.entry-content .wp-block-columns {margin-bottom: 0;}blockquote {margin: 1.5em;border: none;}.wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {border-left: 5px solid rgba(0,0,0,0.05);}.has-text-align-right > blockquote,blockquote.has-text-align-right {border-right: 5px solid rgba(0,0,0,0.05);}.has-text-align-left > blockquote,blockquote.has-text-align-left {border-left: 5px solid rgba(0,0,0,0.05);}.wp-block-site-tagline,.wp-block-latest-posts .read-more {margin-top: 15px;}.wp-block-loginout p label {display: block;}.wp-block-loginout p:not(.login-remember):not(.login-submit) input {width: 100%;}.wp-block-loginout input:focus {border-color: transparent;}.wp-block-loginout input:focus {outline: thin dotted;}.entry-content .wp-block-media-text .wp-block-media-text__content {padding: 0 0 0 8%;}.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 0 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {color: var(--ast-global-color-5);}.wp-block-loginout .login-remember input {width: 1.1rem;height: 1.1rem;margin: 0 5px 4px 0;vertical-align: middle;}.wp-block-latest-posts > li > *:first-child,.wp-block-latest-posts:not(.is-grid) > li:first-child {margin-top: 0;}.wp-block-search__inside-wrapper .wp-block-search__input {padding: 0 10px;color: var(--ast-global-color-3);background: var(--ast-global-color-5);border-color: var(--ast-border-color);}.wp-block-latest-posts .read-more {margin-bottom: 1.5em;}.wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {padding-top: 5px;padding-bottom: 5px;}.wp-block-latest-posts .wp-block-latest-posts__post-date,.wp-block-latest-posts .wp-block-latest-posts__post-author {font-size: 1rem;}.wp-block-latest-posts > li > *,.wp-block-latest-posts:not(.is-grid) > li {margin-top: 12px;margin-bottom: 12px;}.ast-page-builder-template .entry-content[ast-blocks-layout] > *,.ast-page-builder-template .entry-content[ast-blocks-layout] > .alignfull > * {max-width: none;}.ast-page-builder-template .entry-content[ast-blocks-layout] > .alignwide > * {max-width: var(--wp--custom--ast-wide-width-size);}.ast-page-builder-template .entry-content[ast-blocks-layout] > .inherit-container-width > *,.ast-page-builder-template .entry-content[ast-blocks-layout] > * > *,.entry-content[ast-blocks-layout] > .wp-block-cover .wp-block-cover__inner-container {max-width: var(--wp--custom--ast-content-width-size);margin-left: auto;margin-right: auto;}.entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {width: auto;}@media(max-width: 1200px) {.ast-separate-container .entry-content > .alignfull,.ast-separate-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content .alignfull {margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding),20px)) ;margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding),20px));}}@media(min-width: 1201px) {.ast-separate-container .entry-content > .alignfull {margin-left: calc(-1 * var(--ast-container-default-xlg-padding) );margin-right: calc(-1 * var(--ast-container-default-xlg-padding) );}.ast-separate-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[ast-blocks-layout] > .alignwide {margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding) );margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding) );}}@media(min-width: 921px) {.ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)),.ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)) {max-width: calc( var(--wp--custom--ast-content-width-size) + 80px );}.ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,.ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {margin-left: -60px;margin-right: -60px;}}@media(min-width: 544px) {.entry-content > .alignleft {margin-right: 20px;}.entry-content > .alignright {margin-left: 20px;}}@media (max-width:544px){.wp-block-columns .wp-block-column:not(:last-child){margin-bottom:20px;}.wp-block-latest-posts{margin:0;}}@media( max-width: 600px ) {.entry-content .wp-block-media-text .wp-block-media-text__content,.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}}.ast-page-builder-template .entry-header {padding-left: 0;}.ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {max-width: 100%;margin-left: auto;margin-right: auto;}:root .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root{--ast-global-color-0:#e4032f;--ast-global-color-1:#fd0d3c;--ast-global-color-2:#121212;--ast-global-color-3:#4a4a4a;--ast-global-color-4:#f7f6f2;--ast-global-color-5:#ffffff;--ast-global-color-6:#fecc00;--ast-global-color-7:#000000;--ast-global-color-8:rgba(226,3,48,0.25);}:root {--ast-border-color : #dddddd;}.ast-single-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: #eeeeee;}.ast-single-entry-banner[data-banner-layout="layout-1"] {max-width: 1200px;background: inherit;padding: 20px 0;}.ast-single-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-single-entry-banner + .site-content .entry-header {margin-bottom: 0;}header.entry-header > *:not(:last-child){margin-bottom:10px;}.ast-archive-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: #eeeeee;}.ast-archive-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-archive-entry-banner[data-banner-layout="layout-1"] {background: inherit;padding: 20px 0;text-align: left;}body.archive .ast-archive-description{max-width:1200px;width:100%;text-align:left;padding-top:3em;padding-right:3em;padding-bottom:3em;padding-left:3em;}body.archive .ast-archive-description .ast-archive-title,body.archive .ast-archive-description .ast-archive-title *{font-size:40px;font-size:2.3529411764706rem;}body.archive .ast-archive-description > *:not(:last-child){margin-bottom:10px;}@media (max-width:921px){body.archive .ast-archive-description{text-align:left;}}@media (max-width:544px){body.archive .ast-archive-description{text-align:left;}}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg{width:150px;}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img{ max-width:150px;}@media (max-width:921px){.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg{width:120px;}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img{ max-width:120px;}}@media (max-width:543px){.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg{width:100px;}.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img{ max-width:100px;}}@media (min-width:921px){.ast-theme-transparent-header #masthead{position:absolute;left:0;right:0;}.ast-theme-transparent-header .main-header-bar,.ast-theme-transparent-header.ast-header-break-point .main-header-bar{background:none;}body.elementor-editor-active.ast-theme-transparent-header #masthead,.fl-builder-edit .ast-theme-transparent-header #masthead,body.vc_editor.ast-theme-transparent-header #masthead,body.brz-ed.ast-theme-transparent-header #masthead{z-index:0;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link{display:none;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo{display:inline-block;}.ast-theme-transparent-header .ast-above-header,.ast-theme-transparent-header .ast-above-header.ast-above-header-bar{background-image:none;background-color:transparent;}.ast-theme-transparent-header .ast-below-header{background-image:none;background-color:transparent;}}.ast-theme-transparent-header .ast-builder-menu .main-header-menu,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .menu-item > .menu-link,.ast-theme-transparent-header .ast-masthead-custom-menu-items,.ast-theme-transparent-header .ast-masthead-custom-menu-items a,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item > .ast-menu-toggle,.ast-theme-transparent-header .ast-above-header-navigation a,.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation a,.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation > ul.ast-above-header-menu > .menu-item-has-children:not(.current-menu-item) > .ast-menu-toggle,.ast-theme-transparent-header .ast-below-header-menu,.ast-theme-transparent-header .ast-below-header-menu a,.ast-header-break-point.ast-theme-transparent-header .ast-below-header-menu a,.ast-header-break-point.ast-theme-transparent-header .ast-below-header-menu,.ast-theme-transparent-header .main-header-menu .menu-link{color:rgba(255,255,255,0.8);}.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .ast-masthead-custom-menu-items a:hover,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor > .ast-menu-toggle,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor > .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item > .ast-menu-toggle,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .menu-item:hover > .menu-link,.ast-theme-transparent-header .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header .main-header-menu .current-menu-ancestor > .menu-link{color:var(--ast-global-color-4);}.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item .sub-menu .menu-link,.ast-theme-transparent-header .main-header-menu .menu-item .sub-menu .menu-link{background-color:transparent;}@media (max-width:921px){.ast-theme-transparent-header #masthead{position:absolute;left:0;right:0;}.ast-theme-transparent-header .main-header-bar,.ast-theme-transparent-header.ast-header-break-point .main-header-bar{background:none;}body.elementor-editor-active.ast-theme-transparent-header #masthead,.fl-builder-edit .ast-theme-transparent-header #masthead,body.vc_editor.ast-theme-transparent-header #masthead,body.brz-ed.ast-theme-transparent-header #masthead{z-index:0;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link{display:none;}.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo{display:inline-block;}.ast-theme-transparent-header .ast-above-header,.ast-theme-transparent-header .ast-above-header.ast-above-header-bar{background-image:none;background-color:transparent;}.ast-theme-transparent-header .ast-below-header{background-image:none;background-color:transparent;}}@media (max-width:921px){.ast-theme-transparent-header .ast-builder-menu .main-header-menu,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .menu-item > .menu-link,.ast-theme-transparent-header .ast-masthead-custom-menu-items,.ast-theme-transparent-header .ast-masthead-custom-menu-items a,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .menu-link{color:var(--ast-global-color-2);}.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .ast-masthead-custom-menu-items a:hover,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor > .menu-link,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item > .ast-menu-toggle,.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor > .ast-menu-toggle,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor > .menu-link,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item > .ast-menu-toggle,.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor > .ast-menu-toggle,.ast-theme-transparent-header .main-header-menu .menu-item:hover > .menu-link,.ast-theme-transparent-header .main-header-menu .current-menu-item > .menu-link,.ast-theme-transparent-header .main-header-menu .current-menu-ancestor > .menu-link{color:var(--ast-global-color-0);}}.ast-theme-transparent-header #ast-desktop-header > [CLASS*="-header-wrap"]:nth-last-child(2) > [CLASS*="-header-bar"],.ast-theme-transparent-header.ast-header-break-point #ast-mobile-header > [CLASS*="-header-wrap"]:nth-last-child(2) > [CLASS*="-header-bar"]{border-bottom-width:0;border-bottom-style:solid;}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;text-decoration:none;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-2);}@media (max-width:921px){.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}@media (max-width:544px){.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}.ast-builder-layout-element[data-section="title_tagline"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}[data-section*="section-hb-button-"] .menu-link{display:none;}.ast-header-button-1[data-section*="section-hb-button-"] .ast-builder-button-wrap .ast-custom-button{font-size:13px;font-size:0.76470588235294rem;}.ast-header-button-1 .ast-custom-button{border-color:var(--ast-global-color-4);}.ast-header-button-1 .ast-custom-button:hover{border-color:var(--ast-global-color-4);}.ast-header-button-1[data-section*="section-hb-button-"] .ast-builder-button-wrap .ast-custom-button{padding-top:13px;padding-bottom:13px;padding-left:23px;padding-right:23px;}.ast-header-button-1[data-section="section-hb-button-1"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"]{display:flex;}}.ast-builder-menu-1{font-family:inherit;font-weight:inherit;text-transform:uppercase;}.ast-builder-menu-1 .sub-menu,.ast-builder-menu-1 .inline-on-mobile .sub-menu{border-top-width:2px;border-bottom-width:0;border-right-width:0;border-left-width:0;border-color:var(--ast-global-color-0);border-style:solid;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu:before,.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper:before{height:calc( 0px + 5px );}.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link{border-style:none;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children > .ast-menu-toggle{right:-15px;}.ast-builder-menu-1 .menu-item-has-children > .menu-link:after{content:unset;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}.ast-builder-menu-1{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}.ast-social-stack-desktop .ast-builder-social-element,.ast-social-stack-tablet .ast-builder-social-element,.ast-social-stack-mobile .ast-builder-social-element {margin-top: 6px;margin-bottom: 6px;}.social-show-label-true .ast-builder-social-element {width: auto;padding: 0 0.4em;}[data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {text-align: center;}.ast-footer-social-wrap {width: 100%;}.ast-footer-social-wrap .ast-builder-social-element:first-child {margin-left: 0;}.ast-footer-social-wrap .ast-builder-social-element:last-child {margin-right: 0;}.ast-header-social-wrap .ast-builder-social-element:first-child {margin-left: 0;}.ast-header-social-wrap .ast-builder-social-element:last-child {margin-right: 0;}.ast-builder-social-element {line-height: 1;color: #3a3a3a;background: transparent;vertical-align: middle;transition: all 0.01s;margin-left: 6px;margin-right: 6px;justify-content: center;align-items: center;}.ast-builder-social-element {line-height: 1;color: #3a3a3a;background: transparent;vertical-align: middle;transition: all 0.01s;margin-left: 6px;margin-right: 6px;justify-content: center;align-items: center;}.ast-builder-social-element .social-item-label {padding-left: 6px;}.ast-header-social-1-wrap .ast-builder-social-element,.ast-header-social-1-wrap .social-show-label-true .ast-builder-social-element{margin-left:12px;margin-right:12px;}.ast-header-social-1-wrap .ast-builder-social-element svg{width:18px;height:18px;}.ast-builder-layout-element[data-section="section-hb-social-icons-1"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"]{display:flex;}}.site-below-footer-wrap{padding-top:20px;padding-bottom:20px;}.site-below-footer-wrap[data-section="section-below-footer-builder"]{background-color:;;background-image:none;;min-height:50px;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row{max-width:1200px;min-height:50px;margin-left:auto;margin-right:auto;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section{align-items:center;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-2-equal .ast-builder-grid-row{grid-template-columns:repeat( 2,1fr );}@media (max-width:921px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-2-equal .ast-builder-grid-row{grid-template-columns:repeat( 2,1fr );}}@media (max-width:544px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}@media (max-width:921px){.site-below-footer-wrap[data-section="section-below-footer-builder"]{padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}@media (max-width:921px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}.ast-builder-html-element img.alignnone{display:inline-block;}.ast-builder-html-element p:first-child{margin-top:0;}.ast-builder-html-element p:last-child{margin-bottom:0;}.ast-header-break-point .main-header-bar .ast-builder-html-element{line-height:1.85714285714286;}.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element{color:var(--ast-global-color-3);font-size:15px;font-size:0.88235294117647rem;}@media (max-width:921px){.footer-widget-area[data-section="section-fb-html-2"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}@media (max-width:544px){.footer-widget-area[data-section="section-fb-html-2"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.footer-widget-area[data-section="section-fb-html-2"]{font-size:15px;font-size:0.88235294117647rem;}.footer-widget-area[data-section="section-fb-html-2"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"]{display:block;}}.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element{text-align:right;}@media (max-width:921px){.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element{text-align:right;}}@media (max-width:544px){.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element{text-align:center;}}.ast-footer-copyright{text-align:left;}.ast-footer-copyright {color:var(--ast-global-color-3);}@media (max-width:921px){.ast-footer-copyright{text-align:left;}.ast-footer-copyright {margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}@media (max-width:544px){.ast-footer-copyright{text-align:center;}.ast-footer-copyright {margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.ast-footer-copyright {font-size:15px;font-size:0.88235294117647rem;}.ast-footer-copyright.ast-builder-layout-element{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}.ast-social-stack-desktop .ast-builder-social-element,.ast-social-stack-tablet .ast-builder-social-element,.ast-social-stack-mobile .ast-builder-social-element {margin-top: 6px;margin-bottom: 6px;}.social-show-label-true .ast-builder-social-element {width: auto;padding: 0 0.4em;}[data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {text-align: center;}.ast-footer-social-wrap {width: 100%;}.ast-footer-social-wrap .ast-builder-social-element:first-child {margin-left: 0;}.ast-footer-social-wrap .ast-builder-social-element:last-child {margin-right: 0;}.ast-header-social-wrap .ast-builder-social-element:first-child {margin-left: 0;}.ast-header-social-wrap .ast-builder-social-element:last-child {margin-right: 0;}.ast-builder-social-element {line-height: 1;color: #3a3a3a;background: transparent;vertical-align: middle;transition: all 0.01s;margin-left: 6px;margin-right: 6px;justify-content: center;align-items: center;}.ast-builder-social-element {line-height: 1;color: #3a3a3a;background: transparent;vertical-align: middle;transition: all 0.01s;margin-left: 6px;margin-right: 6px;justify-content: center;align-items: center;}.ast-builder-social-element .social-item-label {padding-left: 6px;}.ast-footer-social-1-wrap .ast-builder-social-element,.ast-footer-social-1-wrap .social-show-label-true .ast-builder-social-element{margin-left:12px;margin-right:12px;}.ast-footer-social-1-wrap .ast-builder-social-element svg{width:20px;height:20px;}.ast-footer-social-1-wrap .ast-social-color-type-custom svg{fill:var(--ast-global-color-2);}.ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover{color:var(--ast-global-color-3);}.ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg{fill:var(--ast-global-color-3);}.ast-footer-social-1-wrap .ast-social-color-type-custom .social-item-label{color:var(--ast-global-color-2);}.ast-footer-social-1-wrap .ast-builder-social-element:hover .social-item-label{color:var(--ast-global-color-3);}[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap{text-align:left;}@media (max-width:921px){.ast-footer-social-1-wrap{margin-bottom:0px;}[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap{text-align:left;}}@media (max-width:544px){.ast-footer-social-1-wrap{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap{text-align:center;}}.ast-builder-layout-element[data-section="section-fb-social-icons-1"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"]{display:flex;}}.site-footer{background-color:var(--ast-global-color-5);;background-image:none;;}.site-primary-footer-wrap{padding-top:45px;padding-bottom:45px;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{background-color:;;background-image:none;;border-style:solid;border-width:0px;border-top-width:1px;border-top-color:var(--ast-global-color-5);}.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row{grid-column-gap:1px;max-width:1200px;margin-left:auto;margin-right:auto;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row,.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .site-footer-section{align-items:flex-start;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-4-equal .ast-builder-grid-row{grid-template-columns:repeat( 4,1fr );}@media (max-width:921px){.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row{grid-column-gap:48px;grid-row-gap:48px;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-2-equal .ast-builder-grid-row{grid-template-columns:repeat( 2,1fr );}}@media (max-width:544px){.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{padding-top:104px;padding-bottom:64px;padding-left:40px;padding-right:40px;}@media (max-width:544px){.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{padding-top:64px;padding-bottom:64px;padding-left:24px;padding-right:24px;}}.site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}@media (max-width:921px){.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"]{display:grid;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:left;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:left;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner{text-align:left;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner{text-align:left;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:left;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:left;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner{text-align:left;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner{text-align:left;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner{text-align:center;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a{color:var(--ast-global-color-3);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a:hover{color:var(--ast-global-color-0);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] h6,.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-area h6{color:var(--ast-global-color-2);font-size:24px;font-size:1.4117647058824rem;}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{margin-left:80px;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{margin-top:48px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"]{display:block;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a{color:var(--ast-global-color-3);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a:hover{color:var(--ast-global-color-0);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] h6,.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-area h6{color:var(--ast-global-color-2);font-size:24px;font-size:1.4117647058824rem;}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{margin-left:40px;}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{margin-top:48px;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"]{display:block;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner a{color:var(--ast-global-color-3);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner a:hover{color:var(--ast-global-color-0);}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-title,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h1,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h2,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h3,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h4,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h5,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] h6,.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-area h6{color:var(--ast-global-color-2);}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}@media (max-width:544px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{margin-top:48px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"]{display:block;}}@media (max-width:921px){.footer-widget-area[data-section="sidebar-widgets-footer-widget-4"]{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;}}.footer-widget-area[data-section="sidebar-widgets-footer-widget-4"]{display:block;}@media (max-width:921px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"]{display:block;}}@media (max-width:544px){.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"]{display:block;}}.elementor-widget-heading .elementor-heading-title{margin:0;}.elementor-page .ast-menu-toggle{color:unset !important;background:unset !important;}.elementor-post.elementor-grid-item.hentry{margin-bottom:0;}.woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,.elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product{width:auto;margin:0;float:none;}body .elementor hr{background-color:#ccc;margin:0;}.ast-left-sidebar .elementor-section.elementor-section-stretched,.ast-right-sidebar .elementor-section.elementor-section-stretched{max-width:100%;left:0 !important;}.elementor-template-full-width .ast-container{display:block;}.elementor-screen-only,.screen-reader-text,.screen-reader-text span,.ui-helper-hidden-accessible{top:0 !important;}@media (max-width:544px){.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product{width:auto;margin:0;}.elementor-element .woocommerce .woocommerce-result-count{float:none;}}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.main-header-menu .menu-item, #astra-footer-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > .menu-link, #astra-footer-menu > .menu-item > .menu-link{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg{top:.2em;margin-top:0px;margin-left:0px;width:.65em;transform:translate(0, -2px) rotateZ(270deg);}.ast-mobile-popup-content .ast-submenu-expanded > .ast-menu-toggle{transform:rotateX(180deg);overflow-y:auto;}.ast-separate-container .blog-layout-1, .ast-separate-container .blog-layout-2, .ast-separate-container .blog-layout-3{background-color:transparent;background-image:none;}.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}@media (max-width:921px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}}@media (max-width:544px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;background-image:none;;}}.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .woocommerce.ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container  .ast-author-meta, .ast-separate-container .related-posts-title-wrapper,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-separate-container .ast-archive-description{background-color:var(--ast-global-color-5);;background-image:none;;}@media (max-width:921px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .woocommerce.ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container  .ast-author-meta, .ast-separate-container .related-posts-title-wrapper,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-separate-container .ast-archive-description{background-color:var(--ast-global-color-5);;background-image:none;;}}@media (max-width:544px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .woocommerce.ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container  .ast-author-meta, .ast-separate-container .related-posts-title-wrapper,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-separate-container .ast-archive-description{background-color:var(--ast-global-color-5);;background-image:none;;}}.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-5);;background-image:none;;}@media (max-width:921px){.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-5);;background-image:none;;}}@media (max-width:544px){.ast-separate-container.ast-two-container #secondary .widget{background-color:var(--ast-global-color-5);;background-image:none;;}}.ast-mobile-header-content > *,.ast-desktop-header-content > * {padding: 10px 0;height: auto;}.ast-mobile-header-content > *:first-child,.ast-desktop-header-content > *:first-child {padding-top: 10px;}.ast-mobile-header-content > .ast-builder-menu,.ast-desktop-header-content > .ast-builder-menu {padding-top: 0;}.ast-mobile-header-content > *:last-child,.ast-desktop-header-content > *:last-child {padding-bottom: 0;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {width: 100%;}.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded > .ast-menu-toggle::before {transform: rotateX(180deg);}#ast-desktop-header .ast-desktop-header-content,.ast-mobile-header-content .ast-search-icon,.ast-desktop-header-content .ast-search-icon,.ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {display: none;}.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {display: block;}.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item .menu-item > .sub-menu {opacity: 1;visibility: visible;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {width: unset;margin: unset;}.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle,.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle {left: calc( 20px - 0.907em);right: auto;}.ast-mobile-header-content .ast-search-menu-icon,.ast-mobile-header-content .ast-search-menu-icon.slide-search,.ast-desktop-header-content .ast-search-menu-icon,.ast-desktop-header-content .ast-search-menu-icon.slide-search {width: 100%;position: relative;display: block;right: auto;transform: none;}.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,.ast-mobile-header-content .ast-search-menu-icon .search-form,.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,.ast-desktop-header-content .ast-search-menu-icon .search-form {right: 0;visibility: visible;opacity: 1;position: relative;top: auto;transform: none;padding: 0;display: block;overflow: hidden;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-mobile-header-content .ast-search-menu-icon .search-field,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-desktop-header-content .ast-search-menu-icon .search-field {width: 100%;padding-right: 5.5em;}.ast-mobile-header-content .ast-search-menu-icon .search-submit,.ast-desktop-header-content .ast-search-menu-icon .search-submit {display: block;position: absolute;height: 100%;top: 0;right: 0;padding: 0 1em;border-radius: 0;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {padding-left: 30px;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {padding-left: 40px;}.ast-mobile-popup-drawer.active .ast-mobile-popup-inner{background-color:var(--ast-global-color-4);;}.ast-mobile-header-wrap .ast-mobile-header-content, .ast-desktop-header-content{background-color:var(--ast-global-color-4);;}.ast-mobile-popup-content > *, .ast-mobile-header-content > *, .ast-desktop-popup-content > *, .ast-desktop-header-content > *{padding-top:0;padding-bottom:0;}.content-align-flex-start .ast-builder-layout-element{justify-content:flex-start;}.content-align-flex-start .main-header-menu{text-align:left;}.ast-mobile-popup-drawer.active .menu-toggle-close{color:#3a3a3a;}.ast-mobile-header-wrap .ast-primary-header-bar,.ast-primary-header-bar .site-primary-header-wrap{min-height:70px;}.ast-desktop .ast-primary-header-bar .main-header-menu > .menu-item{line-height:70px;}.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-primary-header-bar,.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-below-header-bar,.ast-header-break-point #masthead .ast-mobile-header-wrap .ast-above-header-bar{padding-left:20px;padding-right:20px;}.ast-header-break-point .ast-primary-header-bar{border-bottom-width:0;border-bottom-color:#eaeaea;border-bottom-style:solid;}@media (min-width:922px){.ast-primary-header-bar{border-bottom-width:0;border-bottom-color:#eaeaea;border-bottom-style:solid;}}.ast-primary-header-bar{background-color:#ffffff;;background-image:none;;}.ast-desktop .ast-primary-header-bar.main-header-bar, .ast-header-break-point #masthead .ast-primary-header-bar.main-header-bar{padding-top:8px;padding-bottom:8px;}.ast-primary-header-bar{display:block;}@media (max-width:921px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}@media (max-width:544px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal{color:var(--ast-global-color-4);border:none;background:transparent;}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg{width:20px;height:20px;fill:var(--ast-global-color-4);}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu{color:var(--ast-global-color-4);}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-hfb-header .ast-builder-menu-mobile .main-header-menu, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link{border-style:none;}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}@media (max-width:921px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}}@media (max-width:544px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}}.ast-builder-menu-mobile .main-navigation{display:block;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}.ast-below-header .main-header-bar-navigation{height:100%;}.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link{border:none;}.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children > .ast-menu-toggle::before{font-size:.6rem;}.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .ast-submenu-expanded > .ast-menu-toggle::before{transform:rotateX(180deg);}#masthead .ast-mobile-header-wrap .ast-below-header-bar{padding-left:20px;padding-right:20px;}.ast-mobile-header-wrap .ast-below-header-bar ,.ast-below-header-bar .site-below-header-wrap{min-height:40px;}.ast-desktop .ast-below-header-bar .main-header-menu > .menu-item{line-height:40px;}.ast-desktop .ast-below-header-bar .ast-header-woo-cart,.ast-desktop .ast-below-header-bar .ast-header-edd-cart{line-height:40px;}.ast-below-header-bar{border-bottom-width:1px;border-bottom-color:#eaeaea;border-bottom-style:solid;}.ast-below-header-bar{background-color:#eeeeee;;background-image:none;;}.ast-header-break-point .ast-below-header-bar{background-color:#eeeeee;}.ast-below-header-bar{display:block;}@media (max-width:921px){.ast-header-break-point .ast-below-header-bar{display:grid;}}@media (max-width:544px){.ast-header-break-point .ast-below-header-bar{display:grid;}}:root{--e-global-color-astglobalcolor0:#e4032f;--e-global-color-astglobalcolor1:#fd0d3c;--e-global-color-astglobalcolor2:#121212;--e-global-color-astglobalcolor3:#4a4a4a;--e-global-color-astglobalcolor4:#f7f6f2;--e-global-color-astglobalcolor5:#ffffff;--e-global-color-astglobalcolor6:#fecc00;--e-global-color-astglobalcolor7:#000000;--e-global-color-astglobalcolor8:rgba(226,3,48,0.25);}
</style>
<style id="astra-google-fonts-css" media="all">/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w0aXpsog.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w9aXpsog.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w2aXpsog.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXpsog.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXo.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUtiZTaR.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUJiZTaR.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUliZTaR.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUhiZTaR.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUZiZQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lqDY.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lqDY.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lqDY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lqDY.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lqDY.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lqDY.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmhduz8A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwkxduz8A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmxduz8A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlBduz8A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmBduz8A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmRduz8A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  font-display: fallback;
  src: url(/fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdu.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel="stylesheet" id="wp-block-library-css" href="https://websitedemos.net/pizzeria-04/wp-includes/css/dist/block-library/style.css?ver=6.4.2" media="all">
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}body { margin: 0;--wp--style--global--content-size: var(--wp--custom--ast-content-width-size);--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size); }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child:first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child:last-child { margin-block-end: 0; }body { --wp--style--block-gap: 24px; }:where(body .is-layout-flow)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-flow)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-flow)  > *{margin-block-start: 24px;margin-block-end: 0;}:where(body .is-layout-constrained)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-constrained)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-constrained)  > *{margin-block-start: 24px;margin-block-end: 0;}:where(body .is-layout-flex) {gap: 24px;}:where(body .is-layout-grid) {gap: 24px;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}.wp-element-button, .wp-block-button__link{background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-color{color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-color{color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-color{color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-color{color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-color{color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-color{color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-color{color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-color{color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-color{color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-background-color{background-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-background-color{background-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-background-color{background-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-background-color{background-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-background-color{background-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-background-color{background-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-background-color{background-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-background-color{background-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-background-color{background-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-border-color{border-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-border-color{border-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-border-color{border-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-border-color{border-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-border-color{border-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-border-color{border-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-border-color{border-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-border-color{border-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-border-color{border-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="hfe-style-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.23" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.css?ver=5.23.0" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/css/frontend.css?ver=3.17.3" media="all">
<link rel="stylesheet" id="swiper-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.css?ver=5.3.6" media="all">
<link rel="stylesheet" id="elementor-post-5-css" href="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/elementor/css/post-5.css?ver=1691728444" media="all">
<link rel="stylesheet" id="astra-sites-showcase-blocks-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-showcase/assets/css/blocks.css?ver=2.4.2" media="all">
<link rel="stylesheet" id="elementor-post-11-css" href="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/elementor/css/post-11.css?ver=1704950491" media="all">
<link rel="stylesheet" id="hfe-widgets-style-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.23" media="all">
<link rel="stylesheet" id="elementor-post-564-css" href="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/elementor/css/post-564.css?ver=1691728444" media="all">
<style id="google-fonts-1-css" media="all">/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz0dL_nz.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzQdL_nz.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzwdL_nz.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzMdL_nz.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz8dL_nz.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc3CsTKlA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc-CsTKlA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc2CsTKlA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc5CsTKlA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc1CsTKlA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfABc4EsA.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 100;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 200;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 500;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 600;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 800;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufA5qW54A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufJ5qW54A.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufB5qW54A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufO5qW54A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufC5qW54A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufD5qW54A.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 900;
  src: url(/fonts.gstatic.com/s/robotoslab/v34/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.css?ver=5.15.3" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><!--[if IE]>
<script src="https://websitedemos.net/pizzeria-04/wp-content/themes/astra/assets/js/unminified/flexibility.js?ver=4.5.2" id="astra-flexibility-js"></script>
<script id="astra-flexibility-js-after">
flexibility(document.documentElement);
</script>
<![endif]-->
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/vendor/wp-polyfill-inert.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/vendor/regenerator-runtime.js?ver=0.14.0" id="regenerator-runtime-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/vendor/wp-polyfill.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/development/react-refresh-runtime.js?ver=79d08edf9bea9ade42e6" id="wp-react-refresh-runtime-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/development/react-refresh-entry.js?ver=794dd7047e2302828128" id="wp-react-refresh-entry-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/dom-ready.js?ver=ae5bd6ca23f589f2dac7" id="wp-dom-ready-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/url.js?ver=2eb43eef60790a73edaf" id="wp-url-js"></script>
<script id="showcase-cta-preview-js-js-after">
( window.self !== window.top ) || document.write( '<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/dist/template-preview/main.js?ver=ae2e87f495819b6e9f4f"></scr' + 'ipt>' );
</script><script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/dist/template-preview/main.js?ver=ae2e87f495819b6e9f4f"></script>
<script id="starter-templates-preview-js-js-extra">
var starterTemplatesPreview = {"site_url":"https:\/\/websitedemos.net\/pizzeria-04","AstColorPaletteVarPrefix":"--ast-global-color-","AstEleColorPaletteVarPrefix":["ast-global-color-0","ast-global-color-1","ast-global-color-2","ast-global-color-3","ast-global-color-4","ast-global-color-5","ast-global-color-6","ast-global-color-7","ast-global-color-8"],"templateTheme":"astra"};
</script>
<script id="starter-templates-preview-js-js-after">
( window.self === window.top ) || document.write( '<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/dist/template-preview/main.js?ver=ae2e87f495819b6e9f4f"></scr' + 'ipt>' );
</script>
<link rel="https://api.w.org/" href="https://websitedemos.net/pizzeria-04/wp-json/"><link rel="alternate" type="application/json" href="https://websitedemos.net/pizzeria-04/wp-json/wp/v2/pages/11"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://websitedemos.net/pizzeria-04/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 6.4.2">
<link rel="shortlink" href="https://websitedemos.net/pizzeria-04/">
<link rel="alternate" type="application/json+oembed" href="https://websitedemos.net/pizzeria-04/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebsitedemos.net%2Fpizzeria-04%2F">
<link rel="alternate" type="text/xml+oembed" href="https://websitedemos.net/pizzeria-04/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebsitedemos.net%2Fpizzeria-04%2F&amp;format=xml">

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW78FQ8');</script>

<meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link id="google-fonts-domain" rel="preconnect" href="https://fonts.gstatic.com"><link id="google-fonts-url" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans Pro:wght@400&amp;family=Oswald:wght@500&amp;family=Playfair+Display:wght@700&amp;family=Source+Sans+Pro:wght@400&amp;family=Poppins:wght@700&amp;family=Lato:wght@400&amp;family=Montserrat:wght@700&amp;family=Lato:wght@400&amp;family=Rubik:wght@700&amp;family=Karla:wght@400&amp;family=Roboto+Condensed:wght@700&amp;family=Roboto:wght@400&amp;family=Merriweather:wght@700&amp;family=Inter:wght@400&amp;family=Vollkorn:wght@700&amp;family=Open+Sans:wght@400&amp;family=Open+Sans:wght@700&amp;family=Work+Sans:wght@400&amp;display=swap"><link href="data:text/css,%3Ais(%5Bid*%3D'google_ads_iframe'%5D%2C%5Bid*%3D'taboola-'%5D%2C.taboolaHeight%2C.taboola-placeholder%2C%23credential_picker_container%2C%23credentials-picker-container%2C%23credential_picker_iframe%2C%5Bid*%3D'google-one-tap-iframe'%5D%2C%23google-one-tap-popup-container%2C.google-one-tap-modal-div%2C%23amp_floatingAdDiv%2C%23ez-content-blocker-container)%20%7Bdisplay%3Anone!important%3Bmin-height%3A0!important%3Bheight%3A0!important%3B%7D" rel="stylesheet" type="text/css"><link href="data:text/css,%3Ais(%5Bid*%3D'google_ads_iframe'%5D%2C%5Bid*%3D'taboola-'%5D%2C.taboolaHeight%2C.taboola-placeholder%2C%23credential_picker_container%2C%23credentials-picker-container%2C%23credential_picker_iframe%2C%5Bid*%3D'google-one-tap-iframe'%5D%2C%23google-one-tap-popup-container%2C.google-one-tap-modal-div%2C%23amp_floatingAdDiv%2C%23ez-content-blocker-container)%20%7Bdisplay%3Anone!important%3Bmin-height%3A0!important%3Bheight%3A0!important%3B%7D" rel="stylesheet" type="text/css"></head>
<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="home page-template-default page page-id-11 wp-custom-logo ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-4.5.2 ast-single-post ast-inherit-site-logo-transparent ast-theme-transparent-header ast-hfb-header elementor-default elementor-kit-5 elementor-page elementor-page-11 e--ua-firefox" style="" data-elementor-device-mode="desktop">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW78FQ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
Skip to content</a>
<div class="hfeed site" id="page">

<div id="content" class="site-content">
<div class="ast-container">
<div id="primary" class="content-area primary">
<main id="main" class="site-main">
<article class="post-11 page type-page status-publish ast-article-single" id="post-11" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
</header> 
<div class="entry-content clear" itemprop="text">
<div data-elementor-type="wp-page" data-elementor-id="11" class="elementor elementor-11">
<section class="elementor-section elementor-top-section elementor-element elementor-element-6fa0298 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6fa0298" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-shape elementor-shape-bottom" data-negative="true">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
</svg> </div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cb23983" data-id="cb23983" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-5de589c elementor-widget elementor-widget-heading" data-id="5de589c" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
 </div>
</div>
<div class="elementor-element elementor-element-68cd768 elementor-widget elementor-widget-text-editor" data-id="68cd768" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
 </div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-4779ba2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4779ba2" data-element_type="section">
<div class="elementor-container elementor-column-gap-extended">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3b363cf" data-id="3b363cf" data-element_type="column">

</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-714cd21" data-id="714cd21" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-4bf47b3 elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="4bf47b3" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">

</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-4071c9c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4071c9c" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ca0da2e" data-id="ca0da2e" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-0200db1 elementor-widget elementor-widget-image" data-id="0200db1" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<img fetchpriority="high" decoding="async" width="475" height="457" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png" class="attachment-full size-full wp-image-92" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img.png 475w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img-300x289.png 300w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-header-pizza-img-400x385.png 400w" sizes="(max-width: 475px) 100vw, 475px"> </div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-625d71a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="625d71a" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d536bf1" data-id="d536bf1" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-3bd563d elementor-position-top elementor-widget elementor-widget-image-box" data-id="3bd563d" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="240" height="240" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-fresh-ingredients-img.jpg" class="attachment-full size-full wp-image-102" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-fresh-ingredients-img.jpg 240w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-fresh-ingredients-img-150x150.jpg 150w" sizes="(max-width: 240px) 100vw, 240px"></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title">Fresh Ingredients</h4><p class="elementor-image-box-description">Risus egestas felis, purus ultricies tortor feugiat aliquam euismod senectus sed amet felis viverra mi bibendum.</p></div></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d2b871f" data-id="d2b871f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-576d900 elementor-position-top elementor-widget elementor-widget-image-box" data-id="576d900" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="240" height="240" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-homemade-mozarella.jpg" class="attachment-full size-full wp-image-58" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-homemade-mozarella.jpg 240w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-homemade-mozarella-150x150.jpg 150w" sizes="(max-width: 240px) 100vw, 240px"></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title">Handmade Mozarella</h4><p class="elementor-image-box-description">Feugiat neque, rhoncus suspendisse proin amet aliquet diam pretium condimentum nisl tempus risus imperdiet egestas sit.</p></div></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6a8193b" data-id="6a8193b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-80ec22c elementor-position-top elementor-widget elementor-widget-image-box" data-id="80ec22c" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="240" height="240" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-secret-recipe-sauce-img.jpg" class="attachment-full size-full wp-image-51" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-secret-recipe-sauce-img.jpg 240w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-secret-recipe-sauce-img-150x150.jpg 150w" sizes="(max-width: 240px) 100vw, 240px"></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title">"Secret Recipe" Sauce</h4><p class="elementor-image-box-description">Placerat id sagittis dolor dictum sit ante dui varius dui eu iaculis pellentesque nam lobortis lectus.</p></div></div> </div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-3637d44 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3637d44" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bb2cc34" data-id="bb2cc34" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-fc733f7 elementor-widget elementor-widget-heading" data-id="fc733f7" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Bringing
Happiness
To You</h2> </div>
</div>
<div class="elementor-element elementor-element-0da299b elementor-widget elementor-widget-text-editor" data-id="0da299b" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>Tellus id nisl quis at sollicitudin nisl nisi tincidunt purus .</p> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8d4aad5" data-id="8d4aad5" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-e8104dc elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="e8104dc" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
 </span>
</div>
<div class="elementor-icon-box-content">
<h4 class="elementor-icon-box-title">
<span>
Online Delivery </span>
</h4>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-7e8216b elementor-align-center elementor-widget elementor-widget-button" data-id="7e8216b" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z"></path></svg> </span>
<span class="elementor-button-text">Order Online</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8b66340" data-id="8b66340" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-c4f87c7 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="c4f87c7" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
 </span>
</div>
<div class="elementor-icon-box-content">
<h4 class="elementor-icon-box-title">
<span>
Click &amp; Collect </span>
</h4>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-f7c2c29 elementor-align-center elementor-widget elementor-widget-button" data-id="f7c2c29" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z"></path></svg> </span>
<span class="elementor-button-text">Takeout Order</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-aed9813" data-id="aed9813" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-17957e3 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="17957e3" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
  </span>
</div>
<div class="elementor-icon-box-content">
<h4 class="elementor-icon-box-title">
<span>
Artisant  Dining </span>
</h4>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-a7cc891 elementor-align-center elementor-widget elementor-widget-button" data-id="a7cc891" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z"></path></svg> </span>
<span class="elementor-button-text">Book a Table</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-f4c73e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f4c73e7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
<div class="elementor-shape elementor-shape-bottom" data-negative="true">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
</svg> </div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4eed2c6" data-id="4eed2c6" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-312df47 elementor-widget elementor-widget-heading" data-id="312df47" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h6 class="elementor-heading-title elementor-size-default">Choose your Flavor</h6> </div>
</div>
<div class="elementor-element elementor-element-f0e851d elementor-widget elementor-widget-heading" data-id="f0e851d" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Food that brings people together!</h2> </div>
</div>
<div class="elementor-element elementor-element-b413f2e elementor-widget elementor-widget-text-editor" data-id="b413f2e" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>Cursus ultricies in maecenas pulvinar ultrices integer quam amet, semper dictumst sit interdum ut venenatis pellentesque nunc.</p> </div>
</div>
<div class="elementor-element elementor-element-c030bde elementor-align-center elementor-widget elementor-widget-button" data-id="c030bde" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">View All Menu</span>
</span>
</a>
</div>
</div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-4ff2375 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4ff2375" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bd8d5e7" data-id="bd8d5e7" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-c4ac906 elementor-position-top elementor-widget elementor-widget-image-box" data-id="c4ac906" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="#" tabindex="-1"><img loading="lazy" decoding="async" width="475" height="457" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pasta-img.png" class="elementor-animation-float attachment-full size-full wp-image-94" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pasta-img.png 475w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pasta-img-300x289.png 300w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pasta-img-400x385.png 400w" sizes="(max-width: 475px) 100vw, 475px"></a></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title"><a href="#">Pasta</a></h4></div></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a043cbb" data-id="a043cbb" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-aa6a899 elementor-position-top elementor-widget elementor-widget-image-box" data-id="aa6a899" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="#" tabindex="-1"><img loading="lazy" decoding="async" width="475" height="457" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pizza-img.png" class="elementor-animation-float attachment-full size-full wp-image-95" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pizza-img.png 475w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pizza-img-300x289.png 300w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-pizza-img-400x385.png 400w" sizes="(max-width: 475px) 100vw, 475px"></a></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title"><a href="#">Pizza</a></h4></div></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-afe40b4" data-id="afe40b4" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-cafba39 elementor-position-top elementor-widget elementor-widget-image-box" data-id="cafba39" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="#" tabindex="-1"><img loading="lazy" decoding="async" width="475" height="457" src="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-dessert-img.png" class="elementor-animation-float attachment-full size-full wp-image-93" alt="" srcset="https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-dessert-img.png 475w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-dessert-img-300x289.png 300w, https://websitedemos.net/pizzeria-04/wp-content/uploads/sites/791/2021/03/pizzeria-template-menu-dessert-img-400x385.png 400w" sizes="(max-width: 475px) 100vw, 475px"></a></figure><div class="elementor-image-box-content"><h4 class="elementor-image-box-title"><a href="#">Dessert</a></h4></div></div> </div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>





</div>
</div>
</article>
</main>
</div>
</div> 
</div>
<div class="hfe-before-footer-wrap">
<div class="footer-width-fixer"> <div data-elementor-type="wp-post" data-elementor-id="564" class="elementor elementor-564">

</div>
</div> </div>
<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
<div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-4-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack" data-section="section-primary-footer-builder">

</div>

</footer>
</div>
<div  ><div  ><div class="absolute overflow-hidden"><div class="absolute" aria-hidden="true"><div   "><div class="absolute top-1/3 left-[-135px] z-1 bg-white rounded-tl-sm rounded-bl-sm hover:rounded-tl-sm hover:rounded-bl-sm transform transition linear duration-400 sm:duration-500 translate-x-0"><div  ><div class=" st-customize-btn-item relative flex align-center items-center rounded-tl-sm rounded-bl-sm bg-white p-4 border-none text-gray-800 cursor-pointer"><span  ><svg  > <path  ></path> </svg><span class="text-[15px] normal-case leading-4 font-medium tracking-normal pointer-events-none font-DM-sans">Customize</span></span></div></div></div><div class="h-full flex flex-col bg-white overflow-y-auto shadow-sidebar"><div class="py-[20px] px-[25px] shadow-templateName flex items-center justify-between z-[3] leading-none"><div class="flex"><p class="text-[18px] font-semibold text-gray-600 m-0" id="slide-over-title">The Pizzeria</p></div><div class="close-sidebar-btn cursor-pointer border-solid border rounded-sm border-gray-300 p-[6px] hover:border-gray-800"><span class="flex items-center"><svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#6B7280"></path></svg></span></div></div><div class="flex justify-between flex-col h-full z-[2] bg-white"><div class="px-6 pt-6 main-content"><p class="text-[14px] text-gray-800 mb-[14px]">Use the template as-is or try different colors and fonts from the options below.</p><div class="flex flex-col"><div class="flex align-center justify-between items-center"><p class="text-[16px] font-medium text-gray-800 m-0">Try Other Colors</p><div class="text-[12px] text-gray-800 reset-btn opacity-40 cursor-not-allowed">Default</div></div><div class="grid grid-cols-1 pt-[20px] gap-[10px] leading-none"><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-between items-center hover:border-blue-600 hover:cursor-pointer
                            border-blue-600
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex flex-row text-[12px] font-medium text-gray-800">DEFAULT COLORS</div><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(228, 3, 47);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(253, 13, 60);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(18, 18, 18);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(74, 74, 74);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(247, 246, 242);"></div></div></div></div><div class="grid grid-cols-2 pt-[20px] pb-[30px] gap-[10px] border-b border-solid border-gray-300"><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(142, 67, 240);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(99, 0, 226);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(21, 14, 31);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(88, 77, 102);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(243, 241, 246);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(239, 77, 72);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(217, 7, 0);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(43, 22, 27);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(69, 62, 62);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(247, 243, 245);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 66, 179);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 0, 153);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(43, 22, 27);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(85, 75, 78);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(246, 243, 245);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 106, 151);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(250, 3, 107);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(43, 22, 27);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(100, 86, 89);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(248, 243, 245);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 122, 61);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 81, 0);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(30, 24, 16);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(87, 82, 80);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(248, 245, 244);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(249, 195, 73);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(255, 177, 0);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(30, 24, 16);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(98, 97, 92);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(248, 247, 243);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(48, 199, 181);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(0, 172, 151);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(20, 38, 28);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(79, 86, 85);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(243, 246, 243);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(27, 174, 112);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(6, 117, 46);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(20, 38, 28);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(78, 86, 82);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(244, 246, 244);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(47, 193, 255);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(8, 172, 242);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(16, 18, 24);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(76, 82, 83);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(243, 246, 246);"></div></div></div><div class="flex p-[12px] border-solid border rounded-sm border-gray-300 justify-evenly items-center hover:border-blue-600 hover:cursor-pointer
                            
							hover:transition-all hover:duration-300 hover:ease-linear"><div class="flex gap-2"><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(65, 117, 252);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(8, 74, 243);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(16, 18, 24);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(73, 75, 81);"></div><div class="h-[16px] w-[16px] rounded-full " style="background-color: rgb(243, 245, 245);"></div></div></div></div></div><div class="flex flex-col"><div class="flex align-center justify-between items-center mt-6"><p class="text-[16px] font-medium text-gray-800 m-0">Try Other Fonts</p><div class="text-[12px] text-gray-800 reset-btn opacity-40 cursor-not-allowed">Default</div></div><div class="pt-[20px]"><ul class="grid grid-cols-1 text-center list-none m-0 p-0"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[16px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 border-blue-600 text-blue-600
									hover:transition-all hover:duration-200 hover:ease-linear flex gap-2 place-content-center items-center" tabindex="0" title="Oswald / Source Sans Pro"><span style="font-family: Oswald; font-weight: 500;" class="heading-font-preview">Oswald</span><span class="font-separator">/</span><span style="font-family: Source Sans Pro; font-weight: 400;" class="body-font-preview">Source Sans Pro</span></li></ul></div><div class="flex flex-col pt-[20px] pb-[10px]"><ul class="grid grid-cols-4 gap-4 text-center list-none m-0 p-0"><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Playfair Display / Source Sans Pro"><span style="font-family: Playfair Display; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Source Sans Pro; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Playfair Display / Source Sans Pro</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Poppins / Lato"><span style="font-family: Poppins; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Lato; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Poppins / Lato</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Montserrat / Lato"><span style="font-family: Montserrat; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Lato; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Montserrat / Lato</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Rubik / Karla"><span style="font-family: Rubik; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Karla; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Rubik / Karla</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Roboto Condensed / Roboto"><span style="font-family: Roboto Condensed; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Roboto; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Roboto Condensed / Roboto</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Merriweather / Inter"><span style="font-family: Merriweather; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Inter; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Merriweather / Inter</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Vollkorn / Open Sans"><span style="font-family: Vollkorn; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Open Sans; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Vollkorn / Open Sans</div></div><div class="stc-tooltip group relative"><li class="border-solid border rounded-sm border-gray-300 bg-[#F7F7F9] p-[8px] h-full text-[24px] hover:border-blue-600 hover:cursor-pointer hover:text-blue-600 text-gray-800 
									hover:transition-all hover:duration-200 hover:ease-linear" tabindex="0" title="Open Sans / Work Sans"><span style="font-family: Open Sans; font-weight: 700;" class="heading-font-preview">A</span><span style="font-family: Work Sans; font-weight: 400;" class="body-font-preview">a</span></li><div class="text-[#ffffff] opacity-0 invisible group-hover:opacity-100 group-hover:visible stc-tooltip-content py-1.5 px-3 absolute right-0 top-[110%] z-100 bg-gray-800 font-normal leading-none text-center min-w-max rounded-sm text-xs shadow-typoTooltip ">Open Sans / Work Sans</div></div></ul></div></div></div></div></div></div></div></div></div></div><style id="core-block-supports-inline-css">
/**
 * Core styles: block-supports
 */

</style>
<link rel="stylesheet" id="e-animations-css" href="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.17.3" media="all">
<script id="astra-theme-js-js-extra">
var astra = {"break_point":"921","isRtl":"","is_scroll_to_id":"","is_scroll_to_top":"","is_header_footer_builder_active":"1"};
</script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/themes/astra/assets/js/unminified/frontend.js?ver=4.5.2" id="astra-theme-js-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/vendor/react.js?ver=18.2.0" id="react-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/vendor/react-dom.js?ver=18.2.0" id="react-dom-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/escape-html.js?ver=53958a11eeadd4731b85" id="wp-escape-html-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/element.js?ver=10b6413a3a6da33b2264" id="wp-element-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/hooks.js?ver=c2825736a5a04b1ba4df" id="wp-hooks-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/dist/i18n.js?ver=bbbb3a5d0e355b0e5159" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="showcase-cta-js-js-extra">
var showcaseCTA = {"adminUrl":"https:\/\/websitedemos.net\/pizzeria-04\/wp-admin\/","networkSiteURL":"https:\/\/websitedemos.net\/","templateName":"The Pizzeria","isMainSite":"","templateColorScheme":"light","path":"\/pizzeria-04\/","pageBuilder":["elementor"],"customizerData":{"astra-settings":{"blog-single-width":"default","blog-single-max-width":1200,"blog-post-structure":["image","title-meta"],"blog-width":"default","blog-meta-date-type":"published","blog-meta-date-format":"","blog-max-width":1200,"blog-post-content":"excerpt","blog-meta":["comments","category","author"],"text-color":"var(--ast-global-color-3)","link-color":"var(--ast-global-color-2)","theme-color":"var(--ast-global-color-0)","link-h-color":"var(--ast-global-color-1)","heading-base-color":"var(--ast-global-color-2)","border-color":"","footer-bg-obj":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"footer-color":"","footer-link-color":"","footer-link-h-color":"","footer-adv-bg-obj":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"footer-adv-text-color":"","footer-adv-link-color":"","footer-adv-link-h-color":"","footer-adv-wgt-title-color":"","button-color":"var(--ast-global-color-0)","button-h-color":"var(--ast-global-color-4)","button-bg-color":"rgba(226,3,48,0)","button-bg-h-color":"var(--ast-global-color-0)","secondary-button-bg-h-color":"var(--ast-global-color-0)","secondary-button-bg-color":"rgba(226,3,48,0)","secondary-button-color":"","secondary-button-h-color":"","theme-button-padding":{"desktop":{"top":"15","right":"23","bottom":"15","left":"23"},"tablet":{"top":"14","right":"21","bottom":"14","left":"21"},"mobile":{"top":"13","right":"19","bottom":"13","left":"19"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"secondary-theme-button-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"button-radius-fields":{"desktop":{"top":4,"right":4,"bottom":4,"left":4},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"secondary-button-radius-fields":{"desktop":{"top":4,"right":4,"bottom":4,"left":4},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"theme-button-border-group-border-size":{"top":"1","right":"1","bottom":"1","left":"1"},"secondary-theme-button-border-group-border-size":{"top":"","right":"","bottom":"","left":""},"footer-sml-layout":"footer-sml-layout-1","footer-sml-section-1":"custom","footer-sml-section-1-credit":"Copyright &copy; [current_year] [site_title] | Powered by [theme_author]","footer-sml-section-2":"","footer-sml-section-2-credit":"Copyright &copy; [current_year] [site_title] | Powered by [theme_author]","footer-sml-dist-equal-align":true,"footer-sml-divider":1,"footer-sml-divider-color":"#7a7a7a","footer-layout-width":"content","ast-header-retina-logo":"","ast-header-logo-width":"","ast-header-responsive-logo-width":{"desktop":"","tablet":"","mobile":""},"header-color-site-title":"","header-color-h-site-title":"","header-color-site-tagline":"","display-site-title-responsive":{"desktop":false,"tablet":false,"mobile":false},"display-site-tagline-responsive":{"desktop":0,"tablet":0,"mobile":0},"logo-title-inline":1,"disable-primary-nav":false,"header-layouts":"header-main-layout-1","header-main-rt-section":"none","header-display-outside-menu":false,"header-main-rt-section-html":"<button>Contact Us<\/button>","header-main-rt-section-button-text":"Button","header-main-rt-section-button-link":"https:\/\/www.wpastra.com","header-main-rt-section-button-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-main-rt-section-button-style":"theme-button","header-main-rt-section-button-text-color":"","header-main-rt-section-button-back-color":"","header-main-rt-section-button-text-h-color":"","header-main-rt-section-button-back-h-color":"","header-main-rt-section-button-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""}},"header-main-rt-section-button-border-size":{"top":"","right":"","bottom":"","left":""},"header-main-sep":1,"header-main-sep-color":"","header-main-layout-width":"content","primary-submenu-border":{"top":"2","right":"0","bottom":"0","left":"0"},"primary-submenu-item-border":false,"primary-submenu-b-color":"","primary-submenu-item-b-color":"","primary-header-button-font-family":"inherit","primary-header-button-font-weight":"inherit","primary-header-button-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"primary-header-button-text-transform":"","primary-header-button-line-height":1,"primary-header-button-letter-spacing":"","header-main-menu-label":"","header-main-menu-align":"inline","header-main-submenu-container-animation":"","mobile-header-breakpoint":"","mobile-header-logo":"","mobile-header-logo-width":"","site-layout":"ast-full-width-layout","site-content-width":1200,"narrow-container-max-width":750,"site-layout-outside-bg-obj-responsive":{"desktop":{"background-color":"var(--ast-global-color-4)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"content-bg-obj-responsive":{"desktop":{"background-color":"var(--ast-global-color-5)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"var(--ast-global-color-5)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"var(--ast-global-color-5)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"wp-blocks-ui":"comfort","wp-blocks-global-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"em","tablet-unit":"em","mobile-unit":"em"},"single-page-ast-content-layout":"default","single-page-content-style":"default","single-post-ast-content-layout":"default","single-post-content-style":"default","archive-post-ast-content-layout":"default","ast-site-content-layout":"normal-width-container","site-content-style":"boxed","body-font-family":"'Source Sans Pro', sans-serif","body-font-variant":"400,600","body-font-weight":"400","font-size-body":{"desktop":"17","tablet":"16","mobile":"15","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"body-font-extras":{"line-height":"1.6","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"headings-font-height-settings":{"line-height":1,"line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"uppercase","text-decoration":""},"para-margin-bottom":1,"underline-content-links":false,"site-accessibility-toggle":true,"site-accessibility-highlight-type":"dotted","site-accessibility-highlight-input-type":"disable","body-text-transform":"","headings-font-family":"'Oswald', sans-serif","headings-font-weight":"500","font-size-site-title":{"desktop":35,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-site-tagline":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"single-post-outside-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-page-title":{"desktop":30,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h1":{"desktop":"96","tablet":"72","mobile":"56","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h2":{"desktop":"64","tablet":"48","mobile":"40","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h3":{"desktop":"40","tablet":"32","mobile":"28","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h4":{"desktop":"32","tablet":"24","mobile":"22","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h5":{"desktop":"22","tablet":"20","mobile":"18","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-size-h6":{"desktop":"16","tablet":"15","mobile":"14","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"site-sidebar-layout":"no-sidebar","site-sidebar-width":30,"single-page-sidebar-layout":"default","single-post-sidebar-layout":"default","archive-post-sidebar-layout":"default","site-sticky-sidebar":false,"site-sidebar-style":"boxed","single-page-sidebar-style":"unboxed","single-post-sidebar-style":"default","archive-post-sidebar-style":"default","footer-adv":"disabled","footer-adv-border-width":"","footer-adv-border-color":"#7a7a7a","mobile-header-toggle-btn-style":"minimal","hide-custom-menu-mobile":1,"mobile-header-toggle-target":"icon","enable-scroll-to-id":false,"enable-related-posts":false,"related-posts-title":"Related Posts","releted-posts-title-alignment":"left","related-posts-total-count":2,"enable-related-posts-excerpt":false,"related-posts-excerpt-count":25,"related-posts-based-on":"categories","related-posts-order-by":"date","related-posts-order":"asc","related-posts-grid-responsive":{"desktop":"2-equal","tablet":"2-equal","mobile":"full"},"related-posts-structure":["featured-image","title-meta"],"related-posts-meta-structure":["comments","category","author"],"related-posts-text-color":"","related-posts-link-color":"","related-posts-title-color":"","related-posts-background-color":"","related-posts-meta-color":"","related-posts-link-hover-color":"","related-posts-meta-link-hover-color":"","related-posts-section-title-font-family":"inherit","related-posts-section-title-font-weight":"inherit","related-posts-section-title-text-transform":"","related-posts-section-title-line-height":"","related-posts-section-title-font-extras":{"line-height":"1.6","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"related-posts-section-title-font-size":{"desktop":"30","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"related-posts-title-font-family":"inherit","related-posts-title-font-weight":"inherit","related-posts-title-text-transform":"","related-posts-title-line-height":"1","related-posts-title-font-size":{"desktop":"20","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"related-posts-title-font-extras":{"line-height":"1","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"related-posts-meta-font-family":"inherit","related-posts-meta-font-weight":"inherit","related-posts-meta-text-transform":"","related-posts-meta-line-height":"","related-posts-meta-font-size":{"desktop":"14","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"related-posts-meta-font-extras":{"line-height":"1.6","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"related-posts-content-font-family":"inherit","related-posts-content-font-weight":"inherit","related-posts-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"related-posts-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"transparent-header-logo":"","transparent-header-retina-logo":"","different-transparent-logo":0,"different-transparent-retina-logo":0,"transparent-header-logo-width":{"desktop":150,"tablet":120,"mobile":100},"transparent-header-enable":0,"transparent-header-disable-archive":1,"transparent-header-disable-latest-posts-index":1,"transparent-header-on-devices":"both","transparent-header-main-sep":0,"transparent-header-main-sep-color":"","transparent-header-bg-color":"","transparent-header-color-site-title":"","transparent-header-color-h-site-title":"","transparent-menu-bg-color":"","transparent-menu-color":"","transparent-menu-h-color":"","transparent-submenu-bg-color":"","transparent-submenu-color":"","transparent-submenu-h-color":"","transparent-header-logo-color":"","transparent-header-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-header-color-site-title-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-header-color-h-site-title-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-menu-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-menu-color-responsive":{"desktop":"rgba(255,255,255,0.8)","tablet":"var(--ast-global-color-2)","mobile":""},"transparent-menu-h-color-responsive":{"desktop":"var(--ast-global-color-4)","tablet":"var(--ast-global-color-0)","mobile":""},"transparent-submenu-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-submenu-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-submenu-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-content-section-text-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-content-section-link-color-responsive":{"desktop":"","tablet":"","mobile":""},"transparent-content-section-link-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"breadcrumb-font-family":"inherit","breadcrumb-font-weight":"inherit","breadcrumb-text-color-responsive":{"desktop":"","tablet":"","mobile":""},"breadcrumb-active-color-responsive":{"desktop":"","tablet":"","mobile":""},"breadcrumb-hover-color-responsive":{"desktop":"","tablet":"","mobile":""},"breadcrumb-separator-color":{"desktop":"","tablet":"","mobile":""},"breadcrumb-bg-color":{"desktop":"","tablet":"","mobile":""},"breadcrumb-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"breadcrumb-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"breadcrumb-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"breadcrumb-separator-selector":"unicode","breadcrumb-separator":"\u00000bb","scroll-to-top-enable":false,"scroll-to-top-icon-size":15,"scroll-to-top-icon-position":"right","scroll-to-top-on-devices":"both","scroll-to-top-icon-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"scroll-to-top-icon-color":"","scroll-to-top-icon-h-color":"","scroll-to-top-icon-bg-color":"","scroll-to-top-icon-h-bg-color":"","h1-color":"","h2-color":"","h3-color":"","h4-color":"","h5-color":"","h6-color":"","font-family-h1":"inherit","font-weight-h1":"inherit","font-extras-h1":{"line-height":"1.4","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-family-h2":"inherit","font-weight-h2":"inherit","font-extras-h2":{"line-height":"1.25","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-family-h3":"inherit","font-weight-h3":"inherit","font-extras-h3":{"line-height":"1.2","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-family-h4":"inherit","font-weight-h4":"inherit","font-extras-h4":{"line-height":"1.2","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-family-h5":"inherit","font-weight-h5":"inherit","font-extras-h5":{"line-height":"1.2","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-family-h6":"inherit","font-weight-h6":"inherit","font-extras-h6":{"line-height":"1.25","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"font-weight-button":"700","secondary-font-weight-button":"700","font-family-button":"'Montserrat', sans-serif","secondary-font-family-button":"'Montserrat', sans-serif","font-size-button":{"desktop":"14","tablet":"","mobile":"13","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"secondary-font-size-button":{"desktop":"14","tablet":"","mobile":"13","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-extras-button":{"line-height":1,"line-height-unit":"em","letter-spacing":2,"letter-spacing-unit":"px","text-transform":"uppercase","text-decoration":""},"secondary-font-extras-button":{"line-height":1,"line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-desktop-items":{"above":{"above_left":[],"above_left_center":[],"above_center":[],"above_right_center":[],"above_right":[]},"primary":{"primary_left":["social-icons-1"],"primary_left_center":[],"primary_center":["logo"],"primary_right_center":[],"primary_right":["button-1"]},"below":{"below_left":[],"below_left_center":[],"below_center":["menu-1"],"below_right_center":[],"below_right":[]},"flag":true},"header-mobile-items":{"popup":{"popup_content":["mobile-menu"]},"above":{"above_left":[],"above_center":[],"above_right":[]},"primary":{"primary_left":["logo"],"primary_center":[],"primary_right":["mobile-trigger"]},"below":{"below_left":[],"below_center":[],"below_right":[]},"flag":false},"hb-header-main-layout-width":"content","hb-header-height":{"desktop":70,"tablet":"","mobile":""},"hb-stack":{"desktop":"stack","tablet":"stack","mobile":"stack"},"hb-header-main-sep":0,"hb-header-main-sep-color":"#eaeaea","hb-header-main-menu-align":"inline","hb-header-bg-obj-responsive":{"desktop":{"background-color":"#ffffff","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hb-header-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"1.5","right":"","bottom":"1.5","left":""},"mobile":{"top":"1","right":"","bottom":"1","left":""},"desktop-unit":"px","tablet-unit":"em","mobile-unit":"em"},"hba-header-layout":"above-header-layout-1","hba-header-height":{"desktop":50,"tablet":"","mobile":""},"hba-stack":{"desktop":"stack","tablet":"stack","mobile":"stack"},"hba-header-separator":1,"hba-header-bottom-border-color":"#eaeaea","hba-header-bg-obj-responsive":{"desktop":{"background-color":"#ffffff","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hba-header-text-color-responsive":{"desktop":"","tablet":"","mobile":""},"hba-header-link-color-responsive":{"desktop":"","tablet":"","mobile":""},"hba-header-link-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"hba-header-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"","bottom":"0","left":""},"mobile":{"top":"0.5","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"em"},"hbb-header-layout":"below-header-layout-1","hbb-header-height":{"desktop":40,"tablet":"","mobile":""},"hbb-stack":{"desktop":"inline","tablet":"inline","mobile":"inline"},"hbb-header-separator":1,"hbb-header-bottom-border-color":"#eaeaea","hbb-header-bg-obj-responsive":{"desktop":{"background-color":"#eeeeee","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hbb-header-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"1","right":"","bottom":"1","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"em","mobile-unit":"px"},"section-footer-builder-layout-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-footer-builder-layout-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-above-header-builder-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-above-header-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-below-header-builder-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-below-header-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-header-mobile-trigger-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-primary-header-builder-padding":{"desktop":{"top":"8","right":"","bottom":"8","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-primary-header-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"title_tagline-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-header-search-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-account-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-mobile-menu-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-header-mobile-menu-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-above-footer-builder-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-above-footer-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-below-footer-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-footer-copyright-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"0","right":"0","bottom":"0","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-footer-menu-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-primary-footer-builder-padding":{"desktop":{"top":"104","right":"40","bottom":"64","left":"40"},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"64","right":"24","bottom":"64","left":"24"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-primary-footer-builder-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-header-woo-cart-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-header-woo-cart-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button1-text":"Order Online","header-button1-link-option":{"url":"#","new_tab":"","link_rel":""},"header-button1-font-family":"inherit","header-button1-font-weight":"inherit","header-button1-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button1-font-size":{"desktop":"13","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button1-text-color":{"desktop":"","tablet":"","mobile":""},"header-button1-back-color":{"desktop":"","tablet":"","mobile":""},"header-button1-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button1-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button1-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button1-border-size":{"top":"","right":"","bottom":"","left":""},"header-button1-border-color":{"desktop":"var(--ast-global-color-4)","tablet":"","mobile":""},"header-button1-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button1-border-radius":"","section-hb-button-1-padding":{"desktop":{"top":"13","right":"23","bottom":"13","left":"23"},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button1-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button1-text":"Button","footer-button1-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button1-font-family":"inherit","footer-button1-font-weight":"inherit","footer-button1-text-transform":"","footer-button1-line-height":"","footer-button1-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button1-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button1-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button1-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button1-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button1-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button1-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button1-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button1-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-1-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-1-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-1":"Insert HTML text here.","header-html-1color":{"desktop":"","tablet":"","mobile":""},"header-html-1link-color":{"desktop":"","tablet":"","mobile":""},"header-html-1link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-1":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-1":"inherit","font-family-section-hb-html-1":"inherit","font-extras-section-hb-html-1":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-1":"","footer-html-1color":{"desktop":"","tablet":"","mobile":""},"footer-html-1link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-1link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-1":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-1-alignment":{"desktop":"left","tablet":"left","mobile":"center"},"font-weight-section-fb-html-1":"inherit","font-family-section-fb-html-1":"inherit","font-extras-section-fb-html-1":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-1-margin":{"desktop":{"top":"","right":"","bottom":"16","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-1-space":{"desktop":24,"tablet":"","mobile":""},"header-social-1-bg-space":"","header-social-1-size":{"desktop":18,"tablet":"","mobile":""},"header-social-1-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-1-color":"","header-social-1-h-color":"","header-social-1-bg-color":"","header-social-1-bg-h-color":"","header-social-1-label-toggle":false,"header-social-1-color-type":"custom","header-social-1-brand-hover-toggle":false,"font-size-section-hb-social-icons-1":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-1":{"items":[{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook-round","label":"Facebook"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram-square","label":"Instagram"}],"flag":true},"section-hb-social-icons-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-1-space":{"desktop":24,"tablet":"","mobile":""},"footer-social-1-bg-space":"","footer-social-1-size":{"desktop":20,"tablet":"","mobile":""},"footer-social-1-radius":"","footer-social-1-color":{"desktop":"var(--ast-global-color-2)"},"footer-social-1-h-color":{"desktop":"var(--ast-global-color-3)"},"footer-social-1-bg-color":"","footer-social-1-bg-h-color":"","footer-social-1-label-toggle":false,"footer-social-1-color-type":"custom","footer-social-1-brand-color":"","footer-social-1-brand-label-color":"","footer-social-1-brand-hover-toggle":false,"font-size-section-fb-social-icons-1":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-1":{"items":[{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}],"flag":true},"footer-social-1-alignment":{"desktop":"left","tablet":"left","mobile":"center"},"section-fb-social-icons-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"0","left":""},"mobile":{"top":"0","right":"0","bottom":"0","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-1-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-1-color":{"desktop":"","tablet":"","mobile":""},"header-widget-1-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-1-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-1-font-family":"inherit","header-widget-1-font-weight":"inherit","header-widget-1-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-1-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-1-content-font-family":"inherit","header-widget-1-content-font-weight":"inherit","header-widget-1-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-1-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-1-title-color":{"desktop":"var(--ast-global-color-2)","tablet":"","mobile":""},"footer-widget-1-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-1-link-color":{"desktop":"var(--ast-global-color-3)","tablet":"","mobile":""},"footer-widget-1-link-h-color":{"desktop":"var(--ast-global-color-0)","tablet":"","mobile":""},"footer-widget-1-font-family":"inherit","footer-widget-1-font-weight":"inherit","footer-widget-1-text-transform":"","footer-widget-1-line-height":"","footer-widget-1-font-size":{"desktop":"24","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-1-content-font-family":"inherit","footer-widget-1-content-font-weight":"inherit","footer-widget-1-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-1-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-1":{"desktop":"left","tablet":"left","mobile":"center"},"sidebar-widgets-footer-widget-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":"96"},"tablet":{"top":"","right":"0","bottom":"","left":"100"},"mobile":{"top":"","right":"","bottom":"48","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu1-bg-color":"","header-menu1-color":"","header-menu1-h-bg-color":"","header-menu1-h-color":"","header-menu1-a-bg-color":"","header-menu1-a-color":"","header-menu1-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu1-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu1-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu1-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu1-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu1-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu1-menu-hover-animation":"","header-menu1-submenu-container-animation":"","section-hb-menu-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu1-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu1-submenu-item-border":false,"header-menu1-submenu-item-b-size":"1","header-menu1-submenu-item-b-color":"#eaeaea","header-menu1-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu1-submenu-top-offset":"","header-menu1-submenu-width":"","header-menu1-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu1-menu-stack-on-mobile":true,"header-menu1-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu1-font-weight":"inherit","header-menu1-font-family":"inherit","header-menu1-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"uppercase","text-decoration":""},"section-hb-divider-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button2-text":"Button","header-button2-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button2-font-family":"inherit","header-button2-font-weight":"inherit","header-button2-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button2-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button2-text-color":{"desktop":"","tablet":"","mobile":""},"header-button2-back-color":{"desktop":"","tablet":"","mobile":""},"header-button2-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button2-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button2-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button2-border-size":{"top":"","right":"","bottom":"","left":""},"header-button2-border-color":{"desktop":"","tablet":"","mobile":""},"header-button2-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button2-border-radius":"","section-hb-button-2-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button2-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button2-text":"Button","footer-button2-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button2-font-family":"inherit","footer-button2-font-weight":"inherit","footer-button2-text-transform":"","footer-button2-line-height":"","footer-button2-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button2-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button2-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button2-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button2-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button2-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button2-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button2-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button2-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-2-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-2-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-2":"Insert HTML text here.","header-html-2color":{"desktop":"","tablet":"","mobile":""},"header-html-2link-color":{"desktop":"","tablet":"","mobile":""},"header-html-2link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-2":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-2":"inherit","font-family-section-hb-html-2":"inherit","font-extras-section-hb-html-2":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-2":"Powered by [site_title]","footer-html-2color":{"desktop":"var(--ast-global-color-3)","tablet":"","mobile":""},"footer-html-2link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-2link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-2":{"desktop":"15","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-2-alignment":{"desktop":"right","tablet":"right","mobile":"center"},"font-weight-section-fb-html-2":"inherit","font-family-section-fb-html-2":"inherit","font-extras-section-fb-html-2":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"0","right":"0","bottom":"0","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-2-space":{"desktop":"","tablet":"","mobile":""},"header-social-2-bg-space":"","header-social-2-size":{"desktop":18,"tablet":"","mobile":""},"header-social-2-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-2-color":"","header-social-2-h-color":"","header-social-2-bg-color":"","header-social-2-bg-h-color":"","header-social-2-label-toggle":false,"header-social-2-color-type":"custom","header-social-2-brand-hover-toggle":false,"font-size-section-hb-social-icons-2":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-2":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-2-space":{"desktop":"","tablet":"","mobile":""},"footer-social-2-bg-space":"","footer-social-2-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-2-radius":"","footer-social-2-color":"","footer-social-2-h-color":"","footer-social-2-bg-color":"","footer-social-2-bg-h-color":"","footer-social-2-label-toggle":false,"footer-social-2-color-type":"custom","footer-social-2-brand-color":"","footer-social-2-brand-label-color":"","footer-social-2-brand-hover-toggle":false,"font-size-section-fb-social-icons-2":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-2":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-2-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-2-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-2-color":{"desktop":"","tablet":"","mobile":""},"header-widget-2-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-2-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-2-font-family":"inherit","header-widget-2-font-weight":"inherit","header-widget-2-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-2-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-2-content-font-family":"inherit","header-widget-2-content-font-weight":"inherit","header-widget-2-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-2-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-2-title-color":{"desktop":"var(--ast-global-color-2)","tablet":"","mobile":""},"footer-widget-2-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-2-link-color":{"desktop":"var(--ast-global-color-3)","tablet":"","mobile":""},"footer-widget-2-link-h-color":{"desktop":"var(--ast-global-color-0)","tablet":"","mobile":""},"footer-widget-2-font-family":"inherit","footer-widget-2-font-weight":"inherit","footer-widget-2-text-transform":"","footer-widget-2-line-height":"","footer-widget-2-font-size":{"desktop":"24","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-2-content-font-family":"inherit","footer-widget-2-content-font-weight":"inherit","footer-widget-2-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-2-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-2":{"desktop":"left","tablet":"left","mobile":"center"},"sidebar-widgets-footer-widget-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":"48"},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"","right":"","bottom":"48","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu2-bg-color":"","header-menu2-color":"","header-menu2-h-bg-color":"","header-menu2-h-color":"","header-menu2-a-bg-color":"","header-menu2-a-color":"","header-menu2-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu2-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu2-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu2-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu2-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu2-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu2-menu-hover-animation":"","header-menu2-submenu-container-animation":"","section-hb-menu-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu2-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu2-submenu-item-border":false,"header-menu2-submenu-item-b-size":"1","header-menu2-submenu-item-b-color":"#eaeaea","header-menu2-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu2-submenu-top-offset":"","header-menu2-submenu-width":"","header-menu2-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu2-menu-stack-on-mobile":true,"header-menu2-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu2-font-weight":"inherit","header-menu2-font-family":"inherit","header-menu2-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button3-text":"Button","header-button3-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button3-font-family":"inherit","header-button3-font-weight":"inherit","header-button3-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button3-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button3-text-color":{"desktop":"","tablet":"","mobile":""},"header-button3-back-color":{"desktop":"","tablet":"","mobile":""},"header-button3-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button3-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button3-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button3-border-size":{"top":"","right":"","bottom":"","left":""},"header-button3-border-color":{"desktop":"","tablet":"","mobile":""},"header-button3-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button3-border-radius":"","section-hb-button-3-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button3-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button3-text":"Button","footer-button3-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button3-font-family":"inherit","footer-button3-font-weight":"inherit","footer-button3-text-transform":"","footer-button3-line-height":"","footer-button3-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button3-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button3-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button3-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button3-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button3-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button3-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button3-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button3-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-3-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-3-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-3":"Insert HTML text here.","header-html-3color":{"desktop":"","tablet":"","mobile":""},"header-html-3link-color":{"desktop":"","tablet":"","mobile":""},"header-html-3link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-3":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-3":"inherit","font-family-section-hb-html-3":"inherit","font-extras-section-hb-html-3":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-3":"Insert HTML text here.","footer-html-3color":{"desktop":"","tablet":"","mobile":""},"footer-html-3link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-3link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-3":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-3-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-3":"inherit","font-family-section-fb-html-3":"inherit","font-extras-section-fb-html-3":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-3-space":{"desktop":"","tablet":"","mobile":""},"header-social-3-bg-space":"","header-social-3-size":{"desktop":18,"tablet":"","mobile":""},"header-social-3-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-3-color":"","header-social-3-h-color":"","header-social-3-bg-color":"","header-social-3-bg-h-color":"","header-social-3-label-toggle":false,"header-social-3-color-type":"custom","header-social-3-brand-hover-toggle":false,"font-size-section-hb-social-icons-3":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-3":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-3-space":{"desktop":"","tablet":"","mobile":""},"footer-social-3-bg-space":"","footer-social-3-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-3-radius":"","footer-social-3-color":"","footer-social-3-h-color":"","footer-social-3-bg-color":"","footer-social-3-bg-h-color":"","footer-social-3-label-toggle":false,"footer-social-3-color-type":"custom","footer-social-3-brand-color":"","footer-social-3-brand-label-color":"","footer-social-3-brand-hover-toggle":false,"font-size-section-fb-social-icons-3":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-3":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-3-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-3-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-3-color":{"desktop":"","tablet":"","mobile":""},"header-widget-3-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-3-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-3-font-family":"inherit","header-widget-3-font-weight":"inherit","header-widget-3-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-3-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-3-content-font-family":"inherit","header-widget-3-content-font-weight":"inherit","header-widget-3-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-3-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-3-title-color":{"desktop":"var(--ast-global-color-2)","tablet":"","mobile":""},"footer-widget-3-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-3-link-color":{"desktop":"var(--ast-global-color-3)","tablet":"","mobile":""},"footer-widget-3-link-h-color":{"desktop":"var(--ast-global-color-0)","tablet":"","mobile":""},"footer-widget-3-font-family":"inherit","footer-widget-3-font-weight":"inherit","footer-widget-3-text-transform":"","footer-widget-3-line-height":"","footer-widget-3-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-3-content-font-family":"inherit","footer-widget-3-content-font-weight":"inherit","footer-widget-3-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-3-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-3":{"desktop":"left","tablet":"left","mobile":"center"},"sidebar-widgets-footer-widget-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"0","bottom":"","left":"100"},"mobile":{"top":"","right":"","bottom":"","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu3-bg-color":"","header-menu3-color":"","header-menu3-h-bg-color":"","header-menu3-h-color":"","header-menu3-a-bg-color":"","header-menu3-a-color":"","header-menu3-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu3-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu3-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu3-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu3-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu3-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu3-menu-hover-animation":"","header-menu3-submenu-container-animation":"","section-hb-menu-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu3-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu3-submenu-item-border":false,"header-menu3-submenu-item-b-size":"1","header-menu3-submenu-item-b-color":"#eaeaea","header-menu3-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu3-submenu-top-offset":"","header-menu3-submenu-width":"","header-menu3-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu3-menu-stack-on-mobile":true,"header-menu3-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu3-font-weight":"inherit","header-menu3-font-family":"inherit","header-menu3-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button4-text":"Button","header-button4-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button4-font-family":"inherit","header-button4-font-weight":"inherit","header-button4-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button4-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button4-text-color":{"desktop":"","tablet":"","mobile":""},"header-button4-back-color":{"desktop":"","tablet":"","mobile":""},"header-button4-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button4-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button4-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button4-border-size":{"top":"","right":"","bottom":"","left":""},"header-button4-border-color":{"desktop":"","tablet":"","mobile":""},"header-button4-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button4-border-radius":"","section-hb-button-4-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button4-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button4-text":"Button","footer-button4-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button4-font-family":"inherit","footer-button4-font-weight":"inherit","footer-button4-text-transform":"","footer-button4-line-height":"","footer-button4-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button4-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button4-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button4-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button4-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button4-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button4-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button4-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button4-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-4-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-4-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-4":"Insert HTML text here.","header-html-4color":{"desktop":"","tablet":"","mobile":""},"header-html-4link-color":{"desktop":"","tablet":"","mobile":""},"header-html-4link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-4":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-4":"inherit","font-family-section-hb-html-4":"inherit","font-extras-section-hb-html-4":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-4":"Insert HTML text here.","footer-html-4color":{"desktop":"","tablet":"","mobile":""},"footer-html-4link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-4link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-4":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-4-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-4":"inherit","font-family-section-fb-html-4":"inherit","font-extras-section-fb-html-4":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-4-space":{"desktop":"","tablet":"","mobile":""},"header-social-4-bg-space":"","header-social-4-size":{"desktop":18,"tablet":"","mobile":""},"header-social-4-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-4-color":"","header-social-4-h-color":"","header-social-4-bg-color":"","header-social-4-bg-h-color":"","header-social-4-label-toggle":false,"header-social-4-color-type":"custom","header-social-4-brand-hover-toggle":false,"font-size-section-hb-social-icons-4":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-4":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-4-space":{"desktop":"","tablet":"","mobile":""},"footer-social-4-bg-space":"","footer-social-4-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-4-radius":"","footer-social-4-color":"","footer-social-4-h-color":"","footer-social-4-bg-color":"","footer-social-4-bg-h-color":"","footer-social-4-label-toggle":false,"footer-social-4-color-type":"custom","footer-social-4-brand-color":"","footer-social-4-brand-label-color":"","footer-social-4-brand-hover-toggle":false,"font-size-section-fb-social-icons-4":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-4":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-4-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-4-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-4-color":{"desktop":"","tablet":"","mobile":""},"header-widget-4-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-4-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-4-font-family":"inherit","header-widget-4-font-weight":"inherit","header-widget-4-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-4-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-4-content-font-family":"inherit","header-widget-4-content-font-weight":"inherit","header-widget-4-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-4-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-4-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-4-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-4-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-4-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-4-font-family":"inherit","footer-widget-4-font-weight":"inherit","footer-widget-4-text-transform":"","footer-widget-4-line-height":"","footer-widget-4-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-4-content-font-family":"inherit","footer-widget-4-content-font-weight":"inherit","footer-widget-4-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-4-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-4":{"desktop":"left","tablet":"left","mobile":"center"},"sidebar-widgets-footer-widget-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu4-bg-color":"","header-menu4-color":"","header-menu4-h-bg-color":"","header-menu4-h-color":"","header-menu4-a-bg-color":"","header-menu4-a-color":"","header-menu4-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu4-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu4-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu4-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu4-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu4-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu4-menu-hover-animation":"","header-menu4-submenu-container-animation":"","section-hb-menu-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu4-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu4-submenu-item-border":false,"header-menu4-submenu-item-b-size":"1","header-menu4-submenu-item-b-color":"#eaeaea","header-menu4-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu4-submenu-top-offset":"","header-menu4-submenu-width":"","header-menu4-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu4-menu-stack-on-mobile":true,"header-menu4-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu4-font-weight":"inherit","header-menu4-font-family":"inherit","header-menu4-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button5-text":"Button","header-button5-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button5-font-family":"inherit","header-button5-font-weight":"inherit","header-button5-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button5-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button5-text-color":{"desktop":"","tablet":"","mobile":""},"header-button5-back-color":{"desktop":"","tablet":"","mobile":""},"header-button5-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button5-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button5-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button5-border-size":{"top":"","right":"","bottom":"","left":""},"header-button5-border-color":{"desktop":"","tablet":"","mobile":""},"header-button5-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button5-border-radius":"","section-hb-button-5-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button5-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button5-text":"Button","footer-button5-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button5-font-family":"inherit","footer-button5-font-weight":"inherit","footer-button5-text-transform":"","footer-button5-line-height":"","footer-button5-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button5-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button5-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button5-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button5-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button5-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button5-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button5-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button5-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-5-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-5-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-5":"Insert HTML text here.","header-html-5color":{"desktop":"","tablet":"","mobile":""},"header-html-5link-color":{"desktop":"","tablet":"","mobile":""},"header-html-5link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-5":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-5":"inherit","font-family-section-hb-html-5":"inherit","font-extras-section-hb-html-5":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-5":"Insert HTML text here.","footer-html-5color":{"desktop":"","tablet":"","mobile":""},"footer-html-5link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-5link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-5":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-5-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-5":"inherit","font-family-section-fb-html-5":"inherit","font-extras-section-fb-html-5":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-5-space":{"desktop":"","tablet":"","mobile":""},"header-social-5-bg-space":"","header-social-5-size":{"desktop":18,"tablet":"","mobile":""},"header-social-5-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-5-color":"","header-social-5-h-color":"","header-social-5-bg-color":"","header-social-5-bg-h-color":"","header-social-5-label-toggle":false,"header-social-5-color-type":"custom","header-social-5-brand-hover-toggle":false,"font-size-section-hb-social-icons-5":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-5":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-5-space":{"desktop":"","tablet":"","mobile":""},"footer-social-5-bg-space":"","footer-social-5-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-5-radius":"","footer-social-5-color":"","footer-social-5-h-color":"","footer-social-5-bg-color":"","footer-social-5-bg-h-color":"","footer-social-5-label-toggle":false,"footer-social-5-color-type":"custom","footer-social-5-brand-color":"","footer-social-5-brand-label-color":"","footer-social-5-brand-hover-toggle":false,"font-size-section-fb-social-icons-5":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-5":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-5-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-5-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-5-color":{"desktop":"","tablet":"","mobile":""},"header-widget-5-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-5-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-5-font-family":"inherit","header-widget-5-font-weight":"inherit","header-widget-5-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-5-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-5-content-font-family":"inherit","header-widget-5-content-font-weight":"inherit","header-widget-5-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-5-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-5-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-5-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-5-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-5-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-5-font-family":"inherit","footer-widget-5-font-weight":"inherit","footer-widget-5-text-transform":"","footer-widget-5-line-height":"","footer-widget-5-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-5-content-font-family":"inherit","footer-widget-5-content-font-weight":"inherit","footer-widget-5-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-5-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-5":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu5-bg-color":"","header-menu5-color":"","header-menu5-h-bg-color":"","header-menu5-h-color":"","header-menu5-a-bg-color":"","header-menu5-a-color":"","header-menu5-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu5-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu5-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu5-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu5-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu5-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu5-menu-hover-animation":"","header-menu5-submenu-container-animation":"","section-hb-menu-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu5-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu5-submenu-item-border":false,"header-menu5-submenu-item-b-size":"1","header-menu5-submenu-item-b-color":"#eaeaea","header-menu5-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu5-submenu-top-offset":"","header-menu5-submenu-width":"","header-menu5-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu5-menu-stack-on-mobile":true,"header-menu5-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu5-font-weight":"inherit","header-menu5-font-family":"inherit","header-menu5-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-5-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button6-text":"Button","header-button6-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button6-font-family":"inherit","header-button6-font-weight":"inherit","header-button6-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button6-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button6-text-color":{"desktop":"","tablet":"","mobile":""},"header-button6-back-color":{"desktop":"","tablet":"","mobile":""},"header-button6-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button6-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button6-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button6-border-size":{"top":"","right":"","bottom":"","left":""},"header-button6-border-color":{"desktop":"","tablet":"","mobile":""},"header-button6-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button6-border-radius":"","section-hb-button-6-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button6-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button6-text":"Button","footer-button6-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button6-font-family":"inherit","footer-button6-font-weight":"inherit","footer-button6-text-transform":"","footer-button6-line-height":"","footer-button6-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button6-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button6-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button6-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button6-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button6-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button6-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button6-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button6-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-6-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-6-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-6":"Insert HTML text here.","header-html-6color":{"desktop":"","tablet":"","mobile":""},"header-html-6link-color":{"desktop":"","tablet":"","mobile":""},"header-html-6link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-6":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-6":"inherit","font-family-section-hb-html-6":"inherit","font-extras-section-hb-html-6":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-6":"Insert HTML text here.","footer-html-6color":{"desktop":"","tablet":"","mobile":""},"footer-html-6link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-6link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-6":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-6-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-6":"inherit","font-family-section-fb-html-6":"inherit","font-extras-section-fb-html-6":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-6-space":{"desktop":"","tablet":"","mobile":""},"header-social-6-bg-space":"","header-social-6-size":{"desktop":18,"tablet":"","mobile":""},"header-social-6-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-6-color":"","header-social-6-h-color":"","header-social-6-bg-color":"","header-social-6-bg-h-color":"","header-social-6-label-toggle":false,"header-social-6-color-type":"custom","header-social-6-brand-hover-toggle":false,"font-size-section-hb-social-icons-6":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-6":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-6-space":{"desktop":"","tablet":"","mobile":""},"footer-social-6-bg-space":"","footer-social-6-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-6-radius":"","footer-social-6-color":"","footer-social-6-h-color":"","footer-social-6-bg-color":"","footer-social-6-bg-h-color":"","footer-social-6-label-toggle":false,"footer-social-6-color-type":"custom","footer-social-6-brand-color":"","footer-social-6-brand-label-color":"","footer-social-6-brand-hover-toggle":false,"font-size-section-fb-social-icons-6":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-6":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-6-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-6-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-6-color":{"desktop":"","tablet":"","mobile":""},"header-widget-6-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-6-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-6-font-family":"inherit","header-widget-6-font-weight":"inherit","header-widget-6-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-6-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-6-content-font-family":"inherit","header-widget-6-content-font-weight":"inherit","header-widget-6-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-6-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-6-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-6-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-6-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-6-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-6-font-family":"inherit","footer-widget-6-font-weight":"inherit","footer-widget-6-text-transform":"","footer-widget-6-line-height":"","footer-widget-6-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-6-content-font-family":"inherit","footer-widget-6-content-font-weight":"inherit","footer-widget-6-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-6-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-6":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu6-bg-color":"","header-menu6-color":"","header-menu6-h-bg-color":"","header-menu6-h-color":"","header-menu6-a-bg-color":"","header-menu6-a-color":"","header-menu6-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu6-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu6-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu6-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu6-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu6-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu6-menu-hover-animation":"","header-menu6-submenu-container-animation":"","section-hb-menu-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu6-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu6-submenu-item-border":false,"header-menu6-submenu-item-b-size":"1","header-menu6-submenu-item-b-color":"#eaeaea","header-menu6-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu6-submenu-top-offset":"","header-menu6-submenu-width":"","header-menu6-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu6-menu-stack-on-mobile":true,"header-menu6-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu6-font-weight":"inherit","header-menu6-font-family":"inherit","header-menu6-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-6-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button7-text":"Button","header-button7-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button7-font-family":"inherit","header-button7-font-weight":"inherit","header-button7-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button7-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button7-text-color":{"desktop":"","tablet":"","mobile":""},"header-button7-back-color":{"desktop":"","tablet":"","mobile":""},"header-button7-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button7-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button7-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button7-border-size":{"top":"","right":"","bottom":"","left":""},"header-button7-border-color":{"desktop":"","tablet":"","mobile":""},"header-button7-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button7-border-radius":"","section-hb-button-7-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button7-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button7-text":"Button","footer-button7-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button7-font-family":"inherit","footer-button7-font-weight":"inherit","footer-button7-text-transform":"","footer-button7-line-height":"","footer-button7-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button7-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button7-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button7-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button7-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button7-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button7-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button7-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button7-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-7-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-7-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-7":"Insert HTML text here.","header-html-7color":{"desktop":"","tablet":"","mobile":""},"header-html-7link-color":{"desktop":"","tablet":"","mobile":""},"header-html-7link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-7":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-7":"inherit","font-family-section-hb-html-7":"inherit","font-extras-section-hb-html-7":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-7":"Insert HTML text here.","footer-html-7color":{"desktop":"","tablet":"","mobile":""},"footer-html-7link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-7link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-7":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-7-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-7":"inherit","font-family-section-fb-html-7":"inherit","font-extras-section-fb-html-7":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-7-space":{"desktop":"","tablet":"","mobile":""},"header-social-7-bg-space":"","header-social-7-size":{"desktop":18,"tablet":"","mobile":""},"header-social-7-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-7-color":"","header-social-7-h-color":"","header-social-7-bg-color":"","header-social-7-bg-h-color":"","header-social-7-label-toggle":false,"header-social-7-color-type":"custom","header-social-7-brand-hover-toggle":false,"font-size-section-hb-social-icons-7":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-7":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-7-space":{"desktop":"","tablet":"","mobile":""},"footer-social-7-bg-space":"","footer-social-7-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-7-radius":"","footer-social-7-color":"","footer-social-7-h-color":"","footer-social-7-bg-color":"","footer-social-7-bg-h-color":"","footer-social-7-label-toggle":false,"footer-social-7-color-type":"custom","footer-social-7-brand-color":"","footer-social-7-brand-label-color":"","footer-social-7-brand-hover-toggle":false,"font-size-section-fb-social-icons-7":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-7":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-7-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-7-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-7-color":{"desktop":"","tablet":"","mobile":""},"header-widget-7-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-7-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-7-font-family":"inherit","header-widget-7-font-weight":"inherit","header-widget-7-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-7-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-7-content-font-family":"inherit","header-widget-7-content-font-weight":"inherit","header-widget-7-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-7-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-7-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-7-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-7-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-7-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-7-font-family":"inherit","footer-widget-7-font-weight":"inherit","footer-widget-7-text-transform":"","footer-widget-7-line-height":"","footer-widget-7-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-7-content-font-family":"inherit","footer-widget-7-content-font-weight":"inherit","footer-widget-7-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-7-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-7":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu7-bg-color":"","header-menu7-color":"","header-menu7-h-bg-color":"","header-menu7-h-color":"","header-menu7-a-bg-color":"","header-menu7-a-color":"","header-menu7-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu7-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu7-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu7-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu7-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu7-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu7-menu-hover-animation":"","header-menu7-submenu-container-animation":"","section-hb-menu-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu7-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu7-submenu-item-border":false,"header-menu7-submenu-item-b-size":"1","header-menu7-submenu-item-b-color":"#eaeaea","header-menu7-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu7-submenu-top-offset":"","header-menu7-submenu-width":"","header-menu7-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu7-menu-stack-on-mobile":true,"header-menu7-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu7-font-weight":"inherit","header-menu7-font-family":"inherit","header-menu7-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-7-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button8-text":"Button","header-button8-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button8-font-family":"inherit","header-button8-font-weight":"inherit","header-button8-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button8-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button8-text-color":{"desktop":"","tablet":"","mobile":""},"header-button8-back-color":{"desktop":"","tablet":"","mobile":""},"header-button8-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button8-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button8-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button8-border-size":{"top":"","right":"","bottom":"","left":""},"header-button8-border-color":{"desktop":"","tablet":"","mobile":""},"header-button8-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button8-border-radius":"","section-hb-button-8-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button8-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button8-text":"Button","footer-button8-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button8-font-family":"inherit","footer-button8-font-weight":"inherit","footer-button8-text-transform":"","footer-button8-line-height":"","footer-button8-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button8-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button8-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button8-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button8-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button8-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button8-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button8-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button8-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-8-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-8-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-8":"Insert HTML text here.","header-html-8color":{"desktop":"","tablet":"","mobile":""},"header-html-8link-color":{"desktop":"","tablet":"","mobile":""},"header-html-8link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-8":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-8":"inherit","font-family-section-hb-html-8":"inherit","font-extras-section-hb-html-8":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-8":"Insert HTML text here.","footer-html-8color":{"desktop":"","tablet":"","mobile":""},"footer-html-8link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-8link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-8":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-8-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-8":"inherit","font-family-section-fb-html-8":"inherit","font-extras-section-fb-html-8":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-8-space":{"desktop":"","tablet":"","mobile":""},"header-social-8-bg-space":"","header-social-8-size":{"desktop":18,"tablet":"","mobile":""},"header-social-8-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-8-color":"","header-social-8-h-color":"","header-social-8-bg-color":"","header-social-8-bg-h-color":"","header-social-8-label-toggle":false,"header-social-8-color-type":"custom","header-social-8-brand-hover-toggle":false,"font-size-section-hb-social-icons-8":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-8":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-8-space":{"desktop":"","tablet":"","mobile":""},"footer-social-8-bg-space":"","footer-social-8-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-8-radius":"","footer-social-8-color":"","footer-social-8-h-color":"","footer-social-8-bg-color":"","footer-social-8-bg-h-color":"","footer-social-8-label-toggle":false,"footer-social-8-color-type":"custom","footer-social-8-brand-color":"","footer-social-8-brand-label-color":"","footer-social-8-brand-hover-toggle":false,"font-size-section-fb-social-icons-8":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-8":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-8-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-8-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-8-color":{"desktop":"","tablet":"","mobile":""},"header-widget-8-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-8-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-8-font-family":"inherit","header-widget-8-font-weight":"inherit","header-widget-8-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-8-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-8-content-font-family":"inherit","header-widget-8-content-font-weight":"inherit","header-widget-8-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-8-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-8-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-8-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-8-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-8-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-8-font-family":"inherit","footer-widget-8-font-weight":"inherit","footer-widget-8-text-transform":"","footer-widget-8-line-height":"","footer-widget-8-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-8-content-font-family":"inherit","footer-widget-8-content-font-weight":"inherit","footer-widget-8-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-8-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-8":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu8-bg-color":"","header-menu8-color":"","header-menu8-h-bg-color":"","header-menu8-h-color":"","header-menu8-a-bg-color":"","header-menu8-a-color":"","header-menu8-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu8-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu8-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu8-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu8-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu8-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu8-menu-hover-animation":"","header-menu8-submenu-container-animation":"","section-hb-menu-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu8-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu8-submenu-item-border":false,"header-menu8-submenu-item-b-size":"1","header-menu8-submenu-item-b-color":"#eaeaea","header-menu8-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu8-submenu-top-offset":"","header-menu8-submenu-width":"","header-menu8-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu8-menu-stack-on-mobile":true,"header-menu8-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu8-font-weight":"inherit","header-menu8-font-family":"inherit","header-menu8-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-8-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button9-text":"Button","header-button9-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button9-font-family":"inherit","header-button9-font-weight":"inherit","header-button9-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button9-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button9-text-color":{"desktop":"","tablet":"","mobile":""},"header-button9-back-color":{"desktop":"","tablet":"","mobile":""},"header-button9-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button9-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button9-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button9-border-size":{"top":"","right":"","bottom":"","left":""},"header-button9-border-color":{"desktop":"","tablet":"","mobile":""},"header-button9-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button9-border-radius":"","section-hb-button-9-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button9-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button9-text":"Button","footer-button9-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button9-font-family":"inherit","footer-button9-font-weight":"inherit","footer-button9-text-transform":"","footer-button9-line-height":"","footer-button9-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button9-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button9-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button9-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button9-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button9-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button9-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button9-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button9-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-9-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-9-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-9":"Insert HTML text here.","header-html-9color":{"desktop":"","tablet":"","mobile":""},"header-html-9link-color":{"desktop":"","tablet":"","mobile":""},"header-html-9link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-9":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-9":"inherit","font-family-section-hb-html-9":"inherit","font-extras-section-hb-html-9":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-9":"Insert HTML text here.","footer-html-9color":{"desktop":"","tablet":"","mobile":""},"footer-html-9link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-9link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-9":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-9-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-9":"inherit","font-family-section-fb-html-9":"inherit","font-extras-section-fb-html-9":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-9-space":{"desktop":"","tablet":"","mobile":""},"header-social-9-bg-space":"","header-social-9-size":{"desktop":18,"tablet":"","mobile":""},"header-social-9-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-9-color":"","header-social-9-h-color":"","header-social-9-bg-color":"","header-social-9-bg-h-color":"","header-social-9-label-toggle":false,"header-social-9-color-type":"custom","header-social-9-brand-hover-toggle":false,"font-size-section-hb-social-icons-9":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-9":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-9-space":{"desktop":"","tablet":"","mobile":""},"footer-social-9-bg-space":"","footer-social-9-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-9-radius":"","footer-social-9-color":"","footer-social-9-h-color":"","footer-social-9-bg-color":"","footer-social-9-bg-h-color":"","footer-social-9-label-toggle":false,"footer-social-9-color-type":"custom","footer-social-9-brand-color":"","footer-social-9-brand-label-color":"","footer-social-9-brand-hover-toggle":false,"font-size-section-fb-social-icons-9":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-9":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-9-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-9-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-9-color":{"desktop":"","tablet":"","mobile":""},"header-widget-9-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-9-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-9-font-family":"inherit","header-widget-9-font-weight":"inherit","header-widget-9-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-9-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-9-content-font-family":"inherit","header-widget-9-content-font-weight":"inherit","header-widget-9-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-9-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-9-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-9-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-9-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-9-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-9-font-family":"inherit","footer-widget-9-font-weight":"inherit","footer-widget-9-text-transform":"","footer-widget-9-line-height":"","footer-widget-9-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-9-content-font-family":"inherit","footer-widget-9-content-font-weight":"inherit","footer-widget-9-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-9-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-9":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu9-bg-color":"","header-menu9-color":"","header-menu9-h-bg-color":"","header-menu9-h-color":"","header-menu9-a-bg-color":"","header-menu9-a-color":"","header-menu9-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu9-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu9-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu9-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu9-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu9-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu9-menu-hover-animation":"","header-menu9-submenu-container-animation":"","section-hb-menu-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu9-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu9-submenu-item-border":false,"header-menu9-submenu-item-b-size":"1","header-menu9-submenu-item-b-color":"#eaeaea","header-menu9-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu9-submenu-top-offset":"","header-menu9-submenu-width":"","header-menu9-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu9-menu-stack-on-mobile":true,"header-menu9-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu9-font-weight":"inherit","header-menu9-font-family":"inherit","header-menu9-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-9-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button10-text":"Button","header-button10-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"header-button10-font-family":"inherit","header-button10-font-weight":"inherit","header-button10-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-button10-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button10-text-color":{"desktop":"","tablet":"","mobile":""},"header-button10-back-color":{"desktop":"","tablet":"","mobile":""},"header-button10-text-h-color":{"desktop":"","tablet":"","mobile":""},"header-button10-back-h-color":{"desktop":"","tablet":"","mobile":""},"header-button10-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button10-border-size":{"top":"","right":"","bottom":"","left":""},"header-button10-border-color":{"desktop":"","tablet":"","mobile":""},"header-button10-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-button10-border-radius":"","section-hb-button-10-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-hb-button-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-button10-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button10-text":"Button","footer-button10-link-option":{"url":"https:\/\/www.wpastra.com","new_tab":false,"link_rel":""},"footer-button10-font-family":"inherit","footer-button10-font-weight":"inherit","footer-button10-text-transform":"","footer-button10-line-height":"","footer-button10-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button10-text-color":{"desktop":"","tablet":"","mobile":""},"footer-button10-back-color":{"desktop":"","tablet":"","mobile":""},"footer-button10-text-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button10-back-h-color":{"desktop":"","tablet":"","mobile":""},"footer-button10-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button10-border-size":{"top":"","right":"","bottom":"","left":""},"footer-button10-border-color":{"desktop":"","tablet":"","mobile":""},"footer-button10-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-button-10-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-button-10-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-button-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-html-10":"Insert HTML text here.","header-html-10color":{"desktop":"","tablet":"","mobile":""},"header-html-10link-color":{"desktop":"","tablet":"","mobile":""},"header-html-10link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-hb-html-10":{"desktop":15,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-hb-html-10":"inherit","font-family-section-hb-html-10":"inherit","font-extras-section-hb-html-10":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-html-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-10":"Insert HTML text here.","footer-html-10color":{"desktop":"","tablet":"","mobile":""},"footer-html-10link-color":{"desktop":"","tablet":"","mobile":""},"footer-html-10link-h-color":{"desktop":"","tablet":"","mobile":""},"font-size-section-fb-html-10":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-html-10-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"font-weight-section-fb-html-10":"inherit","font-family-section-fb-html-10":"inherit","font-extras-section-fb-html-10":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-fb-html-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-10-space":{"desktop":"","tablet":"","mobile":""},"header-social-10-bg-space":"","header-social-10-size":{"desktop":18,"tablet":"","mobile":""},"header-social-10-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-10-color":"","header-social-10-h-color":"","header-social-10-bg-color":"","header-social-10-bg-h-color":"","header-social-10-label-toggle":false,"header-social-10-color-type":"custom","header-social-10-brand-hover-toggle":false,"font-size-section-hb-social-icons-10":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-social-icons-10":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"section-hb-social-icons-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-10-space":{"desktop":"","tablet":"","mobile":""},"footer-social-10-bg-space":"","footer-social-10-size":{"desktop":18,"tablet":"","mobile":""},"footer-social-10-radius":"","footer-social-10-color":"","footer-social-10-h-color":"","footer-social-10-bg-color":"","footer-social-10-bg-h-color":"","footer-social-10-label-toggle":false,"footer-social-10-color-type":"custom","footer-social-10-brand-color":"","footer-social-10-brand-label-color":"","footer-social-10-brand-hover-toggle":false,"font-size-section-fb-social-icons-10":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-social-icons-10":{"items":[{"id":"facebook","enabled":true,"source":"icon","url":"","color":"#557dbc","background":"transparent","icon":"facebook","label":"Facebook"},{"id":"twitter","enabled":true,"source":"icon","url":"","color":"#7acdee","background":"transparent","icon":"twitter","label":"Twitter"},{"id":"instagram","enabled":true,"source":"icon","url":"","color":"#8a3ab9","background":"transparent","icon":"instagram","label":"Instagram"}]},"footer-social-10-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-fb-social-icons-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-10-title-color":{"desktop":"","tablet":"","mobile":""},"header-widget-10-color":{"desktop":"","tablet":"","mobile":""},"header-widget-10-link-color":{"desktop":"","tablet":"","mobile":""},"header-widget-10-link-h-color":{"desktop":"","tablet":"","mobile":""},"header-widget-10-font-family":"inherit","header-widget-10-font-weight":"inherit","header-widget-10-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-10-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"header-widget-10-content-font-family":"inherit","header-widget-10-content-font-weight":"inherit","header-widget-10-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-widget-10-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"sidebar-widgets-header-widget-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-10-title-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-10-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-10-link-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-10-link-h-color":{"desktop":"","tablet":"","mobile":""},"footer-widget-10-font-family":"inherit","footer-widget-10-font-weight":"inherit","footer-widget-10-text-transform":"","footer-widget-10-line-height":"","footer-widget-10-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-10-content-font-family":"inherit","footer-widget-10-content-font-weight":"inherit","footer-widget-10-content-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-widget-10-content-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-widget-alignment-10":{"desktop":"left","tablet":"center","mobile":"center"},"sidebar-widgets-footer-widget-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu10-bg-color":"","header-menu10-color":"","header-menu10-h-bg-color":"","header-menu10-h-color":"","header-menu10-a-bg-color":"","header-menu10-a-color":"","header-menu10-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-menu10-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu10-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu10-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu10-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu10-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-menu10-menu-hover-animation":"","header-menu10-submenu-container-animation":"","section-hb-menu-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu10-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu10-submenu-item-border":false,"header-menu10-submenu-item-b-size":"1","header-menu10-submenu-item-b-color":"#eaeaea","header-menu10-submenu-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu10-submenu-top-offset":"","header-menu10-submenu-width":"","header-menu10-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-menu10-menu-stack-on-mobile":true,"header-menu10-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-menu10-font-weight":"inherit","header-menu10-font-family":"inherit","header-menu10-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"section-hb-divider-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"section-fb-divider-10-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"sticky-header-on-devices":"desktop","sticky-header-style":"none","footer-desktop-items":{"above":{"above_1":[],"above_2":[],"above_3":[],"above_4":[],"above_5":[],"above_6":[]},"primary":{"primary_1":["widget-4","social-icons-1"],"primary_2":["widget-1"],"primary_3":["widget-2"],"primary_4":["widget-3"],"primary_5":[],"primary_6":[]},"below":{"below_1":["copyright"],"below_2":["html-2"],"below_3":[],"below_4":[],"below_5":[],"below_6":[]},"flag":false,"group":"astra-settings[footer-desktop-items]","rows":["above","primary","below"],"zones":{"above":{"above_1":"Above Section 1","above_2":"Above Section 2","above_3":"Above Section 3","above_4":"Above Section 4","above_5":"Above Section 5","above_6":"Above Section 6"},"primary":{"primary_1":"Primary Section 1","primary_2":"Primary Section 2","primary_3":"Primary Section 3","primary_4":"Primary Section 4","primary_5":"Primary Section 5","primary_6":"Primary Section 6"},"below":{"below_1":"Below Section 1","below_2":"Below Section 2","below_3":"Below Section 3","below_4":"Below Section 4","below_5":"Below Section 5","below_6":"Below Section 6"}},"layouts":{"above":{"column":"2","layout":{"desktop":"2-equal","tablet":"2-equal","mobile":"full"}},"primary":{"column":"4","layout":{"mobile":"full","tablet":"2-equal","desktop":"4-equal"}},"below":{"column":"2","layout":{"mobile":"full","tablet":"2-equal","desktop":"2-equal"}}},"status":{"above":true,"primary":true,"below":true},"popup":{"popup_content":[]}},"hba-footer-height":60,"hba-footer-column":"2","hba-footer-layout":{"desktop":"2-equal","tablet":"2-equal","mobile":"full"},"hba-footer-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hbb-footer-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","background-type":"color","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hb-footer-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","background-type":"color","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hbb-footer-top-border-color":"","hbb-footer-separator":"","section-header-builder-layout-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"hbb-footer-height":50,"hbb-footer-column":"2","hbb-footer-layout":{"desktop":"2-equal","tablet":"2-equal","mobile":"full","flag":true},"hba-footer-layout-width":"content","hb-footer-layout-width":"content","hbb-footer-layout-width":"content","hba-footer-vertical-alignment":"flex-start","hb-footer-vertical-alignment":"flex-start","hbb-footer-vertical-alignment":"center","footer-bg-obj-responsive":{"desktop":{"background-color":"var(--ast-global-color-5)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"color","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"hb-footer-column":"4","hb-footer-separator":1,"hb-footer-bottom-border-color":"#e6e6e6","hb-footer-layout":{"desktop":"4-equal","tablet":"2-equal","mobile":"full","flag":false},"hb-footer-main-sep":1,"hb-footer-main-sep-color":"var(--ast-global-color-5)","footer-copyright-editor":"Copyright [copyright] [current_year] [site_title]","footer-copyright-color":"var(--ast-global-color-3)","line-height-section-footer-copyright":2,"footer-copyright-alignment":{"desktop":"left","tablet":"left","mobile":"center"},"font-size-section-footer-copyright":{"desktop":"15","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-weight-section-footer-copyright":"inherit","font-family-section-footer-copyright":"inherit","font-extras-section-footer-copyright":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-menu-alignment":{"desktop":"center","tablet":"center","mobile":"center"},"section-below-footer-builder-padding":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"40","right":"40","bottom":"40","left":"40"},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-search-icon-space":{"desktop":18,"tablet":18,"mobile":18},"header-search-icon-color":{"desktop":"","tablet":"","mobile":""},"header-search-width":{"desktop":"","tablet":"","mobile":""},"live-search":false,"live-search-post-types":{"post":1,"page":1},"transparent-header-social-icons-color":{"desktop":"var(--ast-global-color-4)","tablet":"","mobile":""},"transparent-header-social-icons-h-color":{"desktop":"var(--ast-global-color-4)","tablet":"","mobile":""},"transparent-header-social-icons-bg-color":{"desktop":"","tablet":"","mobile":""},"transparent-header-social-icons-bg-h-color":{"desktop":"","tablet":"","mobile":""},"transparent-header-html-text-color":"","transparent-header-html-link-color":"","transparent-header-html-link-h-color":"","transparent-header-widget-title-color":"","transparent-header-widget-content-color":"","transparent-header-widget-link-color":"","transparent-header-widget-link-h-color":"","transparent-header-button-text-color":"var(--ast-global-color-4)","transparent-header-button-text-h-color":"var(--ast-global-color-2)","transparent-header-button-bg-color":"","transparent-header-button-bg-h-color":"var(--ast-global-color-4)","off-canvas-layout":"side-panel","off-canvas-slide":"right","header-builder-menu-toggle-target":"icon","header-offcanvas-content-alignment":"flex-start","off-canvas-background":{"background-color":"var(--ast-global-color-4)","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-media":"","background-type":"color","overlay-type":"none","overlay-color":"","overlay-gradient":""},"off-canvas-close-color":"#3a3a3a","mobile-header-type":"dropdown","off-canvas-inner-spacing":"","footer-menu-layout":{"desktop":"horizontal","tablet":"vertical","mobile":"vertical"},"footer-menu-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"footer-menu-color-responsive":{"desktop":"","tablet":"","mobile":""},"footer-menu-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"footer-menu-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"footer-menu-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"footer-menu-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"footer-menu-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"footer-menu-font-weight":"inherit","footer-menu-font-family":"inherit","footer-menu-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"footer-main-menu-spacing":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"20","bottom":"0","left":"20"},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-trigger-icon":"menu","mobile-header-toggle-icon-size":20,"mobile-header-toggle-btn-border-size":{"top":1,"right":1,"bottom":1,"left":1},"mobile-header-toggle-border-radius":2,"mobile-header-toggle-border-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"mobile-header-label-font-family":"inherit","mobile-header-label-font-weight":"inherit","mobile-header-label-text-transform":"","mobile-header-label-line-height":"","mobile-header-label-font-size":"","global-color-palette":{"labels":["Theme Color","Link Hover Color","Heading Color","Text Color","Background Color","Extra Color 1","Extra Color 2","Extra Color 3","Extra Color 4"],"palette":["#e4032f","#fd0d3c","#121212","#4a4a4a","#f7f6f2","#ffffff","#fecc00","#000000","rgba(226,3,48,0.25)"],"flag":true},"header-logo-color":"","header-mobile-menu-bg-color":"","header-mobile-menu-color":"","header-mobile-menu-h-bg-color":"","header-mobile-menu-h-color":"","header-mobile-menu-a-bg-color":"","header-mobile-menu-a-color":"","header-mobile-menu-bg-obj-responsive":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","overlay-type":"","overlay-color":"","overlay-gradient":""}},"header-mobile-menu-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-mobile-menu-h-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-mobile-menu-a-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-mobile-menu-h-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-mobile-menu-a-bg-color-responsive":{"desktop":"","tablet":"","mobile":""},"header-mobile-menu-submenu-container-animation":"fade","header-mobile-menu-submenu-item-border":false,"header-mobile-menu-submenu-item-b-size":"1","header-mobile-menu-submenu-item-b-color":"#eaeaea","header-mobile-menu-submenu-border":{"top":2,"bottom":0,"left":0,"right":0},"header-mobile-menu-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"font-extras-header-mobile-menu":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"woo-header-cart-click-action":"default","woo-slide-in-cart-width":{"desktop":35,"tablet":"","mobile":"","desktop-unit":"%","tablet-unit":"%","mobile-unit":"%"},"woo-header-cart-icon-total-label-position":{"desktop":"","tablet":"","mobile":""},"header-woo-cart-icon-size":{"desktop":"","tablet":"","mobile":""},"woo-header-cart-icon":"default","woo-header-cart-icon-style":"outline","woo-desktop-cart-flyout-direction":"right","header-woo-cart-icon-color":"","transparent-header-woo-cart-icon-color":"","header-woo-cart-icon-hover-color":"","woo-header-cart-border-width":2,"woo-header-cart-icon-radius-fields":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"","right":"","bottom":"","left":""},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"woo-header-cart-badge-display":true,"woo-header-cart-label-display":"Cart\/{cart_total_currency_symbol}","header-woo-cart-text-color":"","header-woo-cart-link-color":"","header-woo-cart-background-color":{"desktop":"","tablet":"","mobile":""},"header-woo-cart-background-hover-color":{"desktop":"","tablet":"","mobile":""},"header-woo-cart-separator-color":"","header-woo-cart-link-hover-color":"","header-woo-cart-btn-text-color":"","header-woo-cart-btn-background-color":"","header-woo-cart-btn-text-hover-color":"","header-woo-cart-btn-bg-hover-color":"","header-woo-checkout-btn-text-color":"","header-woo-checkout-btn-background-color":"","header-woo-checkout-btn-text-hover-color":"","header-woo-checkout-btn-bg-hover-color":"","edd-header-cart-icon-style":"outline","edd-header-cart-icon-color":"","edd-header-cart-icon-radius":3,"transparent-header-edd-cart-icon-color":"","edd-header-cart-total-display":true,"edd-header-cart-title-display":true,"header-edd-cart-text-color":"","header-edd-cart-link-color":"","header-edd-cart-background-color":"","header-edd-cart-separator-color":"","header-edd-checkout-btn-text-color":"","header-edd-checkout-btn-background-color":"","header-edd-checkout-btn-text-hover-color":"","header-edd-checkout-btn-bg-hover-color":"","header-account-type":"default","header-account-login-style":"icon","header-account-action-type":"link","header-account-link-type":"default","header-account-logout-style":"icon","header-account-logged-out-text":"Log In","header-account-logged-in-text":"My Account","header-account-logout-action":"link","header-account-image-width":{"desktop":"40","tablet":"","mobile":""},"header-account-icon-size":{"desktop":18,"tablet":18,"mobile":18},"header-account-icon-color":"","header-account-login-link":{"url":"","new_tab":false,"link_rel":""},"header-account-logout-link":{"url":"https:\/\/websitedemos.net\/pizzeria-04\/wp-login.php","new_tab":false,"link_rel":""},"font-size-section-header-account":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"header-account-type-text-color":"","header-account-woo-menu":false,"cloned-component-track":{"header-button":2,"footer-button":2,"header-html":2,"footer-html":2,"header-menu":2,"header-widget":4,"footer-widget":4,"header-social-icons":1,"footer-social-icons":1,"header-divider":0,"footer-divider":0,"removed-items":[]},"theme-auto-version":"4.5.2","ast-callback-notice-header-transparent-header-logo":"","ast-callback-notice-header-transparent-header-logo-link":"","ast-callback-notice-header-transparent-meta-enabled":"","ast-callback-notice-header-transparent-header-meta-link":"","_astra_pb_compatibility_completed":true,"headings-font-variant":"500","headings-line-height":1,"headings-text-transform":"uppercase","theme-button-border-group-border-color":"var(--ast-global-color-0)","theme-button-border-group-border-h-color":"var(--ast-global-color-0)","button-radius":4,"theme-btn-letter-spacing":2,"display-site-title":false,"text-transform-button":"uppercase","header-button1-border-h-color":{"desktop":"var(--ast-global-color-4)"},"header-menu1-text-transform":"uppercase","transparent-header-toggle-btn-color":"var(--ast-global-color-4)","guntenberg-button-pattern-compat-css":false,"site-content-layout":"boxed-container","hb-inner-spacing":{"desktop":1,"tablet":48},"can-support-widget-and-editor-fonts":false,"can-remove-logo-max-width-css":false,"transparent-header-default-border":false,"btn-default-padding-updated":false,"support-footer-widget-right-margin":false,"remove-elementor-toc-margin-css":false,"remove-widget-design-options":false,"support-global-color-format":false,"improve-gb-editor-ui":false,"astra-sidebar-widgets-footer-widget-1-margin":{"desktop":{"top":"","right":"","bottom":"","left":"80"},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"48","right":"0","bottom":"0","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"astra-sidebar-widgets-footer-widget-2-margin":{"desktop":{"top":"","right":"","bottom":"","left":"40"},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"48","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"astra-sidebar-widgets-footer-widget-3-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"48","right":"0","bottom":"0","left":"0"},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"astra-sidebar-widgets-footer-widget-4-margin":{"desktop":{"top":"","right":"","bottom":"","left":""},"tablet":{"top":"0","right":"0","bottom":"0","left":"0"},"mobile":{"top":"","right":"","bottom":"","left":""},"desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"mobile-header-toggle-btn-color":"var(--ast-global-color-4)","mobile-header-toggle-btn-bg-color":"var(--ast-global-color-0)","apply-content-background-fullwidth-layouts":false,"is_theme_queue_running":false,"customizer-default-layout-update":false,"single-product-breadcrumb-disable":false,"woocommerce-single-product-fallback-default":true,"astra-old-global-sidebar-default":false,"dynamic-blog-layouts":false,"theme-dynamic-customizer-support":true,"ast-dynamic-single-elementor-hf-structure":["ast-dynamic-single-elementor-hf-image","ast-dynamic-single-elementor-hf-title"],"ast-dynamic-single-elementor-hf-metadata":["comments","author"],"ast-archive-elementor-hf-title":true,"ast-single-elementor-hf-title":true,"ast-dynamic-archive-elementor-hf-banner-image-type":"none","ast-dynamic-archive-elementor-hf-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-elementor-hf-title-font-family":"","ast-dynamic-archive-elementor-hf-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-elementor-hf-title-font-weight":"","ast-dynamic-archive-elementor-hf-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-elementor-hf-banner-title-color":"","ast-dynamic-archive-elementor-hf-banner-text-color":"","ast-dynamic-single-elementor-hf-banner-title-color":"","ast-dynamic-single-elementor-hf-title-font-family":"","ast-dynamic-single-elementor-hf-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-elementor-hf-title-font-weight":"","ast-dynamic-single-elementor-hf-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-single-astra-sites-structure":["ast-dynamic-single-astra-sites-image","ast-dynamic-single-astra-sites-title"],"ast-dynamic-single-astra-sites-metadata":["comments","author"],"ast-archive-astra-sites-title":true,"ast-single-astra-sites-title":true,"ast-dynamic-archive-astra-sites-banner-image-type":"none","ast-dynamic-archive-astra-sites-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-astra-sites-title-font-family":"","ast-dynamic-archive-astra-sites-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-astra-sites-title-font-weight":"","ast-dynamic-archive-astra-sites-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-astra-sites-banner-title-color":"","ast-dynamic-archive-astra-sites-banner-text-color":"","ast-dynamic-single-astra-sites-banner-title-color":"","ast-dynamic-single-astra-sites-title-font-family":"","ast-dynamic-single-astra-sites-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-astra-sites-title-font-weight":"","ast-dynamic-single-astra-sites-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-single-site-pages-structure":["ast-dynamic-single-site-pages-image","ast-dynamic-single-site-pages-title"],"ast-dynamic-single-site-pages-metadata":["comments","author"],"ast-archive-site-pages-title":true,"ast-single-site-pages-title":true,"ast-dynamic-archive-site-pages-banner-image-type":"none","ast-dynamic-archive-site-pages-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-site-pages-title-font-family":"","ast-dynamic-archive-site-pages-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-site-pages-title-font-weight":"","ast-dynamic-archive-site-pages-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-site-pages-banner-title-color":"","ast-dynamic-archive-site-pages-banner-text-color":"","ast-dynamic-single-site-pages-banner-title-color":"","ast-dynamic-single-site-pages-title-font-family":"","ast-dynamic-single-site-pages-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-site-pages-title-font-weight":"","ast-dynamic-single-site-pages-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-single-astra-blocks-structure":["ast-dynamic-single-astra-blocks-image","ast-dynamic-single-astra-blocks-title"],"ast-dynamic-single-astra-blocks-metadata":["comments","author"],"ast-archive-astra-blocks-title":true,"ast-single-astra-blocks-title":true,"ast-dynamic-archive-astra-blocks-banner-image-type":"none","ast-dynamic-archive-astra-blocks-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-astra-blocks-title-font-family":"","ast-dynamic-archive-astra-blocks-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-astra-blocks-title-font-weight":"","ast-dynamic-archive-astra-blocks-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-astra-blocks-banner-title-color":"","ast-dynamic-archive-astra-blocks-banner-text-color":"","ast-dynamic-single-astra-blocks-banner-title-color":"","ast-dynamic-single-astra-blocks-title-font-family":"","ast-dynamic-single-astra-blocks-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-astra-blocks-title-font-weight":"","ast-dynamic-single-astra-blocks-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-single-post-structure":["ast-dynamic-single-post-image","ast-dynamic-single-post-title","ast-dynamic-single-post-meta"],"ast-dynamic-single-post-taxonomy":"category","ast-dynamic-single-post-metadata":["comments","ast-dynamic-single-post-taxonomy","author"],"ast-archive-post-title":true,"ast-single-post-title":true,"ast-dynamic-archive-post-banner-image-type":"none","ast-dynamic-archive-post-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-post-title-font-family":"","ast-dynamic-archive-post-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-post-title-font-weight":"","ast-dynamic-archive-post-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-post-banner-title-color":"","ast-dynamic-archive-post-banner-text-color":"","ast-dynamic-single-post-banner-title-color":"","ast-dynamic-single-post-title-font-family":"","ast-dynamic-single-post-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-post-title-font-weight":"","ast-dynamic-single-post-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-single-page-structure":["ast-dynamic-single-page-image","ast-dynamic-single-page-title"],"ast-dynamic-single-page-metadata":["comments","author"],"ast-archive-page-title":true,"ast-single-page-title":true,"ast-dynamic-archive-page-banner-image-type":"none","ast-dynamic-archive-page-banner-custom-bg":{"desktop":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"tablet":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""},"mobile":{"background-color":"","background-image":"","background-repeat":"repeat","background-position":"center center","background-size":"auto","background-attachment":"scroll","background-type":"","background-media":"","overlay-type":"","overlay-color":"","overlay-gradient":""}},"ast-dynamic-archive-page-title-font-family":"","ast-dynamic-archive-page-title-font-size":{"desktop":40,"tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-archive-page-title-font-weight":"","ast-dynamic-archive-page-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"ast-dynamic-archive-page-banner-title-color":"","ast-dynamic-archive-page-banner-text-color":"","ast-dynamic-single-page-banner-title-color":"","ast-dynamic-single-page-title-font-family":"","ast-dynamic-single-page-title-font-size":{"desktop":"","tablet":"","mobile":"","desktop-unit":"px","tablet-unit":"px","mobile-unit":"px"},"ast-dynamic-single-page-title-font-weight":"","ast-dynamic-single-page-title-font-extras":{"line-height":"","line-height-unit":"em","letter-spacing":"","letter-spacing-unit":"px","text-transform":"","text-decoration":""},"archive-download-content-layout":"default","archive-download-sidebar-layout":"no-sidebar","single-download-content-layout":"default","single-download-sidebar-layout":"default","update-default-color-typo":false,"v4-block-editor-compat":false,"v4-1-0-update-migration":true,"single-product-payment-list":{"items":[{"id":"item-100","enabled":true,"source":"icon","icon":"cc-visa","image":"","label":"Visa"},{"id":"item-101","enabled":true,"source":"icon","icon":"cc-mastercard","image":"","label":"Mastercard"},{"id":"item-102","enabled":true,"source":"icon","icon":"cc-amex","image":"","label":"Amex"},{"id":"item-103","enabled":true,"source":"icon","icon":"cc-discover","image":"","label":"Discover"}]},"v4-1-4-update-migration":true,"list-block-vertical-spacing":false,"add-hr-styling-css":false,"astra-site-svg-logo-equal-height":false,"fullwidth_sidebar_support":false,"v4-2-0-update-migration":true,"v4-2-2-core-form-btns-styling":false,"v4-4-0-backward-option":false,"secondary-theme-button-border-group-border-color":"var(--ast-global-color-0)","secondary-theme-button-border-group-border-h-color":"var(--ast-global-color-0)","ast-dynamic-single-templates-article-featured-image-position-layout-1":"none","ast-dynamic-single-templates-article-featured-image-position-layout-2":"none","ast-dynamic-single-templates-article-featured-image-ratio-type":"default","ast-dynamic-single-elementor-hf-article-featured-image-position-layout-1":"none","ast-dynamic-single-elementor-hf-article-featured-image-position-layout-2":"none","ast-dynamic-single-elementor-hf-article-featured-image-ratio-type":"default","ast-dynamic-single-astra-sites-article-featured-image-position-layout-1":"none","ast-dynamic-single-astra-sites-article-featured-image-position-layout-2":"none","ast-dynamic-single-astra-sites-article-featured-image-ratio-type":"default","ast-dynamic-single-site-pages-article-featured-image-position-layout-1":"none","ast-dynamic-single-site-pages-article-featured-image-position-layout-2":"none","ast-dynamic-single-site-pages-article-featured-image-ratio-type":"default","ast-dynamic-single-astra-blocks-article-featured-image-position-layout-1":"none","ast-dynamic-single-astra-blocks-article-featured-image-position-layout-2":"none","ast-dynamic-single-astra-blocks-article-featured-image-ratio-type":"default","ast-dynamic-single-post-article-featured-image-position-layout-1":"none","ast-dynamic-single-post-article-featured-image-position-layout-2":"none","ast-dynamic-single-post-article-featured-image-ratio-type":"default","ast-dynamic-single-page-article-featured-image-position-layout-1":"none","ast-dynamic-single-page-article-featured-image-position-layout-2":"none","ast-dynamic-single-page-article-featured-image-ratio-type":"default","v4-5-0-backward-option":false,"scndry-btn-default-padding":false},"custom-css":""}};
</script>
<script id="showcase-cta-js-js-after">
( window.self !== window.top ) || document.write( '<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/admin/showcase-cta/switcher/dist/main.js?ver=308d53dc52d1fcf8ca1e"></scr' + 'ipt>' );
</script><script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/astra-sites-server/admin/showcase-cta/switcher/dist/main.js?ver=308d53dc52d1fcf8ca1e"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/js/webpack.runtime.js?ver=3.17.3" id="elementor-webpack-runtime-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/jquery/jquery.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/jquery/jquery-migrate.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/js/frontend-modules.js?ver=3.17.3" id="elementor-frontend-modules-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/jquery/ui/core.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":true},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.17.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"landing-pages":true},"urls":{"assets":"https:\/\/websitedemos.net\/pizzeria-04\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":11,"title":"Home%20-%20The%20Pizzeria","excerpt":"","featuredImage":false}};
</script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/elementor/assets/js/frontend.js?ver=3.17.3" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/pizzeria-04\/wp-admin\/admin-ajax.php"}};
</script>
<script src="https://websitedemos.net/pizzeria-04/wp-includes/js/wp-util.js?ver=6.4.2" id="wp-util-js"></script>
<script id="wpforms-elementor-js-extra">
var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
</script>
<script src="https://websitedemos.net/pizzeria-04/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.5.4" id="wpforms-elementor-js"></script>
<script>
			/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
			</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;8477eb115c4a4c73&quot;,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;974d812d4f9e465096df037cad7ee20d&quot;}" crossorigin="anonymous"></script>


</body></html>
 


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">⭐ Our Top Products ⭐</h2>
                        <h2 class="ec-title">⭐ Our Top Products ⭐</h2>
                     </div>
                </div>

              
            </div>


           
                    <div class="tab-content">





                        <!-- 1st Product tab start -->
                       
                        <!-- ec 2nd Product tab end -->
 


                     
                        

















                        
    <!-- Ec Instagram Start -->
    
    <section class="section ec-instagram-section module section-space-p" id="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Instagram Feed</h2>
                        <h2 class="ec-title">Instagram Feed</h2>
                        <p class="sub-title">Share your store with us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="container fadeIn" data-animation="fadeIn" data-animated="true">
                    <div class="infiniteslide_wrap" style="overflow: hidden;"><div class="insta-auto" style="display: flex; flex-flow: row; align-items: center; animation: 35s linear 0s infinite normal none running infiniteslide1702835576933134;" data-style="infiniteslide1702835576933134">
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    <div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/6.jpg" alt="insta"></a>
                            </div>
                        </div><div class="ec-insta-item infiniteslide_clone" style="flex: 0 0 auto; display: block;">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/instragram-image/7.jpg" alt="insta"></a>
                            </div>
                        </div></div></div>
                </div>
            </div>
        </div>
    </section><!-- Ec Instagram End -->

    <!-- Footer Start -->
    
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3014px; transform: translate3d(-274px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 274px;"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 274px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div></div></div></div>
                            <div class="qty-nav-thumb slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 756px; transform: translate3d(-216px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 54px;"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 54px;"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 54px;"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 54px;"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 54px;" tabindex="-1"><div><div class="qty-slide" style="width: 100%; display: inline-block;">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
                                        women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#ebbf60;"></span></li>
                                                <li><span style="background-color:#75e3ff;"></span></li>
                                                <li><span style="background-color:#11f7d8;"></span></li>
                                                <li><span style="background-color:#acff7c;"></span></li>
                                                <li><span style="background-color:#e996fa;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
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
                                <div class="ec-quickview-qty">
                                         <input class="qty-input" type="text" name="ec_qtybtn" value="1">
                                     <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
 

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i class="fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i class="fi-rr-shopping-bag"></i><span class="ec-cart-noti ec-header-count cart-count-lable">0</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index-2.html" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="/ordersCustomer" class="ec-header-btn"><i class="fi-rr-heart"></i><span class="ec-cart-noti">0</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase" style="display: none;">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img" alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img" alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img" alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img" alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon">
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png">
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache &amp; Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>

    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ecicon eci-arrow-up" aria-hidden="true"></i></a>




</body>  
@endsection