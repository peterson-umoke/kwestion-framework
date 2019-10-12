@extends('multiauth::layouts.app')

@section('app-content')
@include("multiauth::layouts.topbar")
@include("multiauth::layouts.menu")

<main class="content-container">
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
</main>

@endsection
