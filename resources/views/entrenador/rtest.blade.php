@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
                    
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8"></div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div id="cerrar">
                                <input href="{{ route('/bateria' ) }}" type=image src="{{asset ('img/cerrar.png ')}}" width="30" height="30"><!--input boton de cerrar y regresar a index-->
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div id="color" class="content-box-large">
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

                                <!-- FECHA -->
                                <div class="form-group row">
                                    <label for="Usu_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha*') }}</label>

                                    <div id="let" class="col-md-6">
                                        <input id="Usu_fecha_nacimiento" type="date" class="form-control @error('Usu_fecha_nacimiento') is-invalid @enderror" name="Usu_fecha_nacimiento" value="{{ old('Usu_fecha_nacimiento') }}" required autocomplete="Usu_fecha_nacimiento" autofocus>

                                        @error('Usu_fecha_nacimiento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection