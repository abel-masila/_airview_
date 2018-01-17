<?php
namespace App\Services\v1;

use App\Flight;

class FlightService{
    public function getAllFlights(){
        return Flight::All();
    }
}