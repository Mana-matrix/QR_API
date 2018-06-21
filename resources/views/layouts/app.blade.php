<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OpenChat') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<!--passport-clients>pass client</passport-clients>
<passport-authorized-clients>auth client</passport-authorized-clients>
<passport-personal-access-tokens>access token</passport-personal-access-tokens-->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-info sticky-top" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  OpenChat
                </a>


            </div>
        </nav>
        @yield('control_menu')

        <div class="container-fluid">
            <div class="row flex-xl-nowrap">
                <div class="col-2 col-md-2 col-xl-2 bd-sidebar nav" role="contentinfo">
                    <div class="card-body container-fluid">
                    @yield('left')
                    </div>
                </div>
                <main class="col-8 col-md-8 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
                    @yield('main')
                </main>

                <div class="d-none d-xl-block col-xl-2 bd-toc" role="contentinfo">
                    <div class="card-body container-fluid">
                    @yield('right')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
