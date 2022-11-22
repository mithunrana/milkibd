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
                    <h1>Mail Verification</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li><a href="{{route('customer.verification')}}">Mail Verification Pending</a></li>
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
                        <form method="POST" action="{{ route('customer.verification.send') }}" id="contact-form" class="default-form">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <p style="font-size: 14px;">
                                    Thanks for signing up! Before getting started, could you verify your email address by clicking on 
                                    the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                                </p>

                                <p style="font-size: 14px;color:black;font-weight:bold;text-align:center;margin-top:10px;">
                                    PLEASE CHECK YOUR MAIL INBOX OR SPAM FOLDER VERIFY YOUR MAIL ADDRESS
                                </p>

                                @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{Session::get('message')}}
                                    </div>
                                @endif
                            </div>
                            @csrf 
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button style="width: 100%;" class="theme-btn-one" type="submit" name="submit-form">Resend Verification Email</button>
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