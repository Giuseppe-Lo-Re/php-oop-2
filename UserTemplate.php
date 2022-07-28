<?php

class UserTemplate {

    public $name;

    public $lastname;

    public $email;

    protected $status;

    protected $discount = 0;

    protected $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function sayHello() {
        if($this->status === 'anonymous') {
            return "Benvenuto $this->name.<br> Sai che se ti registri hai diritto al 20% di sconto sul tuo primo ordine?";
        } else {
            return "Ciao $this->name,<br> Grazie per essere registrato! Hai diritto al 20% di sconto sul tuo primo ordine!";
        } 
    }

    public function putProductInCart($product) {
        $this->cart[] = $product;
    }

    public function DoTheTotal() {
        $Total = 0;
        foreach($this->cart as $product) {
            $Total += $product->price;
        }

        // Do the Discount:
        $Total -= $Total * $this->discount / 100;

        return $Total;
    }

}

?>