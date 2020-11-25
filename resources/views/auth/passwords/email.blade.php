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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo electrónico') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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
                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                </button>
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
