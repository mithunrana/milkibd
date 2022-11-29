<!-- main-footer -->
<footer class="main-footer" style="background-image: url({{asset('')}}frontend/assets/images/background/milki-ice-cream-industries.jpg);">
    <div class="auto-container">
        <div class="subscribe-inner clearfix">
            <div class="text pull-left">
                <h2>Subscribe Newsletter</h2>
            </div>
            <div class="form-inner pull-right">
                <label for="">@if(Session::has('message')) {{Session::get('message')}} @endif</label>
                <form action="{{route('newsletter.subscribe')}}" method="post" class="subscribe-form">
                    @csrf
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
                            <figure class="footer-logo"><a href="index.html"><img src="{{asset('')}}{{ $SettingKey['theme_thigo_logo_footer'] }}" alt=""></a></figure>
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
                <p>{{ $SettingKey['theme_thigo_copyright'] }}</p>
            </div>
            <ul class="footer-nav pull-right">
                <li><a href="{{route('terms.condition')}}">Terms & Condition</a></li>
                <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- main-footer end -->