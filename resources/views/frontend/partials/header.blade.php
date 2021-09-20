<header class="header-area header-responsive-padding header-height-1">
    <div class="header-bottom sticky-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-6 col-6">
            <div class="logo">
              <a href="/"
                ><img src="https://upload.wikimedia.org/wikipedia/vi/7/75/Vinmart_logo_sieu_thi.png" alt="logo"
              /></a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <div class="main-menu text-center">
              <nav>
                <ul>
                  <li><a href="/">Trang chủ</a></li>
                  <li><a href="{{route('product')}}">Mua sắm</a></li>
                  <li><a href="{{route('about')}}">Về chúng tôi</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <div class="header-action-wrap">
              <div class="header-action-style header-search-1">
                <a class="search-toggle" href="#">
                  <i class="pe-7s-search s-open"></i>
                  <i class="pe-7s-close s-close"></i>
                </a>
                <div class="search-wrap-1">
                  <form action="#">
                    <input placeholder="Search products…" type="text" />
                    <button class="button-search">
                      <i class="pe-7s-search"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="header-action-style">
                <a title="Login Register" href="{{route('login')}}"
                  ><i class="pe-7s-user"></i
                ></a>
              </div>
              <div class="header-action-style header-action-cart">
                <a class="" href="{{route('cart')}}"
                  ><i class="pe-7s-shopbag"></i>
                  <span class="product-count bg-black">01</span>
                </a>
              </div>
              <div class="header-action-style d-block d-lg-none">
                <a class="mobile-menu-active-button" href="#"
                  ><i class="pe-7s-menu"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>