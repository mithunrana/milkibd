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
                    <h1>About Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    
    <!-- ourstory-style-three -->
    <section class="ourstory-style-three">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <p>Our Story</p>
                                <h2>Modern Coffe Store Since 1970</h2>
                            </div>
                            <div class="text">
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris aliquip.</p>
                            </div>
                            <figure class="signature"><img src="assets/images/icons/signature-1.png" alt=""></figure>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn-one">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_1">
                        <div class="image-box">
                            <div class="bg-layer" style="background-image: url(assets/images/shape/bg-layer-1.png);"></div>
                            <figure class="image image-1"><img src="assets/images/resource/story-2.jpg" alt=""></figure>
                            <div class="video-inner">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="icon-Video"></i></a>
                                <h3>Watch Real Video</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ourstory-style-three end -->


    <!-- ourhistory-section -->
    <section class="ourhistory-section sec-pad" style="background-image: url(assets/images/background/history-1.jpg);">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Our History</p>
                <h2>Learn More About <br />Bagery</h2>
            </div>
            <div class="inner-content">
                <div class="line-box">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <figure class="image-box mb-130"><img src="assets/images/resource/history-1.jpg" alt=""></figure>
                            <div class="content-box mb-130">
                                <span class="year">2000</span>
                                <h3>A Taste all Folks Keep <br />Coming to</h3>
                                <p>Excepteur sint occaecat cupidat proident sunt culpa officia deseru mollit anim est laborum magni dolore eos  ratione voluptam sequi nesciunt porro quisquam.</p>
                            </div>
                            <figure class="image-box mb-130"><img src="assets/images/resource/history-2.jpg" alt=""></figure>
                            <div class="content-box">
                                <span class="year">2019</span>
                                <h3>Pastry is Different from <br />Cooking</h3>
                                <p>Excepteur sint occaecat cupidat proident sunt culpa officia deseru mollit anim est laborum magni dolore eos  ratione voluptam sequi nesciunt porro quisquam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 offset-lg-2 inner-column">
                        <div class="inner-box">
                            <div class="content-box mb-130">
                                <span class="year">1990</span>
                                <h3>Bagery first lit the hearth in <br />February of 1990</h3>
                                <p>Excepteur sint occaecat cupidat proident sunt culpa officia deseru mollit anim est laborum magni dolore eos  ratione voluptam sequi nesciunt porro quisquam.</p>
                            </div>
                            <figure class="image-box mb-130"><img src="assets/images/resource/history-3.jpg" alt=""></figure>
                            <div class="content-box mb-130">
                                <span class="year">2010</span>
                                <h3>Our Morning Shift Started <br />in 2010</h3>
                                <p>Excepteur sint occaecat cupidat proident sunt culpa officia deseru mollit anim est laborum magni dolore eos  ratione voluptam sequi nesciunt porro quisquam.</p>
                            </div>
                            <figure class="image-box"><img src="assets/images/resource/history-4.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ourhistory-section end -->


    <!-- clients-section -->
    <section class="clients-section bg-color-1">
        <div class="auto-container">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="assets/images/clients/clients-logo-6.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- service-section -->
    <section class="service-section sec-pad centred" style="background-image: url(assets/images/background/service-1.jpg);">
        <div class="auto-container">
            <div class="sec-title">
                <p>Services</p>
                <h2>Quality & Passion with <br />our Services!</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
                                <i class="icon-Ice-Cream"></i>
                            </div>
                            <div class="lower-content wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h3><a href="service.html">Cone Ice Creams</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="service.html">Read More</a></div>
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
                                <h3><a href="service.html">Fresh Bread</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="service.html">Read More</a></div>
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
                                <h3><a href="service.html">Piece Cake</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="service.html">Read More</a></div>
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
                                <h3><a href="service.html">Sweet Donuts</a></h3>
                                <p>Accusan enim ipsam voluptam quia voluptas sit aspern odit aut sed quia consequnt.</p>
                                <div class="btn-box"><a href="service.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad" style="background-image: url(assets/images/background/testimonial-1.jpg);">
        <figure class="image-layer wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
        <div class="auto-container">
            <div class="inner-box">
                <div class="sec-title">
                    <p>Testimonials</p>
                    <h2>What Clients Say About Bagery.</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url(assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url(assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url(assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- team-section -->
    <section class="team-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <p>Team</p>
                <h2>Quality & Passion with <br />our Services!</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-1.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <h3><a href="about.html">Ralph Johnson</a></h3>
                                <span class="designation">Coffee Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-2.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <h3><a href="about.html">Fiona Edwards</a></h3>
                                <span class="designation">Pastry Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/team/team-3.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="about.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <h3><a href="about.html">Tom Knolltonns</a></h3>
                                <span class="designation">Bakery Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()