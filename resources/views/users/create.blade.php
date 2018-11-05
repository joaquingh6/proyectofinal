<div class="modal fade" id="crearusuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="/User" method="post">
                    @csrf
                    <h3>Crear Usuario</h3>
                    <div id="app">
                        <b>Nombre:</b>
                        <input class="form-control" type="text" name="name" id="crearusuario" >
                        <b>Email:</b>
                        <input type="email" class="form-control" name="email">
                        <b>Contraseña:</b>
                        <input class="form-control" type="password" name="password" id="">

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Crear">
                        </div>
                    </div>
                </form>
                <script src="https://unpkg.com/vue"></script>
                <script src="https://unpkg.com/vuejs-datepicker"></script>




            </div>

        </div>
    </div>
</div>


