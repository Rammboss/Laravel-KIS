@extends('layouts.default')

@section('content')
@if(Auth::check())
      <script>window.location = "/home";</script>
@else
<div class="container" id="moki-login" style="max-width: 100%">
    <div class="row justify-content-center">
        <div class="col-md-4 vertical-center">
            <div class="container" id="moki-login" style="padding-top: 35%">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username">{{ __('Benutzername') }}</label>
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Passwort') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="row">
                            <label>
                                <a class="btn btn-link" id="medical-report-link" href="{{ route('password.request') }}">
                                    {{ __('Passwort vergessen?') }}
                                </a>
                            </label>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" id="login-button" style="float: right">
                                    {{ __('Anmelden') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
