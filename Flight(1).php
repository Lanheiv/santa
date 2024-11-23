<?php

class Flight {
    public function __construct(public $flightCode,
                                public $origin,
                                public $destination,
                                public $departureTime,
                                public $aircraft) {}
    /* Iegūt attālumu starp lidostām */
    public function iegutgarumu() {
        $lat1 = deg2rad($this->origin->iegulat());
        $lon1 = deg2rad($this->origin->iegulon());
        $lat2 = deg2rad($this->destination->iegulat());
        $lon2 = deg2rad($this->destination->iegulon());

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        // Haversina formula
        $a = sin($dlat / 2) * sin($dlat / 2) +
        cos($lat1) * cos($lat2) *
        sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $R = 6371; // Zemes rādiuss kilometros
        $distance = $R * $c; // Attālums kilometros

        return round($distance, 2);
    }
    public function iegutlaiku() {
        $garums = $this->iegutgarumu(); // attālumu iegust
        $atrums = $this->aircraft->maxatrumu(); // lidmašīnas ātrums
        $lidojumsilg = ($garums / $atrums) * 60; // lidojuma ilgums 

        return round($lidojumsilg , 2);

    }
}