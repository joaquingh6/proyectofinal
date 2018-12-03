@extends('layouts.admin')

@section('content')

    <div class="box">
        <div class="box-header" align="center">
            <h3 class="box-title"><b>LISTADO DE PRODUCTOS</b></h3>
            <br>
            <button type="button" class="btn btn-primary"><a href="#"   style=" color: white;text-decoration: none;" data-toggle="modal" data-target="#crearproducto"><i class="fas fa-folder-plus"></i>CREAR</a></button>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Serial</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>

                <tbody>
                @foreach($productos as $producto )
                    <tr>
                        <td style="width: 8%;">{{$producto->name}}</td>
                        <td>{{$producto->category_id}}</td>
                        <td>{{$producto->serial}}</td>
                        <td style="text-align: center">
                            <a href="/product/{{$producto->id}}/edit" class="btn btn-primary"><i class=""></i>Editar</a>
                        </td>
                        <td style="text-align: center">

                            <a href="/product/destroy/{{$producto->id}}" class="btn btn-primary" onclick="return confirm('¿Seguro que quieres comprar?')"><i class="">Borrar</i></a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>

        @include('products.create')





@endsection