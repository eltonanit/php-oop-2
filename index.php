<?php
     class Product {
        public $name;
        public $price;
        public $image;
        public $quantity;
        public $category;
        public $description;

        function __construct($_name, $_price, $_image, $_quantity = 10, Category $_category, $_description){
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->category = $_category;
            $this->description = $_description;
            
        }

        public function getProductDetails(){
            return "Nome prodotto".$this->name.", prezzo: ".$this->price.", quantità disponibile ".$this->quantity;
        }
     }
 
?>
