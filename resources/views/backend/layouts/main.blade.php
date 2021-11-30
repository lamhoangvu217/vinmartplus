<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Admin Area</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/backend/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/backend/css/theme.css?ver=2.4.0') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/awaxf0qyu32cfdki89pxaillzpiyp5f9k4mqrfbf65kysnhr/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "http://127.0.0.1:8000/",
            selector: "textarea#detailarea",
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                },
                file: {
                    title: 'File',
                    items: 'newdocument restoredraft | preview | print '
                },
                edit: {
                    title: 'Edit',
                    items: 'undo redo | cut copy paste | selectall | searchreplace'
                },
                view: {
                    title: 'View',
                    items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen'
                },
                insert: {
                    title: 'Insert',
                    items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime'
                },
                format: {
                    title: 'Format',
                    items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat'
                },
                tools: {
                    title: 'Tools',
                    items: 'spellchecker spellcheckerlanguage | code wordcount'
                },
                table: {
                    title: 'Table',
                    items: 'inserttable | cell row column | tableprops deletetable'
                },
                help: {
                    title: 'Help',
                    items: 'help'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            relative_urls: false,
        };

        tinymce.init(editor_config);

    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('backend.partials.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.partials.main_header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('backend.partials.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/backend/js/bundle.js?ver=2.4.0') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/notify.js')}}"></script>
    <script src="{{ asset('/backend/js/scripts.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('/backend/js/charts/chart-ecommerce.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('/backend/js/orderStatus.js')}}"></script>
    
</body>

</html>
