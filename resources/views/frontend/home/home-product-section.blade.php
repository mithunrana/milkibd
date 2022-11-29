    <!-- shop-section -->
    <section class="shop-section" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream.jpg);">
        <div class="auto-container">
            <div class="sec-title">
                <p>Our Shop</p>
                <h2>Our all Delicious <br />Products.</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach($LatestProducts as $Product)
                    <div class="shop-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{$Product->permalink}}">
                                    <img src="{{asset('')}}{{$Product->productFirstImageLongHeightSize($Product->id)}}" alt="">
                                </a>
                            </figure>
                            <div class="lower-content">
                                <span class="price-box">@if(Session::has('Currency')) <b>{{ Session::get('Currency')['symbol']}}</b> @endif @if($Product->sale_price == '') 0.00 @else {{$Product->sale_price}}@endif</span>
                                <h3><a href="{{$Product->permalink}}">{{$Product->name}}</a></h3>
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
                @endforeach()
            </div>
        </div>
    </section>
    <!-- shop-section end -->