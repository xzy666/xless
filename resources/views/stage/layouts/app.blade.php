<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://mini.jiasule.com/framework/bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/vue@2.2.6/dist/vue.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('styles')
</head>
<body>
    <div id="app">
        @include('stage.particals.navbar')

        <div class="main">
            @yield('content')
        </div>

        @include('stage.particals.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/home.js') }}"></script>

    @yield('scripts')

    <script>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'Google-Analytics-ID', 'auto');
        ga('send', 'pageview');
    </script>



</body>
</html>
