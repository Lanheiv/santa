<?php

class Aircraft { //klase // vienmēr ar lielu burtu (pieņemts)
    public function __construct(public $rizorajs, // īpašību varēs dabūt jepkurā laikā (public)
                                public $model,
                                public $seats,
                                public $speed) { }
}
