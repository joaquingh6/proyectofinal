<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $new['name'] = $request->name;

        $room = Room::create($new);
        $rooms = Room::all();
        return view('admin/rooms', compact('rooms'));

    }
    public function destroy($id)
    {
        $room = Room::find($id)->delete();
        $rooms = Room::all();

        return view('admin.rooms' , compact('rooms'));
    }
    public function edit($id)
    {
        $room = Room::where('id' , $id)->first();


        return view('rooms.edit' , compact('room'));


    }

    public function guardar(Request $request,$id)
    {
        $room = Room::find($id);

        $room->update($request->all());
        $room->save();

        $rooms = Room::all();
        return view('admin.rooms' , compact('rooms'));
    }
}
