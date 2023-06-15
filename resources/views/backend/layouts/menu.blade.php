<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index-2.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index-2.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt=""
                    height="17"> --}}
                <h2 class="text-white py-4">Vegist</h2>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>


                <!-- Slider -->
                <li class="nav-item">
                    <a class="nav-link menu-link" data-bs-toggle="collapse" aria-expanded="false" role="button"
                        href="#sliderSidebar" aria-controls="sliderSidebar">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-slider">Slider</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('slider.*') ? 'show' : '' }}"
                        id="sliderSidebar">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('slider.index') }}" class="nav-link {{ request()->routeIs('slider.index') ? 'active' : '' }}" data-key="t-slider">
                                    View </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('slider.create') }}" class="nav-link {{ request()->routeIs('slider.create') ? 'active' : '' }}" data-key="t-slider-create">
                                    Create </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Slider End -->

                <!-- Category -->
                <li class="nav-item">
                    <a class="nav-link menu-link" data-bs-toggle="collapse" aria-expanded="false" role="button"
                        href="#categorySidebar" aria-controls="categorySidebar">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-category">Category</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('category.*') ? 'show' : '' }}"
                        id="categorySidebar">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('category.index') }}" class="nav-link {{ request()->routeIs('category.index') ? 'active' : '' }}" data-key="t-category">
                                    View </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.create') }}" class="nav-link {{ request()->routeIs('category.create') ? 'active' : '' }}" data-key="t-category-create">
                                    Create </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Category End -->

                <!-- Category -->
                <li class="nav-item">
                    <a class="nav-link menu-link" data-bs-toggle="collapse" aria-expanded="false" role="button"
                        href="#productSidebar" aria-controls="productSidebar">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-product">Product</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('product.*') ? 'show' : '' }}"
                        id="productSidebar">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('product.index') }}" class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}" data-key="t-product">
                                    View </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('product.create') }}" class="nav-link {{ request()->routeIs('product.create') ? 'active' : '' }}" data-key="t-product-create">
                                    Create </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Category End -->


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
