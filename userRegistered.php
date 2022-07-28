<?php

require_once __DIR__ . '/UserTemplate.php';

class UserRegistered extends UserTemplate {

    public $status = 'registered';

    // Override
    protected $discount = 20;

}

?>