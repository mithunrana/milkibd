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
                <h1>THIGO THIGO</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Ice Cream</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- shop-page-section -->
<section class="shop-page-section shop-page-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="shop-sidebar default-sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <form action="shop-1.html" method="post" class="search-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search..." required="">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>Shop by Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="categories-list clearfix">
                                @foreach($Categories as $Category)
                                    <li>
                                        <a href="{{asset('')}}products/{{$Category->permalink}}">{{$Category->name}}</a>
                                    </li>
                                @endforeach()
                            </ul>
                        </div>
                    </div>



                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h3>Featured Products</h3>
                        </div>
                        <div class="post-inner">
                            @foreach($FeaturedPoducts as $Product)
                                <div class="post">
                                    <figure class="image-box">
                                        <a href="{{route('productview',$Product->permalink)}}">
                                            @if($Product->productImages->count() > 0)
                                                @foreach($Product->productImages as $Image)
                                                    <td>
                                                        <img src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[150]}}.{{$Image->extension }}" width="50" alt="Image">
                                                    </td>
                                                    @break
                                                @endforeach
                                            @else
                                                <td><img src="{{asset('')}}demo-image.png" width="50" alt="Image"></td>
                                            @endif
                                        </a>
                                    </figure>
                                    <h5>
                                        <a href="{{route('productview',$Product->permalink)}}">{{$Product->name }}</a>
                                    </h5>
                                    <p>@if(Session::has('Currency')) <b>{{ Session::get('Currency')['symbol']}}</b> @endif @if($Product->sale_price == '') 0.00 @else {{$Product->sale_price}}@endif</p>
                                </div>
                            @endforeach()
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="our-shop">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left clearfix">
                            <div class="text"><p>Showing 1–12 of 50 Results</p></div>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <p>Short by</p>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Popularity">Popularity</option>
                                        <option value="1">New Collection</option>
                                        <option value="2">Top Sell</option>
                                        <option value="4">Top Ratted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="menu-box">
                                <a href="{{route('products')}}"><i class="icon-Menu"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        @foreach($ProductList as $Product)
                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{asset('')}}{{$Product->productFirstImageLongHeightSize($Product->id)}}" alt="{{$Product->name}}">
                                        </figure>
                                        <div class="lower-content">
                                            <span class="price-box">@if(Session::has('Currency')) <b>{{ Session::get('Currency')['symbol']}}</b> @endif @if($Product->sale_price == '') 0.00 @else {{$Product->sale_price}}@endif</span>
                                            <h3>
                                                <a href="{{route('productview',$Product->permalink)}}">{{$Product->name}}</a>
                                            </h3>
                                            <ul class="rating clearfix">
                                                <li><i class="icon-Star"></i></li>
                                                <li><i class="icon-Star"></i></li>
                                                <li><i class="icon-Star"></i></li>
                                                <li><i class="icon-Star"></i></li>
                                                <li><i class="icon-Star"></i></li>
                                            </ul>
                                            <div class="cart-btn">
                                                <a href="{{route('productview',$Product->permalink)}}" class="theme-btn-two">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach()
                    </div>
                    {{ $ProductList->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-page-section end -->

@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()