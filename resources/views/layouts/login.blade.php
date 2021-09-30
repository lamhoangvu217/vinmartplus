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

    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- All CSS is here ================================ -->
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('urdan/css/vendor/pe-icon-7-stroke.css') }}" />

    
    

    @yield('css')
</head>

<body>
    <div class="main-wrapper main-wrapper-2">
        @yield('content')
        
    </div>
    <!-- All JS is here -->
    
    <script src="{{asset('urdan/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('urdan/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('urdan/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('urdan/js/main.js') }}"></script>
    
    @yield('js')
</body>

</html>
