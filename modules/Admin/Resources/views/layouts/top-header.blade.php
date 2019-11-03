<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{url('/modules/Admin/')}}/Resources/assets/images/logo.png"
                 title="Remark">
            <span class="navbar-brand-text hidden-xs-down">{{config("app.name")}}</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <span class="avatar avatar-online">
                            <img src="{{url('/modules/Admin/')}}/Resources/assets/global/portraits/5.jpg" alt="...">
                            <i></i>

                        </span>
                        <style>
                            .navbar-avatar {
                                padding: 10px !important;
                            }

                            div.username-details {
                                display: inline-block;
                                position: relative;
                                top: 5px;
                            }

                            div.username-details div.fullname {
                                font-size: 1rem;
                                font-weight: 500;
                            }
                        </style>
                        <div class="username-details">
                            <div class="fullname">
                                {{ucwords(auth()->user()->first_name . " " . auth()->user()->last_name)}}</div>
                            <div class="role">{{get_current_user_role()->description}}</div>
                        </div>
                    </a>
                    <div class="dropdown-menu" role="menu" style="min-width: 250px;">
                        @foreach(config('menu.admin.user_profile') as $menu)
                            <a class="dropdown-item" href="{{get_route($menu['route'])}}" role="menuitem"><i
                                    class="{{$menu['icon']}}" aria-hidden="true"></i>
                                {{$menu['title']}}</a>
                        @endforeach
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="{{route("admin.logout.simple")}}" role="menuitem"><i
                                class="icon wb-power" aria-hidden="true"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
