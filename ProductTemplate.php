<?php

class Product {
    public $category;

    public $brand;

    public $kind;

    public $whichAnimal;

    public function __construct($_category) {
        $this->category = $_category;
    }

    public function getInfo() {
        return "Categoria: $this->$category . Tipologia Prodotto: $this->$kind . Marca: $this->brand . Destinato a: $this->$whichAnimal";
    }
}
?>
        

    