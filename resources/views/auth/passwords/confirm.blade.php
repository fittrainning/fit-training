@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
                <br>
                <br>
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <div id="cerrar">
                            <input OnClick="location.href='{{ url('/') }}'" type=image src="{{ asset('img/cerrar.png') }}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6"><img id="imgr" src="{{ asset('img/logo.png') }}"></div>
                    <div class="col-3"></div>
                </div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <button type="submit" id="bottt" class="btn btn-primary">
                                    {{ __('Confirmar contraseña') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
