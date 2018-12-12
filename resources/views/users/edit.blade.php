@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5" align="center">
                <form action="/user/guardar/{{$user->id}}" method="post">
                    @csrf
                    <h3 class="text-center">Editar Usuario</h3>
                    <div id="app" style="width: 50%" align="center">
                        <b>Nombre:</b>
                        <input data-validation="required" class="form-control" type="text" name="name" value="{{$user->name}}" id="editarproducto" >
                        <hr>
                        <b>Email:</b>
                        <input data-validation="required" type="email" class="form-control" name="email" value="{{$user->email}}">
                        <b>Contraseña:</b>
                        <input data-validation="required" class="form-control" type="password" name="password" id="">
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection