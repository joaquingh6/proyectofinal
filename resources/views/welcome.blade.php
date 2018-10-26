
@extends('layouts.layout')

@section('content')

<div id="app">
<div class="container">
<div class="col-12 mr-auto ml-auto mt-5">
    <h4 class="text-xl-center mb-4">Listado productos disponibles</h4>
    <table class="table table-hover">
        <thead>
        <tr align="center">
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Nº Serie</th>
            <th>Reservar</th>
        </tr>
        </thead>
        <tbody>


        @foreach( $productos as $producto)


                    <tr align="center">

                        <th scope="row">{{$producto->id}}</th>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->category->name}}</td>
                        <td>{{$producto->serial}}</td>
                        <td><a href="" name="idproducto" value="{{$producto->id}}"  data-toggle="modal" data-target="#create"><i class="fas fa-shopping-cart"></i></a></td>
                    </tr>


        @endforeach
        </tbody>
    </table>
    @include('reserva')
</div>
</div>





</div>


@endsection