    <!-- main-footer -->
    <footer class="main-footer" style="background-image: url(assets/images/background/footer-1.jpg);">
        <div class="auto-container">
            <div class="subscribe-inner clearfix">
                <div class="text pull-left">
                    <h2>Subscribe Newsletter</h2>
                </div>
                <div class="form-inner pull-right">
                    <form action="index.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your email" required="">
                            <button type="submit" class="theme-btn-one">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{asset('')}}frontend/assets/images/footer-logo.png" alt=""></a></figure>
                            </div>
                        </div>
                        @foreach($FooterBarObj->widgetset->sortBy('order') as $Widgets)
                            @if($Widgets->widget->type == 'text')
                                {!! $Widgets->content !!}
                            @elseif($Widgets->widget->type == 'menu')
                                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>{{$Widgets->widgetshowname}}</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                @foreach($Widgets->menu->menuitems->sortBy('order') as $Item)
                                                    <li><a style="{{$Item->css_class}}" href="{{$Item->title}}"><i class="{{$Item->icon_font}}"></i>{{$Item->title}}</a></li>
                                                @endforeach()
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif()
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <div class="copyright pull-left">
                    <p><a href="index.html">Bagery</a> &copy; 2020 All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->