@extends('frontend.master')


@section('product-sidebar')
    @include('frontend.common.product-sidebar')
@endsection()


@section('main-header')
    @include('frontend.common.main-header')
@endsection()



@section('main-content-section')


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Gallery 2</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery 2</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- project-section -->
    <section class="gallery-page-2">
        <div class="auto-container">
            <div class="sortable-masonry">
                <div class="filters centred">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all"><span>All Item</span></li>
                        <li class="filter" data-role="button" data-filter=".cappuccino"><span>Cappuccino</span></li>
                        <li class="filter" data-role="button" data-filter=".macchiato"><span>macchiato</span></li>
                        <li class="filter" data-role="button" data-filter=".cioccolato"><span>Cioccolato</span></li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all cioccolato cappuccino macchiato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-10.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-10.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all cappuccino cioccolato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-11.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-11.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all bread macchiato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-12.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-12.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all cappuccino cioccolato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-13.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-13.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all cioccolato cappuccino macchiato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-14.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-14.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all cappuccino cioccolato">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/gallery/project-15.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="view-btn"><a href="assets/images/gallery/project-15.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-Zoom"></i></a></div>
                                    <h3><a href="gallery-2.html">Baking Breads</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->


@endsection()


@section('footersection')
    @include('frontend.common.footer')
@endsection()