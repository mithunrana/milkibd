<div class="product-sidebar">
    <div class="xs-sidebar-group info-group info-sidebar">
        <ul class="social-links clearfix">
            <li class="navSidebar-button"><i class="icon fas fa-shopping-basket"></i><span>Bye Now</span></li>
            <li><a href="{{ $SettingKey['theme_thigo_facebook'] }}"><i class="icon fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="{{ $SettingKey['theme_thigo_twitter'] }}"><i class="icon fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="{{ $SettingKey['theme_thigo_youtube'] }}"><i class="icon fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="sidebar-content">
                    <div class="title-box">
                        <h5>Featured Products</h5>
                    </div>
                    <div class="single-box">
                        @foreach($FeaturedPoducts as $Product)
                            <div class="single-item">
                                <figure class="image">
                                    <a href="{{asset('')}}{{$Product->permalink}}">
                                        @if($Product->productImages->count() > 0)
                                            @foreach($Product->productImages as $Image)
                                                <img src="{{asset('')}}{{$Image->urlwithoutextension }}{{$ImageSize[500]}}.{{$Image->extension }}" alt="{{ $Product->name }}">
                                            @break
                                            @endforeach
                                        @endif
                                    </a>
                                </figure>
                                <div class="item-name clearfix">
                                    <h6><a href="{{asset('')}}{{$Product->permalink}}">{{$Product->name}}</a></h6>
                                    <div class="bye-btn"><a href="{{asset('')}}{{$Product->permalink}}">Details</a></div>
                                </div>
                            </div>
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>