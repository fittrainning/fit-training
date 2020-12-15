@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{ route('Deportistas.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <br>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cenn">
                                            <h3>Completa los datos de tu perfil</h3>
                                        </div>
                                    </div>
                                    <hr id="separa">
                                    <br>
                                    <div class="row d-flex justify-content-center">
                                        <div id="color" class="form-group row">
                                            <label class="col-lg-4 col-form-label text-lg-left">Ficha</label>
                                            <div id="let3" class="col-lg-8">
                                                <select name="Dep_Cod_Fic">
                                                    @foreach($fichas as $ficha)
                                                        <option value="{{ $ficha->Fic_Cod }}">{{ $ficha->Fic_Cod }} - {{ $ficha->Fic_Nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div id="color" class="form-group row">
                                            <label class="col-lg-4 col-form-label text-lg-left">Deporte</label>
                                            <div id="let3" class="col-lg-8">
                                                <select name="Dep_cod_Dee">
                                                    @foreach($deportes as $deporte)
                                                        <option value="{{ $deporte->Dee_cod }}">{{ $deporte->Dee_cod }} - {{ $deporte->Dee_nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="Dep_Usu_id" value="{{ Auth::user()->Usu_id }}" readonly>
                                    <input type="hidden" name="Dep_estado" value="1" readonly>
                                    <input type="hidden" name="Dep_razon" value="ninguna" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <img id="centro1" src="{{ asset('../img/Proceso-2.png') }}">
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <input id="enviar"  type="submit" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection
                
            