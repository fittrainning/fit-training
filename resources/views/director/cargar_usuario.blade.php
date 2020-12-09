@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <div id="cont">
                <br><br><br><br>
                <div class="d-flex justify-content-center" id="colo">
                    <h1>Gestion de Usuarios</h1>
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-around">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Ver Usuarios Creados
                    </button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fichas Creadas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Tipo de Documento</th>
                                            <th scope="col">NUmero Documento</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <form action="{{ route('roll',[$user]) }}" method="post">
                                                    @csrf
                                                    <td>{{ $user->Usu_tipodoc }}</td>
                                                    <td>{{ $user->Usu_id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->Usu_apellidos }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->Usu_rol }}</td>
                                                    <td><input type="submit" value="Editar"></td>
                                                </form>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Ingresar Usuarios
                    </button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Ingresar Usuarios</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <form  action="{{ route('insertar') }}" method="POST">
                                                @csrf
                                                <div class="form-row align-items-center">
                                                    <div class="form-group row">
                                                        <label class="col-sm-5 col-form-label">Rol</label>
                                                        <select class="col-sm-7" name="Usu_rol">
                                                            <option selected>Rol usuario.</option>
                                                            <option value="director">Director</option>
                                                            <option value="entrenador">Entrenador</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">tipo documeno</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="Usu_tipodoc">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Numero documento</label>
                                                        <div class="col-sm-7">
                                                            <input type="number" class="form-control" name="Usu_id">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Nombre  </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Apellido</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="Usu_apellidos">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Fecha de Nacimiento</label>
                                                        <div class="col-sm-7">
                                                            <input type="date" class="form-control" name="Usu_fecha_nacimiento">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Telefono</label>
                                                        <div class="col-sm-7">
                                                            <input type="tel" class="form-control" name="Usu_telefono">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Contraseña</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Genero</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="Usu_genero">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-5 col-form-label">Direccion</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="Usu_direccion">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="Usu_foto" value="foto/porfile.png">
                                                </div>
                                                <input type="submit"  class="btn btn-primary" name="enviar" value="SUBIR USUARIO">
                                            </form>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
    </div>
@endsection