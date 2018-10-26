<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "room";

    protected $fillable = ['name'];

    public function Rent(){

        return $this->hasMany('App\Rent','room_id');

    }

}
