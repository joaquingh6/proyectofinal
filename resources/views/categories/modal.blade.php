
<div class="modal fade" id="crearcategoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="/category" method="post">
                    @csrf
                    <h3>Crear Categoria</h3>
                    <div id="app">
                        <b>Nombre:</b>
                        <input class="form-control" type="text" name="name" id="crearproducto" >
                        <br>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Crear">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
