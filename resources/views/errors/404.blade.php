@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('')}}frontend/assets/images/banner/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Page Not Found</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li>404</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="error-section centred sec-pad">
        <div class="auto-container">
            <div class="inner-box">
                <h1>404</h1>
                <h2>Oops! Page Not Found!</h2>
                <p>Please go back to <a href="{{asset('')}}">Back homepage</a></p>
                <div class="btn-box">
                    <a href="{{asset('')}}" class="theme-btn-one">Go Back To Home</a>
                </div>
            </div>
        </div>
    </section>

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()