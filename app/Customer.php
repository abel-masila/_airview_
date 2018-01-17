<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //set relationships
    public function flights(){
        return $this->belongsToMany('App\Flight');
    }
}
