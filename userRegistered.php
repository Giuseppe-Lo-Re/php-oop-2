<?php

require_once __DIR__ . '/UserTemplate.php';

class Registred extends User {

    public $status = 'registered';

    // Override
    public $discount = 20;

}

?>