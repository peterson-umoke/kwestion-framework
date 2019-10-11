@extends('multiauth::layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>

    <div class="card-body">
        @include('multiauth::message')
        You are logged in to {{ config('multiauth.prefix') }} side!
    </div>
</div>
@endsection
