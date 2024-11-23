<?php

class Aircraft {
    public function __construct(public $razotajs,
                                public $modelis,
                                public $sedvietas,
                                public $atrums) {}
public function maxatrumu() { return $this->atrums; /*atgriež lidmašīnas ātrumu.*/}
} 