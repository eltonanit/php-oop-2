<?php

    
     require_once __DIR__.'/Models/Product.php';
     require_once __DIR__.'/Models/Game.php';
     require_once __DIR__.'/Models/Food.php';
     require_once __DIR__.'/Models/Bed.php';
     require_once __DIR__.'/Models/Category.php';
     
     

     $dogs = new Category ('Cane', 'fa-solid fa-dog');
     $cats = new Category ('Gatto', 'fa-solid fa-dog');
     $product = new Product ('Collare', 'https://picsum.photos/200/300', 12.00, $dogs);
    $product->description = "Lorem ipsum ";

    $food = new Food('Mais','https://picsum.photos/200/300' , 9.00, 30 , $dogs );
    $food->setCalories(500);

    $game = new Game ('Palla', 'https://picsum.photos/200/300', 3.00, 5, $cats );
    $food->setMateria('Plastica');

    $bed = new Bed('Dado','https://picsum.photos/200/300' , 15.00, 30 , $cats );
    $bed->setSize('400x20x300');


     var_dump($product->getProductDetails());
     var_dump($food->getProductDetails());
     var_dump($game->getProductDetails());
     var_dump($bed->getProductDetails());
     $products = [
        $product,
        $bed,
        $food
     ];

?>