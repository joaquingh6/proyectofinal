<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','description','category_id','serial'];

    public function rents(){

        return $this->hasMany('App\Rent' , 'product_id');

    }

    public function category(){

        return $this->belongsTo('App\Category' , 'category_id');

    }
}
