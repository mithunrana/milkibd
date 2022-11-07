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
                                <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
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
                                <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
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
                                <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
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
                                <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
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


@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()