<?php

class Airport {
    public function __construct(public $kods,
                                public $lat,
                                public $lon) {}
    public function iegukods() { return $this->kods; }
    public function iegulat() { return $this->lat; }
    public function iegulon() { return $this->lon; }
}