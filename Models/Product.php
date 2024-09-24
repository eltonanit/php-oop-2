<?php
     class Product{
        public $name;
        public $image;
        public $price;
        public $quantity;
        public $available;
        public $description;
        public $category;
        

        function __construct($_name, $_image, $_price, $_quantity, $available, Category $_category){
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->available = $available;
            $this->category = $_category;
            
            
        }

        public function getProductDetails(){
            return "Nome prodotto:".$this->name.", prezzo: ".$this->price.", quantità disponibile: ".$this->quantity;
        }
     }
 
?>
