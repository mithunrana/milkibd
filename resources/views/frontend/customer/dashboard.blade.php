@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')

    <!--Page Title-->
    <section class="page-title centred" style="padding: 40px 0px;background-image: url({{asset('')}}frontend/assets/images/background/milki-icecream-background.webp);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>My Account</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li><a href="{{asset('')}}">Customer Login</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section alternet-2 sec-pad" style="background-image: url(assets/images/background/contact-3.jpg);">
        <div style="max-width: 800px;" class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="contact-info-inner">
                        <div class="single-box">
                            <h3>Opening hours</h3>
                            <ul class="list clearfix"> 
                                <li>Daily: 9.30 AM–6.00 PM</li>
                                <li>Sunday & Holidays: Closed</li>
                            </ul>
                        </div>
                        <div class="single-box">
                            <h3>Contact info</h3>
                            <ul class="list clearfix"> 
                                <li>77408 Satterfield Motorway Suite <br />469 New Antonetta, BC K3L6P6</li>
                                <li><a href="mailto:example@info.com">example@info.com</a></li>
                                <li><a href="tel:6174959400326">(617) 495-9400-326</a></li>
                            </ul>
                        </div>
                        <div class="single-box">
                            <h3>Social contact</h3>
                            <ul class="social-links clearfix">
                                <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <h3>Drop us a line</h3>
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email *" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Message ..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()