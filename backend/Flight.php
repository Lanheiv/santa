<?php

class Flight {
    // Konstruktor, kas uzņem visus nepieciešamos parametrus
    public function __construct(public $flightCode,
                                public $origin,
                                public $destination,
                                public $departureTime,
                                public $aircraft) {
        // Pārliecināmies, ka $departureTime ir DateTime objekts
        if ($departureTime instanceof DateTime) {
            $this->departureTime = $departureTime;
        } else {
            throw new InvalidArgumentException("Departure time must be a DateTime object.");
        }
    }
    // Getter metode, lai iegūtu lidojuma kodu
    public function getFlightCode() {
        return $this->flightCode;
    }
    // Getter metode, lai iegūtu izlidošanas lidostu
    public function getOrigin() {
        return $this->origin;
    }
    // Getter metode, lai iegūtu galamērķa lidostu
    public function getDestination() {
        return $this->destination;
    }
    // Getter metode, lai iegūtu izlidošanas laiku
    public function getDepartureTime() {
        return $this->departureTime;
    }
    // Getter metode, lai iegūtu lidmašīnu
    public function getAircraft() {
        return $this->aircraft;
    }
}
