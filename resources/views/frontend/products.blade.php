@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')


<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>Shop Page 1</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Shop 1</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- shop-page-section -->
<section class="shop-page-section shop-page-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="shop-sidebar default-sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <form action="shop-1.html" method="post" class="search-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search..." required="">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>Shop by Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                <li><a href="blog-details.html">Coffee</a></li>
                                <li><a href="blog-details.html">Pastry Cake</a></li>
                                <li><a href="blog-details.html">Birthday Cake</a></li>
                                <li><a href="blog-details.html">Sandwiches</a></li>
                                <li><a href="blog-details.html">Donuts Cake</a></li>
                                <li><a href="blog-details.html">Bargar</a></li>
                                <li><a href="blog-details.html">Ice Cream</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget price-filter">
                        <div class="widget-title">
                            <h3>Shop by Price</h3>
                        </div>
                        <div class="range-slider clearfix">
                            <div class="price-range-slider"></div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="shop-1.html" class="filter-btn">Filter</a>
                                </div>
                                <div class="pull-right">
                                    <p>Price:</p>
                                    <div class="title"></div>
                                    <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h3>Featured Products</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="image-box"><a href="shop-details.html"><img src="assets/images/resource/shop/post-1.jpg" alt=""></a></figure>
                                <h5><a href="shop-details.html">Vanilla Ice Cream</a></h5>
                                <p>$50.00</p>
                            </div>
                            <div class="post">
                                <figure class="image-box"><a href="shop-details.html"><img src="assets/images/resource/shop/post-2.jpg" alt=""></a></figure>
                                <h5><a href="shop-details.html">Donuts Cake</a></h5>
                                <p>$35.00</p>
                            </div>
                            <div class="post">
                                <figure class="image-box"><a href="shop-details.html"><img src="assets/images/resource/shop/post-3.jpg" alt=""></a></figure>
                                <h5><a href="shop-details.html">Corne Ice Cream</a></h5>
                                <p>$60.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="our-shop">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left clearfix">
                            <div class="text"><p>Showing 1–12 of 50 Results</p></div>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <p>Short by</p>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Popularity">Popularity</option>
                                        <option value="1">New Collection</option>
                                        <option value="2">Top Sell</option>
                                        <option value="4">Top Ratted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="menu-box">
                                <a href="shop.html"><i class="icon-Menu"></i></a>
                                <a href="shop.html"><i class="icon-List-View"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-1.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$100</span>
                                        <h3><a href="shop-details.html">Vanilla Ice Cream</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-2.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$70</span>
                                        <h3><a href="shop-details.html">Slice Super Cake</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-3.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$80</span>
                                        <h3><a href="shop-details.html">Cone Ice Cream</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-4.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$120</span>
                                        <h3><a href="shop-details.html">Quality Ice Cream</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-8.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$100</span>
                                        <h3><a href="shop-details.html">Italian Loaf</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-9.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$70</span>
                                        <h3><a href="shop-details.html">Pumpkin Pastry</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-10.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$80</span>
                                        <h3><a href="shop-details.html">Italian Bread</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-11.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$120</span>
                                        <h3><a href="shop-details.html">Crustry Baguette</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="assets/images/resource/shop/shop-12.jpg" alt="">
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$80</span>
                                        <h3><a href="shop-details.html">Donuts Cake</a></h3>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                        <div class="cart-btn"><a href="shop-details.html" class="theme-btn-two">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper centred">
                        <ul class="pagination">
                            <li><a href="shop-1.html">Prev</a></li>
                            <li><a href="shop-1.html">1</a></li>
                            <li><a href="shop-1.html" class="active">2</a></li>
                            <li><a href="shop-1.html">3</a></li>
                            <li><a href="shop-1.html">4</a></li>
                            <li><a href="shop-1.html">5</a></li>
                            <li><a href="shop-1.html">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-page-section end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()