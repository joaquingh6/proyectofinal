<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="reservar" method="get">
                <div id="app">
                    <b>Fecha:</b>
                    <vuejs-datepicker name="end_date"></vuejs-datepicker>
                    @if(isset($producto))
                    <input name="idproducto" value="{{$producto->id}}" type="text" hidden>
                    @endif
                    <b>Aula:</b>
                    <select  class="form-control" name="room_id" id="">
                    @if(isset($rooms))
                    @foreach($rooms as $room)

                            <option value="{{$room->id}}">
                                {{$room->name}}
                            </option>

                        @endforeach
                         @endif
                    </select>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Alquilar">
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


