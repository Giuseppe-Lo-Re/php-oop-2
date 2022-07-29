<?php

class PrepaidCard {

    public $name;

    public $balance = 50;

    public $number;

    public $expirationdate;

    public $cvv;

    public function __construct($_name, $_balance, $_number, $_expirationdate, $_cvv) {
        $this->name = $_name;
        $this->balance = $_balance;
        $this->number = $_number;
        $this->expirationdate = $_expirationdate;
        $this->cvv = $_cvv;
    }
}
?>
