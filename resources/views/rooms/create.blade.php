<div class="modal fade" id="crearroom">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="/room" method="post">
                    @csrf
                    <h3>Crear Aula</h3>
                    <div id="app">
                        <b>Name:</b>
                        <input class="form-control" type="text" name="name" id="crearproducto" >
                        <br>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Crear">
                        </div>
                    </div>
                </form>
                <script src="https://unpkg.com/vue"></script>
                <script src="https://unpkg.com/vuejs-datepicker"></script>
                <script>
                    const app = new Vue({
                        el: '#app',
                        components: {
                            vuejsDatepicker
                        }
                    })
                </script>



            </div>

        </div>
    </div>
</div>


