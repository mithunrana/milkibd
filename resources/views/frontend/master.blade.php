<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Bagery - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('')}}frontend/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/flaticon.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/owl.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/animate.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/color.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/jquery-ui.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/nice-select.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/global.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/style.css" rel="stylesheet">
<link href="{{asset('')}}frontend/assets/css/responsive.css" rel="stylesheet">
<link href="{{ asset('defaults/toastr/toastr.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="boxed_wrapper">
        <!-- LOADER -->
            <!--<div class="loader-wrap">
                <div class="preloader">
                    <div class="preloader-close">Preloader Close</div>
                    <div id="handle-preloader" class="handle-preloader">
                        <div class="animation-preloader">
                            <div class="spinner"></div>
                            <div class="txt-loading">
                                <span data-text-preloader="B" class="letters-loading">
                                    B
                                </span>
                                <span data-text-preloader="A" class="letters-loading">
                                    A
                                </span>
                                <span data-text-preloader="G" class="letters-loading">
                                    G
                                </span>
                                <span data-text-preloader="E" class="letters-loading">
                                    E
                                </span>
                                <span data-text-preloader="R" class="letters-loading">
                                    R
                                </span>
                                <span data-text-preloader="Y" class="letters-loading">
                                    Y
                                </span>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>-->
        <!-- END LOADER -->


        
        <!-- Home Popup Section -->
            @yield('product-sidebar')
        <!-- End Screen Load Popup Section --> 


        <!-- START HEADER -->
            @yield('main-header')
        <!-- END HEADER -->


        @yield('main-content-section')

        <!-- START SECTION BANNER -->
            @yield('banner-section')
        <!-- END SECTION BANNER -->


        <!-- START SECTION BANNER -->
            @yield('feature-section')
        <!-- END SECTION BANNER -->


        <!-- HISTORY SECTION -->
            @yield('history-section')
        <!-- END HISTORY SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('home-product-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('home-service-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('home-gallery-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('home-promotional-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('testimonial-section')
        <!-- HOME PRODUCT SECTION -->

        <!-- HOME PRODUCT SECTION -->
            @yield('home-news-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- HOME PRODUCT SECTION -->
            @yield('home-contact-section')
        <!-- HOME PRODUCT SECTION -->


        <!-- START FOOTER -->
            @yield('footersection')
        <!-- END FOOTER -->


        <!--Scroll to top-->
            <button class="scroll-top scroll-to-target" data-target="html">
                <span class="icon-Arrow-Up"></span>
            </button>
        <!--Scroll to top End-->
    </div>

    <!-- jequery plugins -->
    <script src="{{asset('')}}frontend/assets/js/jquery.js"></script>
    <script src="{{asset('')}}frontend/assets/js/popper.min.js"></script>
    <script src="{{asset('')}}frontend/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}frontend/assets/js/owl.js"></script>
    <script src="{{asset('')}}frontend/assets/js/wow.js"></script>
    <script src="{{asset('')}}frontend/assets/js/validation.js"></script>
    <script src="{{asset('')}}frontend/assets/js/jquery.fancybox.js"></script>
    <script src="{{asset('')}}frontend/assets/js/appear.js"></script>
    <script src="{{asset('')}}frontend/assets/js/jquery.countTo.js"></script>
    <script src="{{asset('')}}frontend/assets/js/scrollbar.js"></script>
    <script src="{{asset('')}}frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('')}}frontend/assets/js/nav-tool.js"></script>
    <script src="{{asset('')}}frontend/assets/js/jquery-ui.js"></script>
    <script src="{{asset('')}}frontend/assets/js/bxslider.js"></script>

    <!-- main-js -->
    <script src="{{asset('')}}frontend/assets/js/script.js"></script>

    <!-- Toastr -->
    <script src="{{ asset('defaults/toastr/toastr.min.js') }}"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif

        $('.smallimage').click(function(){
            $Imageurl = $(this).attr('data-image');
            $('.thigobximage').attr('href',$Imageurl);
            $('.thigoshowimage').attr('src',$Imageurl);
        });
    </script>

</body>
</html>