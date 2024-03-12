<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <base href="/my-fav-country-jamaica/">
    <title>Places</title>
</head>
<body>
    <!-- Navbar -->
    <?php require "../components/navbar.php" ?>
    
    <div class="container-lg mt-5">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    Culture / History
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                     Sights / Nature
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    Relaxation
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    Nightlife
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    Hospitality 
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between">
                    Dining 
                    <button class="btn btn-primary">Show</button>
                </div>
                
            </li>
        </ul>
    </div>


    <!-- footer -->
    <?php require "../components/footer.php" ?>
    
</body>
</html>