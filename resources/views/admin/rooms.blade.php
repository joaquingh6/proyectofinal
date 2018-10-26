@extends('layouts.admin')

@section('content')

    <div id="admin">
        <div class="container">



            <div class="col-12 mr-auto ml-auto mt-5">

                <h4 class="text-xl-center mb-4">Panel de Administracion (Aulas)   <a href="#"  data-toggle="modal" data-target="#crearroom"><i class="fas fa-folder-plus"></i></a></h4>


                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>

                        <th scope="col"> Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <th style="text-align: center" scope="row">{{$room->id}}</th>
                            <td style="text-align: center">{{$room->name}}</td>
                            <td style="text-align: center"><a href="/room/{{$room->id}}/edit">
                                    <i class="far fa-edit"></i>
                                </a></td>
                            <td style="text-align: center">
                                <a href="/room/destroy/{{$room->id}}" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        @include('rooms.create')


    </div>



@endsection