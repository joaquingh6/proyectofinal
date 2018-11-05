
@extends('layouts.layout')

@section('content')

    <WelcomeComponen></WelcomeComponen>
        <div class="container">

            <div class="col-12 mr-auto ml-auto mt-5">
                <h4 class="text-xl-center mb-4">Listado de tus productos </h4>

                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Aula</th>
                        <th scope="col">Hasta</th>
                        <th scope="col"> Devolver </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($reservados))
                    @foreach($reservados as $reservado)
                    <tr align="center">

                            <th scope="row">{{$reservado->id}}</th>
                            <td>{{$reservado->product_id}}</td>
                            <td>Categoria</td>
                                @if(isset($reservado->room->name))
                                    <td>{{$reservado->room->name}}</td>
                                @else
                                    <td></td>
                                @endif

                            <td>{{$reservado->end_date}}</td>

                            @if( !isset($reservado->real_end_date))
                            <td><a href="/devolver/{{$reservado->id}}"><i class="far fa-arrow-alt-circle-down"></i></a></td>
                            @else
                                <td>{{$reservado->real_end_date}}</td>
                            @endif
                    </tr>
                    @endforeach
                        @else
                    <td></td>
                        @endif

                    </tbody>
                </table>
            </div>


    </div>


@endsection