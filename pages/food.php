<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jamican country food">
    <meta name="keywords" content="jamica, jaimacan tourism, jamaican info, jamaican country">
    <meta class="author" content="Rainers Krumins">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/food.css">
    <base href="/my-fav-country-jamaica/">
    <title>Food</title>
</head>
<body>
    <?php require "../components/navbar.php"?>

    <div class="card text-bg-dark">
        <div class="fade-to-black">
            <img src="./resources/cook.png" alt="banner">
            <div class="fade-overlay"></div>
        </div>
        <div class="card-img-overlay d-flex align-items-end">
            <div class="text-md-center m-5">
                <h1 class="card-title">Jamican cuisine! Best cuisine!</h5>
                <p class="card-text"> Savor the flavors of jerk chicken, ackee and saltfish, and wash it down with a cold Red Stripe – 'cause we know how to nyam good!</p>
            </div>
        </div>
    </div>

    <!-- Food Cards -->
    <div class="container-lg mt-5">
        <div class="row">
            <?php 
            $jsonData = file_get_contents("../resources/foods.json");
            $foods = json_decode($jsonData);

            foreach($foods as $f) {
                ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo "./resources/".$f[2]?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $f[0]?></h5>
                                <p class="card-text"><?php echo $f[1]?></p>
                        
                            </div>
                        </div>
                    </div>
                
                <?php
            }
            ?>
        </div>
    </div>

    <!-- footer -->
    <?php require "../components/footer.php" ?>
    
</body>
</html>