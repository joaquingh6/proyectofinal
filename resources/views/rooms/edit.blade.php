@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5" align="center">
                <form action="/room/guardar/{{$room->id}}" method="post">
                    @csrf
                    <h3 class="text-center">Editar Aula</h3>
                    <div id="app" style="width: 50%" align="center">
                        <b>Nombre:</b>
                        <input data-validation="required" class="form-control" type="text" name="name" value="{{$room->name}}" id="editarproducto" >
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