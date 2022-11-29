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
                    <h1>Return & Refund Policy</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Return & Refund Policy</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section alternet-2 sec-pad" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream-background.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-sm-12">
                    {!! $SettingKey['refund_and_return_policy'] !!}
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->
@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()