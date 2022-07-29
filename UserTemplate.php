<?php

require_once __DIR__ . '/UserCode.php';

class UserTemplate {

    use UserCode;

    public $name;

    public $lastname;

    public $email;

    public $prepaidcard;

    protected $status;

    protected $discount = 0;

    public $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function sayHello() {
        if($this->status === 'anonymous') {
            return "Benvenuto $this->name.<br> Sai che se ti registri hai diritto al $this->discount% di sconto sul tuo primo ordine?";
        } else {
            return "Ciao $this->name,<br> Grazie per essere registrato! Hai diritto al $this->discount% di sconto sul tuo primo ordine!";
        } 
    }

    public function putProductInCart($products) {
        foreach($products as $product) {
            $this->cart[] = $product;
        }
    }

    public function doTheTotal() {
        $total = 0;
        foreach($this->cart as $product) {
            $total += $product->price;
        }

        // Do the Discount:
        $total -= $total * $this->discount / 100;

        return $total;
    }

    public function doThePayment($prepaidcard) {
        $paymentOrder = $this->doTheTotal();

        if($this->prepaidcard < $paymentOrder) {
            throw new Exception("Il pagamento non è andato a buon fine. Ti preghiamo di riprovare o contattare la banca emettitrice");
        } else {
            return "ok";
        } 
    }

}

?>