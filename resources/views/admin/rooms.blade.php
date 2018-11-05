@extends('layouts.admin')

@section('content')

    <div class="box">
        <div class="box-header" align="center">
            <h3 class="box-title"><b>LISTADO DE AULAS</b></h3>
            <br>
            <button type="button" class="btn btn-primary"><a href="#"   style=" color: white;text-decoration: none;" data-toggle="modal" data-target="#crearroom"><i class="fas fa-folder-plus"></i>CREAR</a></button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($rooms as $room )
                    <tr>
                        <td style="width: 8%;">{{$room->name}}</td>


                        <td style="text-align: center">
                            <a href="/room/{{$room->id}}/edit"><i class=""></i>Editar</a>
                        </td>
                        <td style="text-align: center">

                            <a href="/room/destroy/{{$room->id}}" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="">Borrar</i></a>

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

    @include('rooms.create')





@endsection