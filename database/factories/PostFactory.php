<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $string =  $faker -> sentence(2) ; 
    $title  =  str_replace( "." , "" , $string );
    $slug   =  str_replace( " " , "-" , $title );

    return [
        "title"       => $title ,
        "slug"        => $slug  ,
        "body"        => $faker -> sentence(50) ,
        "user_id"     => rand(1,5) ,  // num of users
        "img"         => "img.jpg",   
        "category_id" => rand(1,10),  // num of categories
    ];
    
});
