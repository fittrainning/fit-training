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
    
@endsection