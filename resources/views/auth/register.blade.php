@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
                <div class=""><center><img src="img/logo.png" width="20%" id="imgr"></center>{{ __('') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- TIPO DE DOCUMENTO -->
                        <div class="form-group row">
                            <label id="let" for="tdoc" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

                            <div class="col-md-6">
                                
                                <select id="tdoc" type="text" class="form-control @error('doc') is-invalid @enderror" name="tdoc" value="{{ old('tdoc') }}" required autocomplete="tdoc" autofocus>
                                    <option> </option>
                                        <option value="C.C">Cedula de Ciudadania</option>
                                        <option value="T.I">Tarjeta de Identidad</option>
                                </select>
                                @error('tdoc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- DOCUMENTO -->
                        <div class="form-group row">
                            <label id="let" for="doc" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Documento') }}</label>

                            <div class="col-md-6">
                                <input id="doc" type="text" class="form-control @error('doc') is-invalid @enderror" name="doc" value="{{ old('doc') }}" required autocomplete="doc" autofocus>
                                @error('doc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- NOMBRE -->
                        <div class="form-group row">
                            <label  id="let" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- APELLIDO -->
                        <div class="form-group row">
                            <label id="let" for="ape" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="ape" type="text" class="form-control @error('ape') is-invalid @enderror" name="ape" value="{{ old('ape') }}" required autocomplete="ape" autofocus>

                                @error('ape')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- FECHA DE NACIMIENTO -->
                        <div class="form-group row">
                            <label id="let" for="fec" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fec" type="date" class="form-control @error('fec') is-invalid @enderror" name="fec" value="{{ old('fec') }}" required autocomplete="fec" autofocus>

                                @error('fec')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <!-- NUMERO DE TELEFONO -->
                        <div class="form-group row">
                            <label id="let" for="num" class="col-md-4 col-form-label text-md-right">{{ __('Numero Telefonico') }}</label>

                            <div class="col-md-6">
                                <input id="num" type="text" class="form-control @error('num') is-invalid @enderror" name="num" value="{{ old('num') }}" required autocomplete="num" autofocus>

                                @error('num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- GENERO -->
                        <div class="form-group row">
                            <label id="let" for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                                
                                <select id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>
                                    <option> </option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                </select>
                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="let" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="let" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="let" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                               <button type="submit" class="btn btn-primary" id="but">
                                    {{ __('REGISTRAR') }}
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
