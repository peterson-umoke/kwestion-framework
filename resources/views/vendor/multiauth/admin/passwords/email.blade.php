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
                                Recover Password
                            </h1>
                        </div>
                    </div>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Admin Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-12 col-form-label">{{ __('Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                                <a class="btn btn-link pl-0 pr-0" href="{{ route('admin.password.request') }}">
                                    <i class="fas fa-arrow-left"></i> {{ __('Sign In?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
