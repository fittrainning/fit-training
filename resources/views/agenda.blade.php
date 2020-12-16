@extends('layouts.app')
@section('script')



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

            $('#txtfecha').val(info.dateStr)
            $('#exampleModal').modal();

            //console.log(info);
            //calendar.addEvent({title: "Evento x",date: info.dateStr});
        },

        eventClick:function(info) {

            console.log(info);

            console.log(info.event.title);

            console.log(info.event.color);
            console.log(info.event.start);


            console.log(info.event.end);
            console.log(info.event.textColor);
            console.log(info.event.backgroundColor);


            console.log(info.event.extendedProps.Ses_id);
            console.log(info.event.extendedProps.Ses_Mic_Id_Gen);
            console.log(info.event.extendedProps.Ses_lugar);
            console.log(info.event.extendedProps.Ses_volumen);
            console.log(info.event.extendedProps.Ses_intensidad);
            console.log(info.event.extendedProps.Ses_calificacion);
            console.log(info.event.extendedProps.Ses_capacidad);
            console.log(info.event.extendedProps.Ses_tipo_preparacion);

            $('#txtId').val(info.event.extendedProps.Ses_id);
            $('#txtTitulo').val(info.event.title);

            mes = (info.event.start.getMonth()+1);
            dia = (info.event.start.getDate());

            anio = (info.event.start.getFullYear());

            mes=(mes<10)?"0"+mes:mes;
            mes=(dia<10)?"0"+dia:dia;

            hora = (info.event.start.getHours()+":"+info.event.start.getMinutes());




            $('#txtIdmicro').val(info.event.extendedProps.Ses_Mic_Id_Gen);
            $('#txtLugar').val(info.event.extendedProps.Ses_lugar);
            $('#txtcolor').val(info.event.color);
            $('#txtfecha').val(anio+" - "+mes+" - "+dia);
            $('#txthora').val(hora);
            $('#txtvolumen').val(info.event.extendedProps.Ses_volumen);
            $('#txtintensidad').val(info.event.extendedProps.Ses_intensidad);
            $('#txtcalificaion').val(info.event.extendedProps.Ses_calificacion);
            $('#txtcapacidad').val(info.event.extendedProps.Ses_capacidad);
            $('#txtpreparacion').val(info.event.extendedProps.Ses_tipo_preparacion);


            $('#exampleModal').modal();

        },

        /*events:[
            {
                title:"evento 1",
                start:"2020-12-13 12:30:00",
                descripcion:"Descripcion del evento 1"
            },{
                title:"evento 1",
                start:"2020-09-13 12:30:00",
                end:"2021-01-20 12:30:00",
                color:"#FFCCAA",
                textColor:"#000000"
            }
        ]*/
            events:"{{url('/sesion/show')}}"

      });
      calendar.setOption('locale','Es');
      calendar.render();
      $('#btnagregar').click(function(){
          objEvento=recolectarDatosGUI("POST");
          EnviarInformacion('',objEvento);
      });

      $('#btnborrar').click(function(){
          objEvento=recolectarDatosGUI("DELETE");
          EnviarInformacion('/'+$('#txtId').val(),objEvento);
      });
      $('#btnmodificar').click(function(){
          objEvento=recolectarDatosGUI("PATCH");
          EnviarInformacion('/'+$('#txtId').val(),objEvento);
      });

      function recolectarDatosGUI(method){

        nuevoEvento={

            Ses_id:$('#txtId').val(),
            title:$('#txtTitulo').val(),
            Ses_Mic_Id_Gen:$('#txtIdmicro').val(),
            Ses_lugar:$('#txtLugar').val(),
            color:$('#txtcolor').val(),
            textColor:'#FFFFFF',
            start:$('#txtfecha').val()+" "+$('#txthora').val(),
            end:$('#txtfecha').val()+" "+$('#txthora').val(),
            Ses_volumen:$('#txtvolumen').val(),
            Ses_intensidad:$('#txtintensidad').val(),
            Ses_calificacion:$('#txtcalificaion').val(),
            Ses_capacidad:$('#txtcapacidad').val(),
            Ses_tipo_preparacion:$('#txtpreparacion').val(),
            '_token':$("meta[name='csrf-token']").attr("content"),
            '_method':method
        }
        return (nuevoEvento);


      }
      function EnviarInformacion(accion,objEvento){

        $.ajax(
            {
                type:"POST",
                url:"{{ url('sesion') }}"+accion,
                data:objEvento,
                success:function(msg){
                   console.log(msg);

                    $('#exampleModal').modal('toggle');
                    calendar.refetchEvents();

                },
                error:function(){ alert("Hay un error");}
            }
        );

      }

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
            <div class="form-group col-md-12">
            Nombre del evento:
            <input type="text" name="txtTitulo" id="txtTitulo" >
            </div>
            <br>
            fecha:
            <input type="text" name="txtfecha" id="txtfecha">

            <br>

            <div class="form-row">

            <div class="form-group col-md-6">
                <label>Id:</label><br>
            <input type="text" class="form-group" name="txtId" id="txtId">
            </div>
            <div class="form-group col-md-4">
                <label>id Microciclo:</label>

            <select name="txtIdmicro"  class="form-group" id="txtIdmicro">
                @foreach ($idmicro as $micro)
                <option value="{{$micro->Mic_Id_Gen}}">{{$micro->Mic_Id_Gen}} - {{$micro->Mic_tipo}}</option>

                @endforeach
            </select>
            </div>
            <div class="form-group col-md-6">
                <label>Lugar:</label><br>
            <input type="text" class="form-group" name="txtLugar" id="txtLugar">
            </div>

            <div class="form-group col-md-6">
                <label>hora:</label><br>
            <input type="text" class="form-group" name="txthora" id="txthora">
            </div>
            <div class="form-group col-md-6">
                <label>volumen:</label><br>
            <input type="text" class="form-group" name="txtvolumen" id="txtvolumen">
            </div>
            <div class="form-group col-md-6">
                <label>intensidad:</label><br>
            <input type="text" class="form-group" name="txtintensidad" id="txtintensidad">
            </div>
            <div class="form-group col-md-6">
                <label>calificacion:</label><br>
            <input type="text" class="form-group" name="txtcalificaion" id="txtcalificaion">
            </div>
            <div class="form-group col-md-6">
                <label>capacidad:</label><br>
            <input type="text" class="form-group" name="txtcapacidad" id="txtcapacidad">
            </div>
            <div class="form-group col-md-6">
                <label>tipo de preparacion:</label><br>
            <input type="text" class="form-group" name="txtpreparacion" id="txtpreparacion">
            </div>

            <div class="form-group col-md-12">
                <label>Color:</label><br>
            <input type="color" name="txtcolor" class="form-group" id="txtcolor" style="width: 90%">
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