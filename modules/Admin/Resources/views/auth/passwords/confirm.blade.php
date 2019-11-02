@extends('admin::layouts.auth')
@section("title","Confirm Password");
@section("description","Please confirm your password before continuing")
@section("content")
    <form method="post" action="{{ route('admin.password.confirm') }}">
        @csrf
        <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                   required autocomplete="current-password"
                   placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block text-uppercase">{{ __('Confirm Password') }}</button>
        @if (Route::has('admin.password.request'))
            <a class="btn btn-block btn-dark ml-0 text-uppercase" href="{{ route('admin.password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection
