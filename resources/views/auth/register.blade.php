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
                            <input OnClick="location.href='{{ url('/') }}'" type=image src="img/cerrar.png" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6"><img id="imgr" src="img/logo.png"></div>
                    <div class="col-3"></div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- TIPO DE DOCUMENTO -->
                        <div class="form-group row">
                            <label for="tdoc" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

                            <div id="let" class="col-md-6">
                                
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
                            <label for="doc" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Documento') }}</label>

                            <div id="let" class="col-md-6">
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
                            <label  for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

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
                            <label for="ape" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

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
                            <label for="fec" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div id="let" class="col-md-6">
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
                            <label for="num" class="col-md-4 col-form-label text-md-right">{{ __('Numero Telefonico') }}</label>

                            <div id="let" class="col-md-6">
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
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div id="let" class="col-md-6">
                                
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div id="let" class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

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
