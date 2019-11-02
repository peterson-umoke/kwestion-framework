@extends('admin::layouts.auth')
@section("meta_description","Email Reset Link")
@section("title","Get Reset Link")
@section("description","Enter Your Email to receive a reset link")
@section("content")
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email"
                   placeholder="Email" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block text-uppercase">
            {{ __('Send Password Reset Link') }}
        </button>
        <a class="btn btn-block btn-dark ml-0 text-uppercase" href="{{ route('admin.login') }}">
            {{ __('Back to Login?') }}
        </a>
    </form>
@endsection
