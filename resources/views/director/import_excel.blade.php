@extends('layouts.app')

@section('content')
<body>
    <br />
  
    <div class="container">
     <h3 align="center">Importar fichas de Excel</h3>
      <br />
     @if(count($errors) > 0)
      <div class="alert alert-danger">
        Error de validación de carga<br><br>
       <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
       </ul>
      </div>
     @endif
  
     @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
     @endif
    <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
      {{ csrf_field() }}
        <div class="form-group">
            <table class="table">
                <tr>
                    <td width="40%" align="right"><label>Seleccionar archivo para cargar</label></td>
                        <td width="30">
                            <input type="file" name="select_file" />
                        </td>
                        <td width="30%" align="left">
                            <input type="submit" name="upload" class="btn btn-primary" value="Cargar">
                        </td>
                </tr>
                <tr>
                    <td width="40%" align="right"></td>
                    <td width="30"><span class="text-muted">.xls, .xslx</span></td>
                    <td width="30%" align="left"></td>
                </tr>
            </table>
        </div>
     </form><br>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Datos fichas</h3>
        </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Codigo ficha</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Jornada</th>
                        </tr>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row->Fic_Cod }}</td>
                            <td>{{ $row->Fic_Nombre }}</td>
                            <td>{{ $row->Fic_Tipo }}</td>
                            <td>{{ $row->Fic_Jornada }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection