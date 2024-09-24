<?php

    
     require_once __DIR__.'/Models/Product.php';
     require_once __DIR__.'/Models/Game.php';
     require_once __DIR__.'/Models/Food.php';
     require_once __DIR__.'/Models/Bed.php';
     require_once __DIR__.'/Models/Category.php';
     
     

     $dogs = new Category ('Cane', 'fa-solid fa-dog');
     $cats = new Category ('Gatto', 'fa-solid fa-dog');
     
     $product = new Product ('Collare', 'https://picsum.photos/200/300', 12.00, 20, true, $dogs);
     $product->description = "Lorem ipsum ";

    $food = new Food('Mais','https://picsum.photos/200/300' , 9.00, 30,true, $dogs );
    $food->setCalories(500);

    $game = new Game ('Palla', 'https://picsum.photos/200/300', 3.00, 5, true, $cats );
    $game->setMaterial('Plastica');

    $bed = new Bed('Dado','https://picsum.photos/200/300' , 15.00, 30, true, $cats );
    $bed->setSize('400x20x300');

     $products = [
        $product,
        $game,
        $bed,
        $food
     ];

?>