@extends('multiauth::layouts.app')

@section('app-content')
<nav class="navbar-top">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-0">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle userdropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="user-details">
                                <span class="name">
                                    {{ Auth::user()->first_name . " " . Auth::user()->last_name }}
                                </span>
                                <span class="role">
                                    {{auth::user()->roles->first()->title}}
                                </span>
                            </span>
                            <span class="caret"></span>
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
                    <svg class="same-icon-size lnr lnr-chart-bars">
                        <use xlink:href="#lnr-chart-bars"></use>
                    </svg>
                </span>
                <span>dashboard</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.home') }}">
                <span>
                    <svg class="same-icon-size lnr lnr-users">
                        <use xlink:href="#lnr-users"></use>
                    </svg>
                </span>
                <span>users</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.home') }}">
                <span>
                    <svg class="same-icon-size lnr lnr-pencil">
                        <use xlink:href="#lnr-pencil"></use>
                    </svg>
                </span>
                <span>Pages</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.home') }}">
                <span>
                    <svg class="same-icon-size lnr lnr-cog">
                        <use xlink:href="#lnr-cog"></use>
                    </svg>
                </span>
                <span>settings</span>
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

@endsection
