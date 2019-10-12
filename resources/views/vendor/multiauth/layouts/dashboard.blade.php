@extends('multiauth::layouts.app')

@push("scripts")
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
        moveDown = 65;
        moveUp = -65;
        count = 0;
        countKeyUp = 0;
        pageDown = 65;
        pageUp = -65;
        scroll = 0;

        listLastElement = $('.menubar li:last-child').offset();

        if (listLastElement) {
            lastElementOfNavBar = listLastElement.top;
        }

        navbarTop = $('.navbar-left').css("top");
        menuTopValue = $('.navbar-left').css('top');
        menubarTopValue = menuTopValue;

        documentHeight = $(document).height();
        menubarHeight = $('ul.menubar').height();
        navbarHeight = $('.navbar-left').height();
        windowHeight = $(window).height();
        contentHeight = $('.content').height();
        innerSectionHeight = $('.inner-section').height();
        gridHeight = $('.grid-container').height();
        pageContentHeight = $('.page-content').height();

        if (menubarHeight <= windowHeight) {
            differenceInHeight = windowHeight - menubarHeight;
        } else {
            differenceInHeight = menubarHeight - windowHeight;
        }

        if (menubarHeight > windowHeight) {
            document.addEventListener("keydown", function(event) {
                if ((event.keyCode == 38) && count <= 0) {
                    count = count + moveDown;

                    $('.navbar-left').css("top", count + "px");
                } else if ((event.keyCode == 40) && count >= -differenceInHeight) {
                    count = count + moveUp;

                    $('.navbar-left').css("top", count + "px");
                } else if ((event.keyCode == 33) && countKeyUp <= 0) {
                    countKeyUp = countKeyUp + pageDown;

                    $('.navbar-left').css("top", countKeyUp + "px");
                } else if ((event.keyCode == 34) && countKeyUp >= -differenceInHeight) {
                    countKeyUp = countKeyUp + pageUp;

                    $('.navbar-left').css("top", countKeyUp + "px");
                } else {
                    $('.navbar-left').css("position", "fixed");
                }
            });

            $("body").css({
                minHeight: $(".menubar").outerHeight() + 100 + "px"
            });

            window.addEventListener('scroll', function() {
                documentScrollWhenScrolled = $(document).scrollTop();

                if (documentScrollWhenScrolled <= differenceInHeight + 200) {
                    $('.navbar-left').css('top', -documentScrollWhenScrolled + 65 + 'px');
                    scrollTopValueWhenNavBarFixed = $(document).scrollTop();
                }
            });
        }
    });
</script>
@endpush

@section('app-content')
@include("multiauth::layouts.topbar")
@include("multiauth::layouts.menu")

{{-- {{dd(request()->url())}} --}}
{{-- {{var_dump()}} --}}
<main class="content-container">
    <div class="inner-content">
        @foreach(config("menu.admin.sidebar") as $key)
        @if (array_key_exists('children', $key) && !empty($key['children']))
            @include("multiauth::layouts.submenu")
            {{-- @if () --}}
            @if (strpos(request()->url(),request()->route()->uri()))
            <div class="content-wrapper">
                <div class="content">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>@yield("page-title", "Page Title")</h1>
                        </div>
                        <div class="page-actions">
                            <div>
                                @yield("page-actions")
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            @break
            @endif
        @endif

        @if(((array_key_exists('route', $key) && request()->route()->getName() == $key['route']) || (array_key_exists('url', $key) && request()->path() == $key['url'])) && (array_key_exists('children', $key) || ! array_key_exists('children', $key)) && empty($key['children']))
        <div class="content full-page">
            <div class="page-header">
                <div class="page-title">
                    <h1>@yield("page-title", "Page Title")</h1>
                </div>
                <div class="page-actions">
                    <div>
                        @yield("page-actions")
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
        @endif
        @endforeach
    </div>
</main>

@endsection
