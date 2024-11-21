<?php

/*class Flight {
    private $flightCode;
    private $origin;
    private $destination;
    private $departureTime;
    private $aircraft;

    public function __construct($flightCode, $origin, $destination, $departureTime, $aircraft) {
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    // Metode, lai iegūtu attālumu starp lidostām, izmantojot Haversine formulu
    public function getDistance() {
        $lat1 = deg2rad($this->origin->getLatitude());
        $lon1 = deg2rad($this->origin->getLongitude());
        $lat2 = deg2rad($this->destination->getLatitude());
        $lon2 = deg2rad($this->destination->getLongitude());

        // Haversine formula
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) +
            cos($lat1) * cos($lat2) *
            sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $R = 6371; // Zemes rādiuss kilometros
        $distance = $R * $c; // Attālums kilometros

        return round($distance, 2);
    }

    // Metode, lai aprēķinātu lidojuma ilgumu (minūtēs)
    public function getDuration() {
        // Iegūst attālumu
        $distance = $this->getDistance();

        // Iegūst lidmašīnas vidējo ātrumu
        $speed = $this->aircraft->getMaxSpeed(); // Lidmašīnas maksimālais ātrums km/h

        // Lidojuma ilgums bez sagatavošanās
        $flightDuration = ($distance / $speed) * 60; // Lidojuma ilgums minūtēs

        // Pievieno papildu 30 minūtes sagatavošanai pirms pacelšanās un pēc nolaišanās
        $totalDuration = $flightDuration + 30;

        return round($totalDuration, 2); // Kopējais lidojuma ilgums
    }

    public function getFlightDetails() {
        return [
            'Flight Code' => $this->flightCode,
            'Origin' => $this->origin->getCode(),
            'Destination' => $this->destination->getCode(),
            'Departure Time' => $this->departureTime->format('Y-m-d H:i:s'),
            'Aircraft' => $this->aircraft->getDetails()
        ];
    }
} */

class Flight {
    private $flightCode;
    private $origin;
    private $destination;
    private $departureTime;
    private $aircraft;

    public function __construct($flightCode, $origin, $destination, $departureTime, $aircraft) {
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    // Metode, lai iegūtu attālumu starp lidostām, izmantojot Haversine formulu
    public function getDistance() {
        $lat1 = deg2rad($this->origin->getLatitude());
        $lon1 = deg2rad($this->origin->getLongitude());
        $lat2 = deg2rad($this->destination->getLatitude());
        $lon2 = deg2rad($this->destination->getLongitude());

        // Haversine formula
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) +
            cos($lat1) * cos($lat2) *
            sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $R = 6371; // Zemes rādiuss kilometros
        $distance = $R * $c; // Attālums kilometros

        return round($distance, 2);
    }

    // Metode, lai aprēķinātu lidojuma ilgumu (minūtēs)
    public function getDuration() {
        // Iegūst attālumu
        $distance = $this->getDistance(); //izsaucu metodi citā metodē

        // Iegūst lidmašīnas vidējo ātrumu
        $speed = $this->aircraft->getMaxSpeed(); // Lidmašīnas maksimālais ātrums km/h

        // Lidojuma ilgums bez sagatavošanās
        $flightDuration = ($distance / $speed) * 60; // Lidojuma ilgums minūtēs

        // Pievieno papildu 30 minūtes sagatavošanai pirms pacelšanās un pēc nolaišanās
        $totalDuration = $flightDuration + 30;

        return round($totalDuration, 2); // Kopējais lidojuma ilgums
    }

    public function getFlightDetails() {
        return [
            'Flight Code' => $this->flightCode,
            'Origin' => $this->origin->getCode(),
            'Destination' => $this->destination->getCode(),
            'Departure Time' => $this->departureTime->format('Y-m-d H:i:s'),
            'Aircraft' => $this->aircraft->getDetails()
        ];
    }
}
?>
