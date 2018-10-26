@extends('layouts.admin')

@section('content')
        <div class="container">
            <div class="row">

                <div class="col-12 mt-5" align="center">
                <form action="/category/guardar/{{$category->id}}" method="post">
                    @csrf
                    <h3 class="text-center">Editar Categoria</h3>
                    <div id="app" style="width: 50%" align="center">
                        <b>Name:</b>
                        <input class="form-control" type="text" name="name" value="{{$category->name}}" id="editarproducto" >
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