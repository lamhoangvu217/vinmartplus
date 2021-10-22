<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title', "Vinmart+")</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->

    <!-- Add site Favicon -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- All CSS is here ================================ -->
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('urdan/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/custom-css.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/animate.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/aos.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/magnific-popup.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/nice-select.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/select2.min.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/easyzoom.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('urdan/css/plugins/slinky.css') }}" /> --}}
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    @yield('css')
</head>

<body>
    <style>
        a.disabled {
            pointer-events: none;
            cursor: default;
        }

        span.remove-cart:hover {
            color: red;
            cursor: pointer;
        }

    </style>
    <div class="main-wrapper main-wrapper-2">
        @include('frontend.partials.header')
        @yield('content')
        @include('frontend.partials.footer')

    </div>


    <!-- All JS is here -->
    <script src="{{ asset('urdan/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/notify.js')}}"></script>
    <script src="{{ asset('urdan/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('urdan/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('urdan/js/main.js') }}"></script>
    <script src="{{ asset('urdan/js/cart.js') }}"></script>
    <script src="{{ asset('urdan/js/searchpd.js') }}"></script>
    <script src="{{ asset('urdan/js/category.js') }}"></script>
    <script src="{{ asset('urdan/js/search.js') }}"></script>
    {{-- <script src="{{asset('urdan/js/plugins/jquery-ui.js')}}"></script> --}}

    {{-- <script src="{{asset('urdan/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/vendor/modernizr-3.11.2.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/jquery-ui-touch-punch.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/jquery.nice-select.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/waypoints.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/counterup.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/select2.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/easyzoom.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/slinky.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/ajax-mail.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/wow.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/scrollup.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/aos.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/magnific-popup.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/jquery.syotimer.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/imagesloaded.pkgd.min.js')}}"></script> --}}
    {{-- <script src="{{asset('urdan/js/plugins/isotope.pkgd.min.js')}}"></script> --}}
    <!-- Main JS -->

    @yield('js')
</body>

</html>
