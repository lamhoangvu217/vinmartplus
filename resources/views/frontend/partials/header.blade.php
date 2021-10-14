
    <style>
        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
        }
        .giohang {
            font-size: 35px;
        }
        .input-search {
            height: 50px;
            width: 50px;
            border: 1px solid #e74c3c;
            padding: 10px;
            font-size: 15px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #fff;
            padding-right: 40px;
            color: black;
        }

        .input-search::placeholder {
            color: #bdc3c7;
            font-size: 15px;
            /* letter-spacing: 2px; */
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #e74c3c;
            background-color: transparent;
            pointer-events: painted;
            padding: 5px;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            /* border-radius: 0px; */
            background-color: transparent;
            /* border-bottom: 1px solid rgba(255, 255, 255, .5); */
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px; 
            background-color: transparent;
            /* border-bottom: 1px solid rgba(255, 255, 255, .5); */
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

    </style>

<header class="header-area header-responsive-padding header-height-1">
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6 col-6">
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
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="header-action-wrap d-flex justify-content-center align-items-center">

                        <div class="search-box">
                            <button class="btn-search"><i class="fas fa-search"></i></button>
                            <input type="text" class="input-search" placeholder="Gõ sản phẩm cần tìm">
                        </div>
                        @if (Route::has('login'))
                            @auth
                                <div class="dropdown " style="margin-right: 13px; margin-left: 13px;">
                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                                        <span>
                                            <img class="thumb-nail rounded-circle " src="{{ Auth::user()->image }}" alt=""
                                                width="35px" height="35px">
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


                        <div class="header-action-style header-action-cart" >
                            <a  href="{{ route('cart') }}"><i class="pe-7s-shopbag giohang"></i>
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
