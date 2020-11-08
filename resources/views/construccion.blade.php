@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('En Construccion') }}</div>

                <div class="card-body">
                    <img src="{{ asset('../img/construccion.png') }}" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection