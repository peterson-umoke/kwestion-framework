@extends('multiauth::layouts.app')
@section('app-content')
<div class="container-fluid overall-container text-center auth-containers">
    <div class="row d-table-cell justify-content-center">
        <div class="col-md-5 column">
            <div class="mb-3">
                <h1>{{env('APP_NAME')}}</h1>
            </div>
            <div class="card">
                <div class="card-body text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                Change Your Password
                            </h1>
                        </div>
                    </div>


                    <form method="POST" action="{{ route('admin.password.change') }}" aria-label="{{ __('Admin Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="oldPassword" class="col-md-12 col-form-label">{{ __('Old Password') }}</label>

                            <div class="col-md-12">
                                <input id="oldPassword" type="password" class="form-control{{ $errors->has('oldPassword') ? ' is-invalid' : '' }}" name="oldPassword" value="{{ $oldPassword ?? old('oldPassword') }}" required autofocus> @if ($errors->has('oldPassword'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldPassword') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
