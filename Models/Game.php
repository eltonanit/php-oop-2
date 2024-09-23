<?php
     require_once __DIR__.'Product.php';

     class Game extends Product {
        protected $material; 

        function __construct($_name, $_price, $_image, $_quantity = 10, Category $_category, $_description){
            parent::__construct($_name, $_image, $_price, $_quantity, $_catwgory);
        
        }
        public function setMaterial ($_material) {
            $this->material = $_material;
        }
         public function getMaterial() {
            return $this->material;
        }

     }

?>