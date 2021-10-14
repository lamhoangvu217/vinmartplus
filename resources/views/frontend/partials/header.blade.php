<header class="header-area header-responsive-padding header-height-1">
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="/"><img src="https://upload.wikimedia.org/wikipedia/vi/7/75/Vinmart_logo_sieu_thi.png" 
                                alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="/">Trang chủ</a></li>
                                <li><a href="{{ route('product') }}">Mua sắm</a></li>
                                <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-action-wrap">
                        

                        @if (Route::has('login'))
                            @auth
                                <div class="dropdown" style="margin-right: 13px;">
                                    <a class="" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown">
                                        <span>
                                            <img class="thumb-nail rounded-circle"
                                                src="{{ Auth::user()->image }}"
                                                alt="" width="23px" height="23px">
                                        </span>

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            @else
                                <div class="header-action-style">
                                    <a title="Login Register" href="{{ route('login') }}"><i class="pe-7s-user"></i></a>
                                </div>
                            @endauth


                        @endif


                        <div class="header-action-style header-action-cart">
                            <a class="" href="{{ route('cart') }}"><i class="pe-7s-shopbag"></i>
                                {{-- <span class="product-count bg-black">{{ Cart::count() }}</span> --}}
                                <span class="product-count bg-black">{{ Cart::content()->count() }}</span>
                            </a>
                        </div>
                        <div class="header-action-style d-block d-lg-none">
                            <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
