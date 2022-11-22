@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')


    <!--Page Title-->
    <section class="page-title centred" style="padding:40px 0px;background-image: url({{asset('')}}frontend/assets/images/background/milki-icecream-background.webp);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Elements</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Service Block 01</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->



    <!-- service-section -->
    <section class="service-section sec-pad centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-3.png);"></div>
                                <i class="icon-Ice-Cream"></i>
                            </div>
                            <div class="lower-content wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h3><a href="index.html">Cone Ice Creams</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="index.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box wow fadeInDown animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-3.png);"></div>
                                <i class="icon-Bread"></i>
                            </div>
                            <div class="lower-content wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <h3><a href="index.html">Fresh Bread</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="index.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box wow fadeInDown animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-3.png);"></div>
                                <i class="icon-Cake"></i>
                            </div>
                            <div class="lower-content wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <h3><a href="index.html">Piece Cake</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="index.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-3.png);"></div>
                                <i class="icon-Donuts"></i>
                            </div>
                            <div class="lower-content wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h3><a href="index.html">Sweet Donuts</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="index.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    

    <!-- specialmenu-section -->
    <section class="specialmenu-section sec-pad" style="background: #bee0e3;">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Customization</p>
                <h2>Special Menu</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="special-menu-box wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-7.png);"></div>
                        <div class="border-shape" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-8.png);"></div>
                        <div class="inner-box">
                            <ul class="menu-list">
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Ice Cream</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Chocolate Crepes</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$60</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Double Chocolate Pie</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$45</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>French Croissants</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$40</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="special-menu-box wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-7.png);"></div>
                        <div class="border-shape" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-8.png);"></div>
                        <div class="inner-box">
                            <ul class="menu-list">
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Cafe Latte</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Chocolate Crepes</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$60</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>Double Chocolate Pie</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$45</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-menu">
                                        <div class="text">
                                            <h4>French Croissants</h4>
                                            <div class="line"></div>
                                            <div class="price-box">
                                                <span>$40</span>
                                            </div>
                                        </div>
                                        <p>Fresh brewed coffee</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- specialmenu-section end -->



    <!-- shop-section -->
    <section class="shop-section">
        <div class="auto-container">
            <div class="sec-title">
                <p>Our Shop</p>
                <h2>Our all Delicious <br />Products.</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one centred">
                @foreach($FeaturedPoducts as $Product)
                    <div class="shop-block-one">
                        <div class="inner-box">
                            @if($Product->productImages->count() > 0)
                                @foreach($Product->productImages as $Image)
                                    <figure class="image-box">
                                        <img src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" alt="{{ $Product->name }}">
                                    </figure>
                                    @break
                                @endforeach
                            @endif
                            <div class="lower-content">
                                <span class="price-box">$100</span>
                                <h3><a href="shop-details.html">{{ $Product->name }}</a></h3>
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
                @endforeach()
            </div>
        </div>
    </section>
    <!-- shop-section end -->



@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()