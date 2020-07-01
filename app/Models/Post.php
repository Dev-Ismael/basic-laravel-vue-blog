<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    ############## Retaions ##############
    public function category(){
        return  $this -> belongsTo("App\Models\Category") ;  
    }

    public function user(){
        return  $this -> belongsTo("App\User") ;  
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    ############## Change id to Slug ##############
    public function getRouteKeyName(){
        return "slug";
    }


}
