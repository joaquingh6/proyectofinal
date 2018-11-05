@extends('layouts.admin')

@section('content')

    <div class="box">
        <div class="box-header" align="center">
            <h3 class="box-title"><b>LISTADO DE USUARIOS</b></h3>
            <br>
            <button type="button" class="btn btn-primary"><a href="#"   style=" color: white;text-decoration: none;" data-toggle="modal" data-target="#crearusuario"><i class="fas fa-folder-plus"></i>CREAR</a></button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Role_id</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($usuarios as $user )
                    <tr>
                        <td style="width: 40%;">{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role_id}}</td>
                        <td style="">
                            <a href="/user/{{$user->id}}/edit"><i class=""></i>Editar</a>
                        </td>
                        <td style="">

                            <a href="/user/destroy/{{$user->id}}" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="">Borrar</i></a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>

    @include('users.create')





@endsection