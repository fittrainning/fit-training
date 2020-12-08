@extends('layouts.app')
@section('script')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<!--fullcalendar-->
<script src="{{ asset('calendarioweb/core/main.js') }}" defer></script>
<script src="{{ asset('calendarioweb/daygrid/main.js') }}" defer></script>
<script src="{{ asset('calendarioweb/interaction/main.js') }}" defer></script>

<link href="{{ asset('calendarioweb/core/main.css') }}" rel="stylesheet">
<link href="{{ asset('calendarioweb/daygrid/main.css') }}" rel="stylesheet">

<!--- pligins (funcionalidades adicionales)--->
<script src="{{ asset('calendarioweb/list/main.js') }}" defer></script>
<script src="{{ asset('calendarioweb/timegrid/main.js') }}" defer></script>

<!--estilo de vistas calendario-->
<link href="{{ asset('calendarioweb/list/main.css') }}" rel="stylesheet">
<link href="{{ asset('calendarioweb/timegrid/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{ asset('css/style1.css') }}" rel="stylesheet">

<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        defaultDate:new Date(2020,12,20),
        plugins: [ 'dayGrid', 'interaction', 'timeGrid', 'list' ],
        //defaultView:'timeGridDay',
        header:{
            left:'prev, next, today, Miboton',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
        },
        customButtons:{
            Miboton:{
                text:"Boton",
                click:function(){
                        alert("¡Hola mundo!");
                        $('#exampleModal').modal();
                }
            }


        },
        dateClick:function(info){

            $('#exampleModal').modal();
            //console.log(info);
            calendar.addEvent({ title:"Evento x", date:info.dateStr});

        },

        eventClick:function(info){

            console.log(info);
            console.log(info.event.title);
            console.log(info.event.start);

            console.log(info.event.end);
            console.log(info.event.textColor);
            console.log(info.event.backgroundColor);

            console.log(info.event.extendedProps.descripcion);


        },

        events:[
            {
                title:"evento 1",
                start:"2020-09-13 12:30:00",
                descripcion:"Descripcion del evento 1"
            },{
                title:"evento 1",
                start:"2020-09-13 12:30:00",
                end:"2020-09-20 12:30:00",
                color:"#FFCCAA",
                textColor:"#000000"
            }
        ]
      });
      calendar.setOption('locale','Es');
      calendar.render();
    });

  </script>


@endsection

@section('content')
    <div class="row">

        <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#exampleModal">
           Agregar Evento
        </button>
         <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agrega un evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Nombre del evento:
            <input type="text" name="txtid" id="txtid" >

            <br>
            fecha:
            <input type="text" name="txtfecha" id="txtfecha">

            <br>

            <div class="form-row">

            <div class="form-group col-md-6">
                <label>Titulo:</label><br>
            <input type="text" class="form-group" name="txttitulo" id="txttitulo">
            </div>
            <div class="form-group col-md-4">
                <label>Hora:</label>
            <input type="text" class="form-group" name="txthora" id="txthora">
            </div>
            <div class="form-group col-md-12">
                <label>Descripcion:</label><br> 
            <textarea name="txtdescripcion" id="" class="form-group" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label>Color:</label><br>
            <input type="color" name="txtcolor" class="form-group" id="txtcolor">
            </div>



            </div>



        </div>

            <div class="modal-footer">
            <button id="btnagregar" class="btn btn-success">Agregar</button>
            <button id="btnmodificar" class="btn btn-success">Modificar</button>
            <button id="btnborrar" class="btn btn-danger">Borrar</button>
            <button id="btncancelar" class="btn btn-default">Cancelar</button>
            </div>
        </div>
        </div>
    </div>


        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont"><br><br>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div id="calendar"></div>
                    </div>
                    <div class="col-1"></div>
                </div>

            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection

