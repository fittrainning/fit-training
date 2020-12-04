@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{route("Mensajes.update", [$Mensaje])}}">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label class="label">Mensaje</label>
                            <input required value="{{$Mensaje->Men_Mensaje}}" autocomplete="off" name="Men_Mensaje" class="form-control" type="text" placeholder="Men_Mensaje">
                        </div>
        
                        @include("notificacion")
                        <button class="btn btn-success">Guardar</button>
                        <a class="btn btn-primary" href="{{route("Mensajes.index")}}">Volver</a>
                    </form>
                </div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection