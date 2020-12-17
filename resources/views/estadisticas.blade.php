@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <div id="cont"><br><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="est" class="row">
                        <div id="visitor">
                            {{ $dec->Dee_nombre }}

                            {!! $lava->render('Barchart', 'Dee_nombre', 'graph') !!}
                        </div>
                        <div id="ecoo" class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="ec1">
                                <div id="ebot">
                                    <h5>Deportes</h5>
                                </div>
                            </div>
                            <div class="ec2">
                                <div id="ebot">
                                    <h5>Fichas en Deporte</h5>
                                </div>
                            </div>
                            <div class="ec3">
                                <div id="ebot">
                                    <h5>Plan de Entrenamiento</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                            <div id="econ">
                                <div id="ecc1">deporte</div>
                                <div id="ecc2">ficha</div>
                                <div id="ecc3">
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            plan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
</div>
@endsection