<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    protected $table = "rents";

    protected $fillable = ['product_id' , 'user_id' , 'start_date' , 'end_date' , 'real_end_date','room_id'];

    public function User(){

        return $this->BelongsTo('App\User' , 'user_id');

    }

    public function product(){

        return $this->BelongsTo('App\Product','product_id');

    }

    public function Room(){

        return $this->BelongsTo('App\Room','room_id');

    }


}
