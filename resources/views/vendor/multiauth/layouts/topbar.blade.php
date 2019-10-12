<nav class="navbar-top">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-0 fixed-top">
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

                        <div class="dropdown-menu dropdown-menu-right specialUserDropdwo" aria-labelledby="navbarDropdown">
                            <!-- @admin('super')
                            <a class="dropdown-item" href="{{ route('admin.show') }}">{{ ucfirst(config('multiauth.prefix')) }}</a>
                            <a class="dropdown-item" href="{{ route('admin.roles') }}">Roles</a>
                            @endadmin -->
                            <h3 class="dropdown-header text-uppercase" style="font-size:0.9835rem;">Account</h3>
                            <a class="dropdown-item" href="{{ route('guest.welcome') }}" target="_blank">Visit Site</a>
                            <a class="dropdown-item" href="#" target="_blank">Profile</a>
                            <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                            <div class="dropdown-divider"></div>
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
