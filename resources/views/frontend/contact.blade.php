@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-icecream-background.webp);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Contact us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section alternet-2 sec-pad" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream-background.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="contact-info-inner">
                        <div class="single-box">
                            <h3>Opening hours</h3>
                            {!! $SettingKey['theme_thigo_opening_our_content'] !!}
                        </div>
                        <div class="single-box">
                            <h3>Contact info</h3>
                            <ul class="list clearfix"> 
                                <li>{{ $SettingKey['theme_thigo_address'] }}</li>
                                <li><a href="mailto:{{ $SettingKey['theme_thigo_email'] }}">{{ $SettingKey['theme_thigo_email'] }}</a></li>
                                <li><a href="tel:{{ $SettingKey['theme_thigo_hotline'] }}">{{ $SettingKey['theme_thigo_hotline'] }}</a></li>
                            </ul>
                        </div>
                        <div class="single-box">
                            <h3>Social contact</h3>
                            <ul class="social-links clearfix">
                                <li><a href="{{ $SettingKey['theme_thigo_facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $SettingKey['theme_thigo_twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $SettingKey['theme_thigo_linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $SettingKey['theme_thigo_youtube'] }}"><i class="fab fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <h3>Contact With Us</h3>
                        <form method="POST" action="{{url('contact')}}" id="contact-form" class="default-form">
                            @csrf 
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input class="{{$errors->has('name') ? ' is-invalid' : ''}}" type="text" name="name" placeholder="Your Name *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input class="{{$errors->has('email') ? ' is-invalid' : ''}}" type="email" name="email" placeholder="Your Email *" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                    <input class="{{$errors->has('phone') ? ' is-invalid' : ''}}" type="text" name="phone" required="" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                    <input class="{{$errors->has('subject') ? ' is-invalid' : ''}}" type="text" name="subject" required="" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                    <textarea class="{{$errors->has('message') ? ' is-invalid' : ''}}" name="message" placeholder="Your Message ..."></textarea>
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


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.821382436607!2d90.3889635!3d23.7400557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69669e7eb43d83d4!2sSoftware%20Company%20In%20Bangladesh!5e0!3m2!1sen!2sbd!4v1667932975916!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- google-map-section end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()