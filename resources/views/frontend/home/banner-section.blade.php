<!-- banner-section -->
<section class="banner-section style-one">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
        @foreach($SlideItems as $Slide)
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('')}}frontend/assets/images/banner/banner-1.jpg)"></div>
                <div class="anim-icon">
                    <div class="icon icon-1" style="background-image: url({{asset('')}}frontend/assets/images/icons/anim-icon-1.png);"></div>
                    <div class="icon icon-2" style="background-image: url({{asset('')}}frontend/assets/images/icons/anim-icon-2.png);"></div>
                    <div class="icon icon-3" style="background-image: url({{asset('')}}frontend/assets/images/icons/anim-icon-3.png);"></div>
                    <div class="icon icon-4" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-1.png);"></div>
                    <div class="icon icon-5" style="background-image: url({{asset('')}}frontend/assets/images/shape/shape-2.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="content-inner">
                        <div class="content-box">
                            <h1>Taste From  The Good Old Days.</h1>
                            <p>Trend Spotted by Europe Locals – Colorful Macarons!</p>
                            <div class="btn-box">
                                <a href="index.html" class="banner-btn">Explore Now</a>
                            </div>
                        </div>
                        <figure class="image-box style-one">
                            <img src="{{asset('')}}{{$Slide->image}}" alt="">
                        </figure>
                    </div>  
                </div>
            </div>
        @endforeach()
    </div>
</section>
<!-- banner-section end -->