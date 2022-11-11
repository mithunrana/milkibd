<!-- feature-section -->
<section class="feature-section">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach($ProductFeatures as $Feature)
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-box" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-2.png);">
                                <h4>01</h4>
                            </div>
                            <div class="inner">
                                <h4>{{$Feature->name}}</h4>
                                <p style="color:white;">{!! $Feature->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach()
        </div>
    </div>
</section>
<!-- feature-section end -->