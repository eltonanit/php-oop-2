<?php
     require_once __DIR__.'/Product.php';

     class Food extends Product {
        protected $calories; 

        function __construct($_name, $_image, $_price, $_quantity, $available, Category $_category){
            parent::__construct($_name, $_image, $_price, $_quantity, $available, $_category);
        
        }
        public function setCalories ($_calories) {
            $this->calories = $_calories;
        }
         public function getCalories() {
            return $this->calories;
        }

     }

?>