@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>
                <div class="container">
                    <div class="row"></div>
                        <div class="col"></div>
                        <div class="col-7"><div id="CalendarioWeb"></div></div>
                        <div class="col"></div>
                </div>
                </div>

            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection
    <script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar();
    });
    </script>