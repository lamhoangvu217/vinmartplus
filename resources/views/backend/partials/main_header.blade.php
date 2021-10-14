<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="/admin" class="logo-link">
                    {{-- <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> --}}
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-search ml-3 ml-xl-0">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                            <div class="user-toggle">
                                
                                <div class="user-info d-none d-xl-block">
                                   
                                    <div class="user-name ">{{ Auth::user()->name }}</div>
                                <a class="nav-link btn btn-danger ml-4" style="color: #fff;" href="{{ route('logout.admin') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    
                                    
                                    {{ __('Đăng xuất') }} 
                                    <i class="fas fa-sign-out-alt ml-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    

                                    <form id="logout-form" action="{{ route('logout.admin') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </div>
                            </div>
                        </a>
                       
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
