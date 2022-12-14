@php
    $title = "Login | Milki Icecream Industry";
    $keywords =  "Milki Icecream Industry, login, registration";
    $description =  "Milki Icecream Industry, login here milki icecream industry customer";
@endphp

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
                    <h1>Account Login</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('customer.login')}}">Customer Login</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section alternet-2 sec-pad" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream-background.jpg);">
        <div style="" class="auto-container">
            <div class="row justify-content-center clearfix">
                <div class="col-xl-6 col-md-10 form-column">
                    <div style="box-shadow: 0 0 10px rgb(0 0 0 / 20%);padding:40px;" class="form-inner">
                        <h2 style="padding-bottom:10px;">Login</h2>
                        <form method="POST" action="{{ route('customer.login.store') }}" id="contact-form" class="default-form">
                            @csrf 
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input class="{{$errors->has('email') ? ' is-invalid' : ''}}" type="email" name="email" placeholder="Your Email *" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input class="{{$errors->has('name') ? ' is-invalid' : ''}}" type="password" name="password" placeholder="Password" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button style="width: 100%;" class="theme-btn-one" type="submit" name="submit-form">Login</button>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <p style="font-size: 14px;text-align: center!important;">Login with social networks</p>
                                    <ul style="text-align:center;" class="social-icons">
                                        <li style="display: inline-block;list-style: none;margin-bottom: 5px;margin-right: 5px;">
                                            <a class="social-icon-color facebook" href="#">
                                                <i style="color:white;background-color:#007bff;padding:12px;" class="icon fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li style="display: inline-block;list-style: none;margin-bottom: 5px;margin-right: 5px;">
                                            <a class="social-icon-color facebook" href="#">
                                                <i style="color:white;background-color:#47b2c7;padding:12px;" class="icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li style="display: inline-block;list-style: none;margin-bottom: 5px;margin-right: 5px;">
                                            <a class="social-icon-color facebook" href="#">
                                                <i style="color:white;background-color:#f16767;padding:12px;" class="icon fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <p style="font-size: 18px;text-align: center!important;">Don't Have an Account? <a href="{{asset('')}}customer/register">Sign up now</a></p>
                                    </ul>
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