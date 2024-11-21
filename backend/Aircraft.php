<?php

/* class Aircraft { //klase // vienmēr ar lielu burtu (pieņemts)
    public function __construct(public $rizorajs, // īpašību varēs dabūt jepkurā laikā (public)
                                public $model,
                                public $seats,
                                public $speed) { }

        public function getDetails() {
            return "{$this->rizorajs} {$this->model} ({$this->seats} seats, Max speed: {$this->speed} km/h)";
        }
} */

class Aircraft {
    private $manufacturer;
    private $model;
    private $seatingCapacity;
    private $maxSpeed;

    public function __construct($manufacturer, $model, $seatingCapacity, $maxSpeed) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->seatingCapacity = $seatingCapacity;
        $this->maxSpeed = $maxSpeed;
    }

    public function getDetails() {
        return "{$this->manufacturer} {$this->model} ({$this->seatingCapacity} seats, Max speed: {$this->maxSpeed} km/h)";
    }

    public function getMaxSpeed() {
        return $this->maxSpeed;  // Atgriež lidmašīnas maksimālo ātrumu
    }
}
?>
