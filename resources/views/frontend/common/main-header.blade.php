    <!-- main header -->
    <header class="main-header @if(Route::currentRouteName() == 'home') style-one @else style-one style-five @endif">
        <!-- header-lower -->
        <div @if(Route::currentRouteName() != 'home') style="background:#e3a087"  @endif class="header-lower">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img src="{{asset('')}}frontend/assets/images/test2.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                @foreach($MainMenuLocationObj->menu->menuitems->where('parent_id',0) as $Item)
                                    @if(count($Item->childItems))
                                        <li class="dropdown {{$Item->css_class}}"><a href="{{$Item->url}}">{{$Item->title}} </a>
                                            <ul>
                                                @foreach ($Item->childItems as $childItems)
                                                    @include('frontend.common.submenu', ['sub_items' => $childItems])
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="{{$Item->css_class}}"><a href="{{$Item->url}}">{{$Item->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-1.png);" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-Search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user-btn">
                        <a href="@if(Auth::guard('customer')->check()) {{route('customer.dashboard')}} @else {{route('customer.login')}} @endif" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-1.png);">
                            <i class="icon-Profile"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img src="{{asset('')}}frontend/assets/images/test2.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-1.png);" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-Search"></i></button>
                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                <div class="form-container">
                                    <form method="post" action="blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user-btn">
                        <a href="@if(Auth::guard('customer')->check()) {{route('customer.dashboard')}} @else {{route('customer.login')}} @endif" style="background-image: url({{asset('')}}frontend/assets/images/icons/icon-bg-1.png);">
                            <i class="icon-Profile"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- main-header end -->

		
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-3.png" alt="" title=""></a></div>
            <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->