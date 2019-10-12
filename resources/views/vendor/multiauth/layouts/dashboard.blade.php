@extends('multiauth::layouts.app')

@section('app-content')
@include("multiauth::layouts.topbar")
@include("multiauth::layouts.menu")

<main class="content-container">
    <div class="inner-content">
        @foreach(config("menu.admin.sidebar") as $key)
        @if(((array_key_exists('route', $key) && request()->route()->getName() == $key['route']) || (array_key_exists('url', $key) && request()->path() == $key['url'])) && array_key_exists('children', $key) && !empty($key['children']))
        @include("multiauth::layouts.submenu")
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
        @elseif(((array_key_exists('route', $key) && request()->route()->getName() == $key['route']) || (array_key_exists('url', $key) && request()->path() == $key['url'])) && (array_key_exists('children', $key) || ! array_key_exists('children', $key)) && empty($key['children']))
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
