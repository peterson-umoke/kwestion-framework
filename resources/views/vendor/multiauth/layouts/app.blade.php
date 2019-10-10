<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdn.lineicons.com">
    <link rel="dns-prefetch" href="//cdn.linearicons.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('admin.home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name . " " . Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @admin('super')
                                    <a class="dropdown-item" href="{{ route('admin.show') }}">{{ ucfirst(config('multiauth.prefix')) }}</a>
                                    <a class="dropdown-item" href="{{ route('admin.roles') }}">Roles</a>
                                    @endadmin
                                    <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
        <nav class="navbar-left position-fixed">
            <ul class="menubar">
                <li class="menu-item">
                    <a href="{{ route('admin.home') }}">
                        <span>
                            <svg class="lnr lnr-chart-bars">
                                <use xlink:href="#lnr-chart-bars"></use>
                            </svg>
                        </span>
                        <span>dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>

        <main class="content-container">
            <div class="content full-page">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="page-actions">
                        <div>
                            <div class="control-group date"><span><input type="text" id="start_date" value="2019-09-10" placeholder="From" class="control flatpickr-input" readonly="readonly"></span></div>
                            <div class="control-group date"><span><input type="text" id="end_date" value="2019-10-10" placeholder="To" class="control flatpickr-input" readonly="readonly"></span></div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
