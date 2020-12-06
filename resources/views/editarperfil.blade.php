@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont">
            <div id="fondo">
                <div id="edit">
                    <form method="POST" action="{{route("users.update", [$user])}}">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label class="label">Nombre</label>
                            <input required value="{{ $user->Usu_id }}" autocomplete="off" name="name" class="form-control" type="text" placeholder="nombre">
                        </div>

                        <button class="btn btn-success">Guardar</button>
                        <a class="btn btn-primary" href="{{route("users.index")}}">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection