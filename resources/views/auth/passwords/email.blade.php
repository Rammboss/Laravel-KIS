@extends('layouts.default')

@section('content')
    <div class="container" id="moki-login" style="max-width: 100%">
        <div class="row justify-content-center">
            <div class="col-md-4 vertical-center">
                <div class="container" id="moki-login" style="padding-top: 20%">
                    <h3 class="page-header">{{ __('Passwort zurücksetzen') }}</h3><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Benutzername') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" id="login-button" style="float: right">
                                    {{ __('Passwort zurücksetzen') }}
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
