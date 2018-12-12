<div class="modal fade" id="crearproducto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="/product" method="POST">
                    @csrf
                    <h3>Crear Producto</h3>
                    <div id="app">
                        <b>Nombre:</b>
                        <input class="form-control" type="text" data-validation="required" name="name" id="crearproducto" >
                        <br>
                        <b>Descripcion:</b>
                        <textarea class="form-control" type="text" data-validation="required" name="description" id="crearproducto" ></textarea>
                        <br>
                        <b>Categoria:</b>
                        <select class="form-control"  data-validation="required" name="category_id" id="">
                                @foreach($categorias as $category)

                                <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                        </select>

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


