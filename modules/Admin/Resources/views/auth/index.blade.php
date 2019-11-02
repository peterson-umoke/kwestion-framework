@extends('admin::layouts.auth')
@section("meta_description","Login")
@section("content")
    <form method="post" action="{{ route('admin.login') }}">
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

        <button type="submit" class="btn btn-primary btn-block text-uppercase">Sign in</button>
        @if (Route::has('admin.password.request'))
            <a class="btn btn-block btn-dark ml-0 text-uppercase" href="{{ route('admin.password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection
