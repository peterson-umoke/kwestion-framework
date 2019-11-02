@extends('admin::layouts.auth')
@section("title","Reset Password");
@section("description","Enter your email and new password")
@section("meta_description","Reset Password")
@section("content")
    <form method="post" action="{{ route('admin.login') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
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
        <div class="form-group">
            <label class="sr-only" for="inputPassword">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required
                   autocomplete="new-password"
                   placeholder="Confirm Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block text-uppercase">Reset Password</button>
    </form>
@endsection
