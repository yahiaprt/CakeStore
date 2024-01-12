@extends('layouts.homeLayout')

@section('homecontent')

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

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

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

    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot swiper-container-initialized swiper-container-horizontal">
            <!-- Main slider -->
            <div class="swiper-wrapper" style="transition: all 2000ms ease 0s; transform: translate3d(-5120px, 0px, 0px);" id="swiper-wrapper-4e6e12ed1ee66fb1" aria-live="off"><div class="ec-slide-item swiper-slide d-flex ec-slide-2 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 2560px;" role="group" aria-label="1 / 4">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Boat Headphone Sets</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1 swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 2560px;" role="group" aria-label="2 / 4">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2 swiper-slide-active" data-swiper-slide-index="1" style="width: 2560px;" role="group" aria-label="3 / 4">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Boat Headphone Sets</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="ec-slide-item swiper-slide d-flex ec-slide-1 swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 2560px;" role="group" aria-label="4 / 4">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4e6e12ed1ee66fb1"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4e6e12ed1ee66fb1"></div>
            </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all" aria-selected="true" role="tab">For
                                All</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men" aria-selected="false" tabindex="-1" role="tab">For
                                Men</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women" aria-selected="false" tabindex="-1" role="tab">For
                                Women</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child" aria-selected="false" tabindex="-1" role="tab">For
                                Children</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all" role="tabpanel">
                            <div class="row">
                                <!-- Product Content -->
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
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/7_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/7_2.jpg" alt="Product">
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve
                                                    Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_1.jpg" data-src-hover="assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_2.jpg" data-src-hover="assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/1_2.jpg" alt="Product">
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby
                                                    Toy's</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_1.jpg" data-src-hover="assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_2.jpg" data-src-hover="assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_3.jpg" data-src-hover="assets/images/product-image/1_3.jpg" data-tooltip="Green"><span style="background-color:#ffc476;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_4.jpg" data-src-hover="assets/images/product-image/1_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/2_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/2_2.jpg" alt="Product">
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry
                                                    Bag</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/2_1.jpg" data-src-hover="assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/3_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">15%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer
                                                    Leather Purses</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_1.jpg" data-src-hover="assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_2.jpg" data-src-hover="assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_3.jpg" data-src-hover="assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_5.jpg" data-src-hover="assets/images/product-image/3_5.jpg" data-tooltip="Sky Blue"><span style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/4_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/4_2.jpg" alt="Product">
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Cowboy
                                                    Hat</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_1.jpg" data-src-hover="assets/images/product-image/4_1.jpg" data-tooltip="Gray"><span style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_2.jpg" data-src-hover="assets/images/product-image/4_2.jpg" data-tooltip="Orange"><span style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_3.jpg" data-src-hover="assets/images/product-image/4_3.jpg" data-tooltip="Green"><span style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_4.jpg" data-src-hover="assets/images/product-image/4_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/5_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/5_2.jpg" alt="Product">
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather Belt
                                                    for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_1.jpg" data-src-hover="assets/images/product-image/5_1.jpg" data-tooltip="Gray"><span style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_2.jpg" data-src-hover="assets/images/product-image/5_2.jpg" data-tooltip="Orange"><span style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$10.00" data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00" data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$15.00" data-tooltip="Large">36</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content fadeIn" data-animation="fadeIn" data-animated="true">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">35%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart
                                                    Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All
                                        Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men" role="tabpanel">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
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
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
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
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/7_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/7_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve
                                                    Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_1.jpg" data-src-hover="assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_2.jpg" data-src-hover="assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/2_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/2_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry
                                                    Bag</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$20.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/2_1.jpg" data-src-hover="assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/4_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/4_2.jpg" alt="Product">
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Cowboy
                                                    Hat</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_1.jpg" data-src-hover="assets/images/product-image/4_1.jpg" data-tooltip="Gray"><span style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_2.jpg" data-src-hover="assets/images/product-image/4_2.jpg" data-tooltip="Orange"><span style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_3.jpg" data-src-hover="assets/images/product-image/4_3.jpg" data-tooltip="Green"><span style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_4.jpg" data-src-hover="assets/images/product-image/4_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/5_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/5_2.jpg" alt="Product">
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather Belt
                                                    for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_1.jpg" data-src-hover="assets/images/product-image/5_1.jpg" data-tooltip="Gray"><span style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_2.jpg" data-src-hover="assets/images/product-image/5_2.jpg" data-tooltip="Orange"><span style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$10.00" data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00" data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$15.00" data-tooltip="Large">36</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart
                                                    Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/10_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/10_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes
                                                    for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_1.jpg" data-src-hover="assets/images/product-image/10_1.jpg" data-tooltip="Gray"><span style="background-color:#41d49c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_2.jpg" data-src-hover="assets/images/product-image/10_2.jpg" data-tooltip="Orange"><span style="background-color:#fc8484;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_3.jpg" data-src-hover="assets/images/product-image/10_3.jpg" data-tooltip="Green"><span style="background-color:#db94f7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_4.jpg" data-src-hover="assets/images/product-image/10_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#24da0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve
                                                    T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All
                                        Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women" role="tabpanel">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes
                                                    for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
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
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
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
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart
                                                    Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/3_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer
                                                    Leather Purses</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_1.jpg" data-src-hover="assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_2.jpg" data-src-hover="assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_3.jpg" data-src-hover="assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_5.jpg" data-src-hover="assets/images/product-image/3_5.jpg" data-tooltip="Sky Blue"><span style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/11_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/11_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Classic Leather
                                                    purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_1.jpg" data-src-hover="assets/images/product-image/11_1.jpg" data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_2.jpg" data-src-hover="assets/images/product-image/11_2.jpg" data-tooltip="Orange"><span style="background-color:#ff4a77;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_3.jpg" data-src-hover="assets/images/product-image/11_3.jpg" data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_4.jpg" data-src-hover="assets/images/product-image/11_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#ffcc5e;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/12_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/12_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Fancy Ladies
                                                    Sandal</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_1.jpg" data-src-hover="assets/images/product-image/12_1.jpg" data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_2.jpg" data-src-hover="assets/images/product-image/12_2.jpg" data-tooltip="Orange"><span style="background-color:#00ffff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_3.jpg" data-src-hover="assets/images/product-image/12_3.jpg" data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_4.jpg" data-src-hover="assets/images/product-image/12_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#89ff7e;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/13_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/13_2.jpg" alt="Product">
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Leather
                                                    Backpack</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_1.jpg" data-src-hover="assets/images/product-image/13_1.jpg" data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_2.jpg" data-src-hover="assets/images/product-image/13_2.jpg" data-tooltip="Orange"><span style="background-color:#ffcdbe;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_3.jpg" data-src-hover="assets/images/product-image/13_3.jpg" data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_4.jpg" data-src-hover="assets/images/product-image/13_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#dd9bfc;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/14_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/14_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Watch
                                                    for Women</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_1.jpg" data-src-hover="assets/images/product-image/14_1.jpg" data-tooltip="Gray"><span style="background-color:#bb8641;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_2.jpg" data-src-hover="assets/images/product-image/14_2.jpg" data-tooltip="Orange"><span style="background-color:#5dd677;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_3.jpg" data-src-hover="assets/images/product-image/14_3.jpg" data-tooltip="Green"><span style="background-color:#32ffdd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_4.jpg" data-src-hover="assets/images/product-image/14_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#56ccfa;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$90.00" data-new="$80.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$100.00" data-new="$90.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All
                                        Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                        <!-- ec 4th Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-child" role="tabpanel">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/1_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby
                                                    Toy's</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_1.jpg" data-src-hover="assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_2.jpg" data-src-hover="assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_3.jpg" data-src-hover="assets/images/product-image/1_3.jpg" data-tooltip="Green"><span style="background-color:#ffc476;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_4.jpg" data-src-hover="assets/images/product-image/1_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/15_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/15_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Clasic Baby
                                                    Shoes
                                                </a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$80.00</span>
                                                <span class="new-price">$70.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_1.jpg" data-src-hover="assets/images/product-image/15_1.jpg" data-tooltip="Gray"><span style="background-color:#ffacfb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_2.jpg" data-src-hover="assets/images/product-image/15_2.jpg" data-tooltip="Orange"><span style="background-color:#90dfff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_3.jpg" data-src-hover="assets/images/product-image/15_3.jpg" data-tooltip="Green"><span style="background-color:#c6ff4a;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_4.jpg" data-src-hover="assets/images/product-image/15_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#ffb158;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Small">4</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Medium">5</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00" data-tooltip="Large">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Extra Large">7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/16_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/16_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby Doctor Toy
                                                    Kit</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_1.jpg" data-src-hover="assets/images/product-image/16_1.jpg" data-tooltip="Gray"><span style="background-color:#6ee9ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_2.jpg" data-src-hover="assets/images/product-image/16_2.jpg" data-tooltip="Orange"><span style="background-color:#eb99ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_3.jpg" data-src-hover="assets/images/product-image/16_3.jpg" data-tooltip="Green"><span style="background-color:#ff6464;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_4.jpg" data-src-hover="assets/images/product-image/16_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#e476ff;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/17_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/17_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby Leather
                                                    Purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$60.00</span>
                                                <span class="new-price">$50.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_1.jpg" data-src-hover="assets/images/product-image/17_1.jpg" data-tooltip="Gray"><span style="background-color:#8ad2fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_2.jpg" data-src-hover="assets/images/product-image/17_2.jpg" data-tooltip="Orange"><span style="background-color:#ff8ef6;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_3.jpg" data-src-hover="assets/images/product-image/17_3.jpg" data-tooltip="Green"><span style="background-color:#ffbe31;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_4.jpg" data-src-hover="assets/images/product-image/17_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#a3ffba;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes
                                                    for Boy</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
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
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
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
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart
                                                    Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product">
                                                    <img class="hover-image" src="assets/images/product-image/3_2.jpg" alt="Product">
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                </div>
                                            <div class="ec-pro-loader"></div></div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer
                                                    Leather Purses</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_1.jpg" data-src-hover="assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_2.jpg" data-src-hover="assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_3.jpg" data-src-hover="assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_5.jpg" data-src-hover="assets/images/product-image/3_5.jpg" data-tooltip="Sky Blue"><span style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All
                                        Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- ec Banners Start -->
            <div class="ec-banner-inner">
                <!--ec Banner Start -->
                <div class="ec-banner-block ec-banner-block-2">
                    <div class="row">
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30 slideInRight" data-animation="slideInRight" data-animated="true">
                            <div class="bnr-overlay">
                                <img src="assets/images/banner/2.jpg" alt="">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Arrivals</span>
                                    <span class="ec-banner-title">mens<br> Sport shoes</span>
                                    <span class="ec-banner-discount">30% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12 slideInLeft" data-animation="slideInLeft" data-animated="true">
                            <div class="bnr-overlay">
                                <img src="assets/images/banner/3.jpg" alt="">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Trending</span>
                                    <span class="ec-banner-title">Smart<br> watches</span>
                                    <span class="ec-banner-discount">Buy any 3 Items &amp; get <br>20% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec Banner End -->
                </div>
                <!-- ec Banners End -->
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Category Section Start -->
    <section class="section ec-category-section section-space-p" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Top Categories</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav" role="tablist">
                        <li class="cat-item"><a class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1" aria-selected="true" role="tab">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_1.png" alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_1_1.png" alt="cat-icon"></div>
                                <div class="cat-desc"><span>Clothes</span><span>440 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-2" aria-selected="false" tabindex="-1" role="tab">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_2.png" alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_2_1.png" alt="cat-icon"></div>
                                <div class="cat-desc"><span>Watches</span><span>510 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-3" aria-selected="false" tabindex="-1" role="tab">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_3.png" alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_3_1.png" alt="cat-icon"></div>
                                <div class="cat-desc"><span>Bags</span><span>620 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-4" aria-selected="false" tabindex="-1" role="tab">
                                <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_4.png" alt="cat-icon"><img class="cat-icon-hover" src="assets/images/icons/cat_4_1.png" alt="cat-icon"></div>
                                <div class="cat-desc"><span>Shoes</span><span>320 Products</span></div>
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
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
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
    </section>
    <!-- Category Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-fre-spe-section section-space-p" id="offers">
        <div class="container">
            <div class="row">
                <!--  Feature Section Start -->
                <div class="ec-fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30 slideInRight" data-animation="slideInRight" data-animated="true">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Feature Items</h2>
                            <h2 class="ec-title">Feature Items</h2>
                        </div>
                    </div>

                    <div class="ec-fre-products slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3450px; transform: translate3d(-690px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Leather Purse For
                                            Women</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">426</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 690px;"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="0"><img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="0"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="0">Baby Toy
                                            Teddybear</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$549.00</span>
                                        <span class="new-price">$480.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-1" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">456</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">58</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="0">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Leather Purse For
                                            Women</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-2" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">425</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">58</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Baby Toy
                                            Teddybear</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$549.00</span>
                                        <span class="new-price">$480.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">457</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Leather Purse For
                                            Women</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">426</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                </div>
                <!--  Feature Section End -->
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-6 col-sm-6 slideInLeft" data-animation="slideInLeft" data-animated="true">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Limited Time Offer</h2>
                            <h2 class="ec-title">Limited Time Offer</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3450px; transform: translate3d(-690px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/10_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Casual Shoes Men</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">516</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 690px;"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="0"><img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="0"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="0">Smart watch
                                            Firebolt</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$200.00</span>
                                        <span class="new-price">$180.00</span>
                                    </div>
                                    <div class="countdowntimer"><span id="ec-fs-count-3" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">395</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">58</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="0">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/10_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Casual Shoes Men</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-4" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">515</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">58</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">23</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Smart watch
                                            Firebolt</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$200.00</span>
                                        <span class="new-price">$180.00</span>
                                    </div>
                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">396</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 690px;" tabindex="-1"><div><div class="ec-fs-product" style="width: 100%; display: inline-block;">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image" tabindex="-1"><img class="main-image" src="assets/images/product-image/10_1.jpg" alt="Product"></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal" tabindex="-1"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html" tabindex="-1">Casual Shoes Men</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="" class="style colorDefinition labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">516</span><span class="periodDisplay">Days</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Hours</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Min</span></span><span class="displaySection"><span class="numberDisplay">00</span><span class="periodDisplay">Sec</span></span></span></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary" tabindex="-1">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary" tabindex="-1">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                </div>
                <!--  Special Section End -->
            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!--  Top Vendor Section Start -->
    <section class="section section-space-p" id="vendors">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Top Vendor</h2>
                        <h2 class="ec-title">Top Vendor</h2>
                        <p class="sub-title">Browse The Collection of <a href="catalog-multi-vendor.html">All
                                Vendors.</a></p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-t-15 margin-minus-b-15">
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assets/images/vendor/2.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Marvelus</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 954</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/1_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/2_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/3_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/4_1.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assets/images/vendor/3.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Oreva Fashion</a>
                                <p class="prod-count">546 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 785</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/5_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/6_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/7_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/8_1.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assets/images/vendor/4.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Cenva Art</a>
                                <p class="prod-count">854 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 587</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/9_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/10_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/11_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/12_1.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assets/images/vendor/5.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Neon Fashion</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 354</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/13_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/14_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/15_1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img src="assets/images/product-image/16_1.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Top Vendor Section End -->

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p" id="services">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3 zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3 zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>24X7 Support</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3 zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-badge-percent"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>30 Days Return</h2>
                            <p>Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3 zoomIn" data-animation="zoomIn" data-animated="true">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Payment Secure</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-p section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-title">Sunglasses</h2>
                    <h3 class="ec-offer-stitle slideInDown" data-animation="slideInDown" data-animated="true">Super Offer</h3>
                    <span class="ec-offer-img zoomIn" data-animation="zoomIn" data-animated="true"><img src="assets/images/offer-image/1.png" alt="offer image"></span>
                    <span class="ec-offer-desc">Acetate Frame Sunglasses</span>
                    <span class="ec-offer-price">$40.00 Only</span>
                    <a class="btn btn-primary zoomIn" href="shop-left-sidebar-col-3.html" data-animation="zoomIn" data-animated="true">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p" id="arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content flipInY" data-animation="flipInY" data-animated="true">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product">
                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product">
                                </a>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            <div class="ec-pro-loader"></div></div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Cap T-Shirt</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$20.00</span>
                                <span class="new-price">$15.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Orange"><span style="background-color:#74c7ff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Green"><span style="background-color:#7af6ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Sky Blue"><span style="background-color:#85ffeb;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$15.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Large">X</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content flipInY" data-animation="flipInY" data-animated="true">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/11_1.jpg" alt="Product">
                                    <img class="hover-image" src="assets/images/product-image/11_2.jpg" alt="Product">
                                </a>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            <div class="ec-pro-loader"></div></div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Classic Leather purse</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_1.jpg" data-src-hover="assets/images/product-image/11_1.jpg" data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_2.jpg" data-src-hover="assets/images/product-image/11_2.jpg" data-tooltip="Orange"><span style="background-color:#ff4a77;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_3.jpg" data-src-hover="assets/images/product-image/11_3.jpg" data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_4.jpg" data-src-hover="assets/images/product-image/11_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#ffcc5e;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content flipInY" data-animation="flipInY" data-animated="true">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/12_1.jpg" alt="Product">
                                    <img class="hover-image" src="assets/images/product-image/12_2.jpg" alt="Product">
                                </a>
                                <span class="percentage">5%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            <div class="ec-pro-loader"></div></div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Fancy Ladies Sandal</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_1.jpg" data-src-hover="assets/images/product-image/12_1.jpg" data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_2.jpg" data-src-hover="assets/images/product-image/12_2.jpg" data-tooltip="Orange"><span style="background-color:#00ffff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_3.jpg" data-src-hover="assets/images/product-image/12_3.jpg" data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_4.jpg" data-src-hover="assets/images/product-image/12_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#89ff7e;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Small">6</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00" data-tooltip="Medium">7</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Large">8</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Extra Large">9</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content flipInY" data-animation="flipInY" data-animated="true">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/13_1.jpg" alt="Product">
                                    <img class="hover-image" src="assets/images/product-image/13_2.jpg" alt="Product">
                                </a>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            <div class="ec-pro-loader"></div></div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Leather Backpack</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_1.jpg" data-src-hover="assets/images/product-image/13_1.jpg" data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_2.jpg" data-src-hover="assets/images/product-image/13_2.jpg" data-tooltip="Orange"><span style="background-color:#ffcdbe;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_3.jpg" data-src-hover="assets/images/product-image/13_3.jpg" data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_4.jpg" data-src-hover="assets/images/product-image/13_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#dd9bfc;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->

    <!-- ec testmonial Start -->
    <section class="section ec-test-section section-space-ptb-100 section-space-m" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="ec-bg-title">Testimonial</h2>
                        <h2 class="ec-title">Client Review</h2>
                        <p class="sub-title mb-3">What say client about us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider" class="slick-initialized slick-slider slick-dotted"><div class="slick-list draggable" style="padding: 0px;"><div class="slick-track" style="opacity: 1; width: 4110px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-center" data-slick-index="0" aria-hidden="true" style="width: 1370px;" role="tabpanel" id="slick-slide40"><div><li class="ec-test-item" style="width: 100%; display: inline-block;">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/1.jpg"></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1370px;" tabindex="-1" role="tabpanel" id="slick-slide41"><div><li class="ec-test-item " style="width: 100%; display: inline-block;">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/2.jpg"></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1370px;" tabindex="-1" role="tabpanel" id="slick-slide42"><div><li class="ec-test-item" style="width: 100%; display: inline-block;">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/3.jpg"></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li></div></div></div></div><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/1.jpg"></li><li role="presentation"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/2.jpg"></li><li role="presentation"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/3.jpg"></li></ul></ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ec testmonial end -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul id="ec-brand-slider" class="slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4508px; transform: translate3d(-1372px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-7" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/2.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-6" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/3.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/4.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/5.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/6.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/7.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/8.png"></a></div>
                        </li></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/1.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/2.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/3.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/4.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/5.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/6.png"></a></div>
                        </li></div></div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 196px;"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="0"><img alt="brand" title="brand" src="assets/images/brand-image/7.png"></a></div>
                        </li></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/8.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/1.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/2.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item zoomIn" data-animation="zoomIn" style="width: 100%; display: inline-block;" data-animated="true">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/3.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/4.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/5.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/6.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/7.png"></a></div>
                        </li></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" style="width: 196px;" tabindex="-1"><div><li class="ec-brand-item" data-animation="zoomIn" style="width: 100%; display: inline-block;">
                            <div class="ec-brand-img"><a href="#" tabindex="-1"><img alt="brand" title="brand" src="assets/images/brand-image/8.png"></a></div>
                        </li></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

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
                                                <li class="active"><a href="#" class="ec-opt-sz" data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus"><div class="dec ec_qtybtn">-</div>
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1">
                                    <div class="inc ec_qtybtn">+</div></div>
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

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg" style="display: none;"></div>
    <div id="ec-popnews-box" style="display: none;">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-6 disp-no-767">
                <img src="assets/images/banner/newsletter.png" alt="newsletter">
            </div>
            <div class="col-md-6">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required="">
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

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