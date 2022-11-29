    <!-- project-section -->
    <section class="project-section" style="background-image: url({{asset('')}}frontend/assets/images/background/best-ice-cream-bangladesh.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>Photo Gallery</p>
                            <h2>Let’s See Our Gallery</h2>
                        </div>
                        <div class="text">
                            <p>Excepteur sint occaecat cupidat non proident sunt in culpa qui officia deserunt mollit anim est laborum. magni dolores eos  ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 porject-column">
                    <div class="project-tab">
                        <div class="tab-btn-box clearfix">
                            <ul class="project-tab-btns project-btn tab-btns clearfix post-filter pull-right">
                                @foreach($ProductFeatures as $Feature)
                                    <li class="p-tab-btn @if($loop->index == 0) active-btn @endif" data-tab="#p-tab-{{$Feature->id}}">{{$Feature->name}}</li>
                                @endforeach()
                            </ul>
                        </div>
                        <div class="tabs-content-inner">
                            <div class="p-tabs-content">
                                @foreach($ProductFeatures as $Feature)
                                    <div class="p-tab @if($loop->index == 0) active-tab @endif" id="p-tab-{{$Feature->id}}">
                                        <div class="project-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                            @foreach($Feature->products as $Product)
                                                @if($Product->productImages->count() > 0)
                                                    @foreach($Product->productImages as $Image)
                                                        <div class="project-block-one">
                                                            <div class="inner-box">
                                                                <figure class="image-box">
                                                                    <img src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" alt="">
                                                                </figure>
                                                                <div class="lower-content">
                                                                    <div class="view-btn">
                                                                        <a href="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a>
                                                                    </div>
                                                                    <h3><a href="{{asset('')}}{{$Product->permalink}}">{{$Product->name}}</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @break
                                                    @endforeach
                                                @endif
                                            @endforeach()
                                        </div>
                                    </div>
                                @endforeach()
                            </div>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->