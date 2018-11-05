@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5" align="center">
                <form action="/product/guardar/{{$product->id}}" method="post">
                    @csrf
                    <h3 class="text-center">Editar Producto</h3>
                    <div id="app" style="width: 50%" align="left">
                        <b>Nombre:</b>
                        <input class="form-control" type="text" name="name" value="{{$product->name}}" id="editarproducto" >
                        <hr>
                        <b>Descripcion:</b>
                        <textarea class="form-control" type="text" name="description" id="crearproducto" >{{$product->description}}</textarea>
                        <hr>
                        <b>Categoria:</b>
                        <select class="form-control" name="category_id" id="">
                            @foreach($categorias as $category)

                                <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>



@endsection