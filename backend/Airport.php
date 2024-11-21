<?php

/* class Airport { //klase // vienmēr ar lielu burtu (pieņemts)
    public function __construct(public $code, // īpašību varēs dabūt jepkurā laikā (public)
                                public $latitude,
                                public $longitude) { }

    public function getCode() {
        return $this->code;
    }
} */

class Airport {
    private $code;
    private $latitude;
    private $longitude;

    public function __construct($code, $latitude, $longitude) {
        $this->code = $code;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getCode() {
        return $this->code;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }
}
?>
