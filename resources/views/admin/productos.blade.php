@extends('layouts.admin')

@section('content')

    <div id="admin">
        <div class="container">



            <div class="col-12 mr-auto ml-auto mt-5">

                <h4 class="text-xl-center mb-4">Panel de Administracion (Productos)  <a href="#"  data-toggle="modal" data-target="#crearproducto"><i class="fas fa-folder-plus"></i></a></h4>


                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Nº Serie</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                    <tr align="center">
                        <th scope="row">{{$producto->id}}</th>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->category->name}}</td>
                        <td>{{$producto->serial}}</td>
                        <td><a href="/product/{{$producto->id}}/edit">
                                <i class="far fa-edit"></i>
                            </a></td>
                        <td>

                            <a href="/product/destroy/{{$producto->id}}" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>



        @include('products.create')

    </div>



@endsection