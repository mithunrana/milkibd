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
    <section class="contact-section alternet-2 sec-pad" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream-background.jpg);">
        <div style="max-width: 720px;" class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
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
                                    <button class="theme-btn-one" type="submit" name="submit-form">Login</button>
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