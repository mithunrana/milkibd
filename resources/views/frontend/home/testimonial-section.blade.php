    <!-- testimonial-section -->
    <!--<section class="testimonial-section sec-pad" style="background-image: url({{asset('')}}frontend/assets/images/background/testimonial-1.jpg);">
        <figure class="image-layer wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{asset('')}}frontend/assets/images/resource/testimonial-1.png" alt=""></figure>
        <div class="auto-container">
            <div class="inner-box">
                <div class="sec-title">
                    <p>Testimonials</p>
                    <h2>What Clients Say About Bagery.</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipis elit eiusmod tempor incidunt sed labore dolore magna aliquaenim elit minim quis nost exercitation laboris aliquip.</p>
                        </div>
                        <div class="author-info">
                            <h4>Fiona Edwards</h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- testimonial-section end -->

    <!-- testimonial-style-two -->
<section class="testimonial-style-two centred" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-icecream-testimonials.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <div class="sec-title">
                <p>Testimonials</p>
                <h2>What Our Customer <br />Say?</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach($TopTenReview as $Review)
                    <div class="testimonial-block-one">
                        <div class="icon-box" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-5.png);">
                            <i class="icon-Quote"></i>
                        </div>
                        <div class="text">
                            <p>{{$Review->comment}}</p>
                        </div>
                        <div class="author-info">
                            <h4>{{$Review->Customer->name}}</h4>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->