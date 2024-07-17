<header>
        <div class="logo-area mt-30 d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3">
                        <div class="logo">
                            <a href="ind ex.html"><img src="{{asset('front/assets/images/logo.png')}}" width="200" height="60" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9">
                        <div class="header-meta-info d-flex align-items-center justify-content-between">
                            <div class="header-search-bar">
                                <form action="#">
                                    <div class="search-info p-relative">
                                        <button class="header-search-icon"><i class="fal fa-search"></i></button>
                                        <input type="text" placeholder="Search products...">
                                    </div>
                                </form>
                            </div>
                            <div class="header-meta header-language d-flex align-items-center">
                                <div class="header-meta__social d-flex align-items-center ml-25">
                                    <button class="header-cart p-relative tp-cart-toggle">
                                        <i class="fal fa-shopping-cart"></i>
                                    </button>
                                    <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav  hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <i class="fal fa-user"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                        <a class="dropdown-item pb-2 mb-1" href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-power me-1 mdi-20px"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area mt-20 d-none d-xl-block">
            <div class="for-megamenu p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3">
                            <div class="cat-menu__category p-relative">
                                <a class="tp-cat-toggle" href="#" role="button"><i
                                        class="fal fa-bars"></i>Categories</a>
                                <div class="category-menu category-menu-off">
                                    <ul class="cat-menu__list">
                                        <li><a href="shop.html"><i class="fal fa-user"></i> Candles</a></li>
                                        <li class="menu-item-has-children"><a href="shop.html"><i
                                                    class="fal fa-flower-tulip"></i> Handmade</a>
                                            <ul class="submenu">
                                                <li><a href="shop-2.html">Chair</a></li>
                                                <li><a href="shop-2.html">Table</a></li>
                                                <li><a href="shop.html">Wooden</a></li>
                                                <li><a href="shop.html">furniture</a></li>
                                                <li><a href="shop.html">Clock</a></li>
                                                <li><a href="shop.html">Gifts</a></li>
                                                <li><a href="shop.html">Crafts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html"><i class="fal fa-shoe-prints"></i> Gift Sets</a></li>
                                        <li><a href="shop.html"><i class="fal fa-smile"></i> Plastic Gifts</a></li>
                                        <li><a href="shop.html"><i class="fal fa-futbol"></i> Handy Cream</a></li>
                                        <li><a href="shop.html"><i class="fal fa-crown"></i> Cosmetics</a></li>
                                        <li><a href="shop.html"><i class="fal fa-gift"></i> Silk Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has">
                                            <a href="{{url('/')}}">Home</a>
                                       

                                        <li class="has">
                                            <a href="{{url('about')}}">About</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>