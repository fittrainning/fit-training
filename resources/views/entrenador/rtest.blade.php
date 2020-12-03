@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div id="fondo">
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
                </div>
            </div>
        </div>
    </div>
@endsection