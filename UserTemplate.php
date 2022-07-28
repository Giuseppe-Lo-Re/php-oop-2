<?php

class UserTemplate {

    public $name;

    public $lastname;

    public $email;

    public $status;

    public $discount = 0;

    public $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function sayHello() {
        if($this->status === 'anonymous') {
            return "Benvenuto $this->name! Se ti registri avrai diritto al 20% di sconto sul tuo primo ordine!";
        } else {
            return "Ciao $this->name! Grazie per essere registrato! Hai diritto al 20% di sconto sul tuo primo ordine!";
        } 
    }
}

?>