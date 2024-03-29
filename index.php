<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jamican country info">
    <meta name="keywords" content="jamica, jaimacan tourism, jamaican info, jamaican country">
    <meta class="author" content="Rainers Krumins">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/index.css">
    <base href="/my-fav-country-jamaica/">
    <title>Cool Website</title>
</head>
<body>
    <!-- boostrap javascript -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js" async defer></script>

    <!-- Navbar -->
    <?php require "./components/navbar.php" ?>

    <div class="container-lg">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5">
                <h1>Welcome yo Jamaica, mi bredren!</h1>
                <p class="lead text-muted">Get ready for an irie adventure in the land of sun, sea, and good vibes. From the lush Blue Mountains to the reggae beats in the air, Jamaica is where the magic happens.</p>
            </div>

            <div class="col-lg-7">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./resources/man.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Good Vibes in Jamaica</h5>
                            <p>Best Vibes! Good Vibes!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="./resources/beach-droneshot.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Beutifull County</h5>
                            <p>Jamaica the most beutifull country in the world!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="./resources/sexy-ladies.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sexiest Ladies</h5>
                            <p>Jamica women best women!</p>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <section class="basic-info">
        <div class="container-lg mt-5 bg-light">
            <div class="text-center my-5">
                <h2 class="">Basic Info</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush bg-light">
                        <li class="list-group-item list-group-item-light"><span>Population: </span>2,7 mil</li>
                        <li class="list-group-item list-group-item-light"><span>Area: 11 thousans km<sup>2</sup></span></li>
                        <li class="list-group-item list-group-item-light"><span>Currency: </span>Jamican Dollar</li>
                        <li class="list-group-item list-group-item-light"><span>Timezone:</span> UTC-5</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <img src="./resources/flag.png" alt="flag"style="max-width:70%; height:auto; margin: auto; display: block;">
                </div>
            </div>

           
        </div>
    </section>

    <!-- footer -->
    <?php require "./components/footer.php" ?>
    
     
    
</body>
</html>
