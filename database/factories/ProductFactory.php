<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    $text = str_random(10);
    return [
        "name" => $text,
        "description" => $text,
        "category_id"=> '4',
        "serial" => $text
     ];
});
