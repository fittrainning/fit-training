@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <form method="POST" action="{{route("Mensajes.store")}}">
                @csrf
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    <div id="buscarme" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <input type="hidden" name="Men_em_Usu_id" value="{{ Auth::user()->Usu_id }}">
                        <select name="Men_re_Usu_id" id="bucarmens">
                            <option id="buss" value="1234567890">Prueba</option>
                            <option id="buss" value="1022437184">yo</option>
                        </select>
                        <img id="bucarmens1" src="{{ asset('img/buscar.png') }}" alt="">
                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                </div><br><br>
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    <div id="color111" class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <textarea name="Men_Mensaje" id="mensajes1" cols="93" rows="15"></textarea>
                        <input type="hidden" name="Men_Estado" value="Enviado">
                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                </div>

                <div class="row">
                    <div class="col-2 justify-content-end">
                        <br>
                        <a class="btn btn-primary" href="{{route("Mensajes.index")}}">Volver</a>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-2">
                        <br>
                        <button class="btn">
                            <img src="{{ asset('img/envio.png') }}" alt="" width="50px">
                        </button>
                    </div>
                </div>
            </form>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection