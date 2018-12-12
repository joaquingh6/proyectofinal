<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="reservar" autocomplete="off" method="get">
                <div id="app1">
                 <b>Fecha:</b><br>
                 <input data-validation="required" type="text" id="datepicker" name="end_date">
                    <br>

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




            </div>

        </div>


    </div>
</div>


