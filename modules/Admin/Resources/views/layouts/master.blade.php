<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield("meta_description")">
    <meta name="author" content="@yield("meta_author")">

    <title>@yield("title","The Page") | {{config('app.name','PilotFramework')}}</title>

    <link rel="apple-touch-icon" href="{{url('/modules/Admin/')}}/Resources/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{url('/modules/Admin/')}}/Resources/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/animsition/animsition.css">
    <link rel="stylesheet"
          href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/flag-icon-css/flag-icon.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('/modules/Admin/')}}/Resources/assets/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet"
          href="{{url('/modules/Admin/')}}/Resources/assets/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
@include("admin::layouts.top-header")
@include("admin::layouts.menu")

<!-- Page -->
<div class="page">
    <div class="page-content">
        @yield("content")
    </div>
</div>
<!-- End Page -->

<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© {{date("Y")}} <a
            href="http://github.com/peter.umoke/kwestion-framework">{{config('app.name')}}</a></div>
    <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://fb.com/peter.umoke">Kwestion Technologies</a>
    </div>
</footer>
<!-- Core  -->
<script
    src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/jquery/jquery.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/popper-js/umd/popper.min.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/bootstrap/bootstrap.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/animsition/animsition.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/switchery/switchery.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/intro-js/intro.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/screenfull/screenfull.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>

<!-- Scripts -->
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Component.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Plugin.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Base.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Config.js"></script>

<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Section/Menubar.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Section/GridMenu.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Section/Sidebar.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Section/PageAside.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Plugin/menu.js"></script>

<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/config/colors.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/config/tour.js"></script>
<script>Config.set('assets', '{{url('/modules/Admin/')}}/Resources/assets');</script>

<!-- Page -->
<script src="{{url('/modules/Admin/')}}/Resources/assets/js/Site.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Plugin/asscrollable.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Plugin/slidepanel.js"></script>
<script src="{{url('/modules/Admin/')}}/Resources/assets/global/js/Plugin/switchery.js"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>
