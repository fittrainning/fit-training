@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            @if(Session::has('menssaje'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ Session::get('menssaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
    
    @if(Auth::user()->Usu_rol == "entrenador")
        @foreach($entrenadores as $entre)
        @if($entre->Ent_Usu_id == Auth::user()->Usu_id)
            
        @else
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <a href="{{ route('entrenador.index') }}"><input type="button" value="completar perfil"></a>
            </div>
        </div>
        @endif
            
        @endforeach
    @endif

    @if(Auth::user()->Usu_rol == "director")
    @foreach($directores as $dire)
    @if($dire->Ent_Usu_id == Auth::user()->Usu_id)
        
    @else
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <a href="{{ route('director.index') }}"><input type="button" value="completar perfil"></a>
        </div>
    </div>
    @endif
        
    @endforeach
    @endif
    
@endsection