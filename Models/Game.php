<?php
     require_once __DIR__.'/Product.php';

     class Game extends Product {
        protected $material; 

        function __construct($_name, $_image, $_price, $_quantity, $available, Category $_category){
            parent::__construct($_name, $_image, $_price, $_quantity, $available, $_category);
        
        }
        public function setMaterial ($_material) {
            $this->material = $_material;
        }
         public function getMaterial() {
            return $this->material;
        }

     }

?>