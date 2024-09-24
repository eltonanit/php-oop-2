<?php

    
     require_once __DIR__.'/Models/Product.php';
     require_once __DIR__.'/Models/Game.php';
     require_once __DIR__.'/Models/Food.php';
     require_once __DIR__.'/Models/Bed.php';
     require_once __DIR__.'/Models/Category.php';
     
     

     $dogs = new Category ('Cane', 'fa-solid fa-dog');
     $cats = new Category ('Gatto', 'fa-solid fa-dog');
     
     $product = new Product ('Collare', 'https://pawee.it/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-06-at-13.59.57.jpeg', 12.00, 20, true, $dogs);
     $product->description = "Lorem ipsum ";

    $food = new Food('Mais','https://www.verdepiusnc.it/wp-content/uploads/2016/06/Sweet-Corn.jpg' , 9.00, 30,true, $dogs );
    $food->setCalories(500);

    $game = new Game ('Palla', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEdln0rAQWusxmEh1fBT36WZfe28Dn3OHA8Q&s', 3.00, 5, true, $cats );
    $game->setMaterial('Plastica');

    $bed = new Bed('Dado','https://p.turbosquid.com/ts-thumb/Fq/WXForr/RcEnHqbr/cube/jpg/1577408929/600x600/fit_q87/85c37a88b9ec281c80c7ad5559994cc9c14cd59e/cube.jpg' , 15.00, 30, true, $cats );
    $bed->setSize('400x20x300');

     $products = [
        $product,
        $game,
        $bed,
        $food
     ];

?>