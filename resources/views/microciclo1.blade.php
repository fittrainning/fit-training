@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{ route('Microciclos.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="colo">
                                    <h2 id="centro">Mesociclo</h2>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        @foreach($plan as $pla)
                                            @foreach($meso as $mes)
                                                @if($pla->Pla_id_Ent == Auth::user()->Usu_id)
                                                    @if($pla->Pla_id == $mes->Mes_Pla_Id)
                                                        <input type="hidden" name="Mic_Mes_Id_Gen" value="{{ $mes->Mes_Id_Gen }}">
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="centro3">
                                            <div id="let4">
                                                Codigo
                                                <select name="Mic_id" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="centro3">
                                            <div id="let4">
                                                Tipo
                                                <select name="Mic_tipo" required>
                                                    <option value="(O) Ordinario">(O) Ordinario</option>
                                                    <option value="(C) Carga">(C) Carga</option>
                                                    <option value="(CH) Choque">(CH) Choque</option>
                                                    <option value="(R) Recuperacion">(R) Recuperacion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Fecha fin
                                                <input type="date" name="Mic_dias" required>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Capacidad
                                                <select name="Mic_capacidad" required>
                                                    <option value="Fuerza">Fuerza</option>
                                                    <option value="Velocidad">Velocidad</option>
                                                    <option value="Resistencia">Resistencia</option>
                                                    <option value="Elasticidad">Elasticidad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Duracion
                                                <input type="text" name="Mic_duracion" required>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Nº Sesiones
                                                <input type="number" name="Mic_numero_Ses" required>
                                            </div>
                                        </div><br><br><br>
                                    </div>
                                    <hr id="separa"><br>
                                    <div class="row">
                                        <div class="col-12"><h3 id="centro">Cargas</h3></div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Volumen
                                                <input type="number" name="Mic_volumen_micro"required>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="centro3">
                                            <div id="let3">
                                                Intensidad
                                                <input type="number" name="Mic_intensidad_micro"required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        
                                </div>
                                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <button id="bott" type="submit">Crear Microciclo</button>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    
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