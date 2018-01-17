<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //set relationships
    public function arrivalAirport(){
        return $this->belongsTo('App\Airport','arrivalAirport_id');
    }
    public function departureAirport(){
        return $this->belongsTo('App\Airport','departureAirport_id');
    }
    public function passangers(){
        return $this->belongsToMany('App\Customer','flight_customer');
    }
}
