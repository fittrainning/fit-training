@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br><br>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- TIPO DE DOCUMENTO -->
                        <div class="form-group row">
                            <label for="Usu_tipodoc" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento*') }}</label>

                            <div id="let" class="col-md-6">
                                
                                <select id="Usu_tipodoc" type="text" class="form-control @error('Usu_tipodoc') is-invalid @enderror" 
                                name="Usu_tipodoc" value="{{ old('Usu_tipodoc') }}" required autocomplete="Usu_tipodoc" autofocus>
                                    <option value="T.I">Tarjeta de Identidad</option>
                                    <option value="C.C">Cedula de Ciudadania</option>
                                </select>
                                @error('Usu_tipodoc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- DOCUMENTO -->
                        <div class="form-group row">
                            <label for="Usu_id" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Documento*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="Usu_id" type="number" class="form-control @error('Usu_id') is-invalid @enderror" name="Usu_id" value="{{ old('Usu_id') }}" required autocomplete="Usu_id" autofocus>
                                @error('Usu_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- NOMBRE -->
                        <div class="form-group row">
                            <label  for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- APELLIDO -->
                        <div id="let" class="form-group row">
                            <label for="Usu_apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos*') }}</label>

                            <div class="col-md-6">
                                <input id="Usu_apellidos" type="text" class="form-control @error('Usu_apellidos') is-invalid @enderror" name="Usu_apellidos" value="{{ old('Usu_apellidos') }}" required autocomplete="Usu_apellidos" autofocus>

                                @error('Usu_apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- FECHA DE NACIMIENTO -->
                        <div class="form-group row">
                            <label for="Usu_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="Usu_fecha_nacimiento" type="date" class="form-control @error('Usu_fecha_nacimiento') is-invalid @enderror" name="Usu_fecha_nacimiento" value="{{ old('Usu_fecha_nacimiento') }}" required autocomplete="Usu_fecha_nacimiento" autofocus>

                                @error('Usu_fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <!-- NUMERO DE TELEFONO -->
                        <div class="form-group row">
                            <label for="Usu_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Numero Telefonico*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="Usu_telefono" type="tel" class="form-control @error('Usu_telefono') is-invalid @enderror" name="Usu_telefono" value="{{ old('Usu_telefono') }}" autocomplete="Usu_telefono" autofocus>

                                @error('Usu_telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- DIRECCION -->
                        <div class="form-group row">
                            <label for="Usu_direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="Usu_direccion" type="text" class="form-control @error('Usu_direccion') is-invalid @enderror" name="Usu_direccion" value="{{ old('Usu_direccion') }}" autocomplete="Usu_direccion" autofocus>

                                @error('Usu_direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- GENERO -->
                        <div class="form-group row">
                            <label for="Usu_genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero*') }}</label>

                            <div id="let" class="col-md-6">
                                
                                <select id="Usu_genero" type="text" class="form-control @error('Usu_genero') is-invalid @enderror" name="Usu_genero" value="{{ old('Usu_genero') }}" required autocomplete="Usu_genero" autofocus>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                @error('Usu_genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ROL -->
                        <input id="Usu_rol" type="hidden" class="form-control @error('Usu_rol') is-invalid @enderror" name="Usu_rol" value="deportista" required autocomplete="Usu_rol" autofocus>

                        <!-- FOTO -->
                        <input id="Usu_foto" type="hidden" class="form-control @error('Usu_foto') is-invalid @enderror" name="Usu_foto" value="porfile.png" required autocomplete="Usu_foto" autofocus>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña*') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <br>
                                {{ __('campo requerido (*)') }}
                                <!-- pedir los capos obligatorios en el archivo app/Http/Controller/Auth/RegisterController.php -->
                            </div>
                        </div><br>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button id="but" type="submit" class="btn btn-primary">
                                    {{ __('REGISTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
</div>
@endsection
