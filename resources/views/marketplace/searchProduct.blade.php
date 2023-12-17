@extends('layouts.homeLayout')

@section('homecontent')
<section class="ec-page-content section-space-p">
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
                              





@foreach($products as $product)

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="Product">
                                                    <img class="hover-image" src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" alt="Product">
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
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$product->product_name}}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                            <span class="ec-price">
                                                <span class="new-price">{{$product->price}}</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" data-src-hover="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" data-src-hover="{{ asset('images/products/' . json_decode($product->image_data)[0]) }}" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
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
    </section>

@endsection