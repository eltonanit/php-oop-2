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
            if(!is_numeric($_price)){
                throw new Exception ('il prezzo deve essere un valore numerico');
            }

            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->available = $available;
            $this->category = $_category;
            
            
        }

        public function getProductDetails(){
            $string = "Prezzo: ".$this->price."€ <br>";
            
            if($this->is_available){
                $string .= "Quantità in magazzino: ".$this->quantity;
            }
            else{
                $string .= " Prodotto non disponibile";
            }
            return $string;
        }
        public function getClassName(){
            return get_class();
        }
     }
 
?>
