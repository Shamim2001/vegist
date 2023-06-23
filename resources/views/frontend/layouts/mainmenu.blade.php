<div class="header-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i
                                    class="ion-close-round"></i></button>
                        </div>
                        <!-- menu start -->
                        <div class="navbar-collapse" id="navbarContent">
                            <div class="megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="{{ route('front.home') }}" class="link-title {{ request()->routeIs('front.home') ? 'active' : '' }}">
                                                <span class="sp-link-title">Home</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{ route('front.shop') }}" class="link-title {{ request()->routeIs('front.shop') ? 'active' : '' }}">
                                                <span class="sp-link-title">Shop</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- menu end -->
                        <div class="img-hotline">
                            <div class="image-line">
                                <a href="javascript:void(0)"><img src="{{ asset('frontend') }}/image/icon_contact.png"
                                        class="img-fluid" alt="image-icon"></a>
                            </div>
                            <div class="image-content">
                                <span class="hot-l">Hotline:</span>
                                <span>0123 456 789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
