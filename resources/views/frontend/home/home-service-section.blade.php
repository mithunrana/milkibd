    <!-- service-section -->
    <section class="service-section sec-pad centred" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-box-ice-cream.jpg);">
        <div class="auto-container">
            <div class="sec-title">
                <p>Services</p>
                <h2>Quality & Passion with <br />our Services!</h2>
            </div>
            <div class="row clearfix">
                @foreach($GetService as $Service)
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="bg-layer" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-3.png);"></div>
                                    <i class="icon-Ice-Cream"></i>
                                </div>
                                <div class="lower-content wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h3><a href="#">{{$Service->name}}</a></h3>
                                    <p>{!! $Service->description !!}</p>
                                    <div class="btn-box"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </section>
    <!-- service-section end -->