<div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{ asset('front/assets/images/logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="main-menu text-center">
                    <nav>
                        <ul>
                            <li class="has">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{url('about')}}">About</a>
                                <ul class="submenu mega-menu">
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-4 col-lg-9">
                <div class="header-meta-info d-flex align-items-center ">
                    <div class="header-meta__social  d-flex align-items-center">
                        <button class="">
                            <i class="fal fa-shopping-cart" style="margin-right: 10px;"></i>
                        </button>
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class=" dropdown-toggle hide-arrow p-1" href="">
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
                    </div>
                    <div class="header-meta__search-5 ml-25">
                        <div class="header-search-bar-5">
                            <form action="#">
                                <div class="search-info-5 p-relative">
                                    <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search products...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
