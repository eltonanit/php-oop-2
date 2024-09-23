<?php
     require_once __DIR__.'Product.php';

     class Bed extends Product {
        protected $size; 

        function __construct($_name, $_image, $_price, $_quantity = 10, $_catwgory ){
            parent::__construct($_name, $_image, $_price, $_quantity, $_catwgory);
        
        }
        public function setSize ($size) {
            $this->calories = $_calories;
        }
         public function getSize() {
            return $this->size;
        }

     }

?>