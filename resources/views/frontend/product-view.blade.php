@php
    $title = $Product->title;
    $keywords = $Product->metakeyword;
    $description =  $Product->metadescription;
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
<section class="page-title centred" style="background-image: url({{asset('')}}frontend/assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>{{$Product->name}}</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('products')}}">Products</a></li>
                <li>{{$Product->name}}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- single-product -->
<section class="single-product">
    <div style="padding-bottom: 40px;" class="product-details-content" style="background-image: url({{asset('')}}frontend/assets/images/background/single-shop-1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="bxslider">
                        <div class="slider-content">
                            <div class="slider-pager">
                                <ul class="thumb-box">
                                    @if($Product->productImages->count() > 0)
                                        @foreach($Product->productImages as $Image)
                                            <li>
                                                <a class="active" data-slide-index="0" href="#">
                                                    <figure>
                                                        <img data-image="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" class="smallimage" src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[150]}}.{{$Image->extension }}"  alt="">
                                                    </figure>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="product-image">
                                <figure class="image">
                                    @if($Product->productImages->count() > 0)
                                        @foreach($Product->productImages as $Image)
                                            <a class="thigobximage" href="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" class="lightbox-image" data-fancybox="gallery">
                                                <img class="thigoshowimage" src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" alt="">
                                            </a>
                                            @break
                                        @endforeach
                                    @endif
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="product-details">
                        <h2>{{$Product->name}}</h2>
                        <h3>@if(Session::has('Currency')) <b>{{ Session::get('Currency')['symbol']}}</b> @endif 50.00</h3>
                        <div class="customer-rating clearfix">
                            <ul class="rating pull-left">
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                            </ul>
                            <div class="review pull-left">
                                <a href="#">( {{$TotalReview}} Customer Review )</a>
                            </div>
                        </div>
                        <div class="text">
                            {!! $Product->description !!}
                        </div>
                        <div class="addto-cart-box"> 
                            <ul class="clearfix">
                                <li><input type="text" name="quentity" placeholder="1"></li>
                                <li><a href="shop-details.html.html"><i class="far fa-heart"></i></a></li>
                                <li><button type="button" class="theme-btn-one">Add To Cart</button></li>
                            </ul>
                        </div>
                        <div class="other-links">
                            <ul class="category list">
                                <li>Category:</li>
                                @foreach($Product->categories as $Category)
                                    <li><a href="{{asset('')}}products/{{$Category->permalink}}">{{$Category->name}}</a></li>
                                @endforeach()
                            </ul>
                            <ul class="tags list">
                                <li>Tags:</li>
                                @foreach($Product->tag as $Tag)
                                    <li><a href="{{asset('')}}tag/{{$Tag->slug}}">{{$Tag->name}}</a></li>
                                @endforeach()
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding:40px 0px 40px 0px" class="product-discription">
        <div class="auto-container">
            <div class="tabs-box">
                <div class="tab-btn-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                        <li class="tab-btn" data-tab="#tab-2">Reviews ({{$TotalReview}})</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="content-box">
                            <h3>Product Description</h3>
                            {!! $Product->content !!}
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 review-block">
                                <div class="customer-review">
                                    <h3>Reviews</h3>
                                    @foreach($ProductReviews as $Review)
                                        <div class="single-review">
                                            <figure class="image-box"><img src="{{asset('')}}frontend/assets/images/resource/shop/review-1.png" alt=""></figure>
                                            <div class="inner">
                                                <ul class="rating">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                </ul>
                                                <h5>{{$Review->customer->name}}<span> - {{$Review->created_at->format('d/m/Y')}}</span></h5>
                                                <p>{{$Review->comment}}</p>
                                            </div>
                                        </div>
                                    @endforeach()
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                <div class="customer-comments">
                                    <h3>Be First To Rate It</h3>
                                    <div class="rating-box clearfix">
                                        <p>Your Rating</p>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                        </ul>
                                    </div>
                                    <form action="{{route('product.rating')}}" class="comment-form">
                                        <div class="row clearfix">
                                            @if($errors->has('star'))
                                                <span class="text-danger">{{ $errors->first('star') }}</span>
                                            @endif
                                            @if($errors->has('product_id'))
                                                <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                            @endif
                                            @if($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Your Review</label>
                                                <textarea name="message"></textarea>
                                                <input type="hidden" value="5" name="star">
                                                <input type="hidden" name="product_id" value="{{$Product->id}}">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                <button type="submit" class="theme-btn-one">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @if($Product->relatedProduct()->count() > 0)
        <div class="related-product" style="background-image: url({{asset('')}}frontend/assets/images/background/shop-2.jpg);">
            <div class="auto-container">
                <div class="top-title centred">
                    <h2>Related Products</h2>
                </div>
                <div class="row clearfix">
                    @foreach($Product->relatedProduct as $RelatedProduct)
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        @if($Product->productImages->count() > 0)
                                            @foreach($Product->productImages as $Image)
                                                <img src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" alt="{{$RelatedProduct->name}}">
                                                @break
                                            @endforeach
                                        @endif
                                    </figure>
                                    <div class="lower-content">
                                        <span class="price-box">$100</span>
                                        <h3><a href="shop-details.html">{{$RelatedProduct->name}}</a></h3>
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</section>
<!-- single-product end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()