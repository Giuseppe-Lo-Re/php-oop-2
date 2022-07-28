<?php

require_once __DIR__ . '/UserTemplate.php';

class Registred extends UserTemplate {

    public $status = 'registered';

    // Override
    public $discount = 20;

}

?>