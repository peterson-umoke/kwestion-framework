@extends('admin::layouts.auth')
@section("title","Verify Your Email Address")
@section("description")
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
@endsection
@section("content")
    <form class="d-inline" method="POST" action="{{ route('admin.verification.resend') }}">
        @csrf
        <button type="submit"
                class="btn btn-link p-0 m-0 align-baseline btn-block">{{ __('click here to request another') }}</button>
    </form>
@endsection
