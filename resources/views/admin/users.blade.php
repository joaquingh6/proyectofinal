@extends('layouts.admin')

@section('content')

    <div id="admin">
        <div class="container">



            <div class="col-12 mr-auto ml-auto mt-5">

                <h4 class="text-xl-center mb-4">Panel de Administracion (Usuarios)   <a href="#"  data-toggle="modal" data-target="#crearusuario"><i class="fas fa-folder-plus"></i></a></h4>


                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rol_id</th>
                        <th scope="col"> Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <th style="text-align: center" scope="row">{{$usuario->id}}</th>
                        <td style="text-align: center">{{$usuario->name}}</td>
                        <td style="text-align: center">{{$usuario->email}}</td>
                        <td style="text-align: center">{{$usuario->role_id}}</td>
                        <td style="text-align: center"><a href="/User/{{$usuario->id}}/edit">
                                <i class="far fa-edit"></i>
                            </a></td>
                        <td style="text-align: center">

                            <a href="/user/destroy/{{$usuario->id}}" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        @include('users.create')


    </div>



@endsection