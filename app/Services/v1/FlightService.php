<?php
namespace App\Services\v1;

use App\Flight;

class FlightService{
    public function getAllFlights(){
        return $this->filterFlights(Flight::All());
    }

    public function getFlight($flightNumber){
        return $this->filterFlights(Flight::where('flightNumber',$flightNumber)->get());
    }
    protected function filterFlights($flights){
        $data=[];
        foreach($flights as $flight){
            $entry=[
                'flightNumber'=>$flight->flightNumber,
                'status'=>$flight->status,
                'href'=>route('flights.show',['id'=>$flight->flightNumber])
            ];
            $data[]=$entry;
        }
        return $data;
    }
}