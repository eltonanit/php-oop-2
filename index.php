<?php
     require_once __DIR__.'/db.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <title>OOP 2 </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">ESERCIZIO OOP - PRODOTTI</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach($products as $product) { ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?php echo $product->image;?>" class="img-fluid" alt="<?php $product->name; ?>">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name; ?></h5>
                        <p class="card-text"> 
                            <strong>Categoria:   </strong><i class="<?php echo $product->category->icon; ?>"></i>    </p>
                     </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    
</body>
</html>