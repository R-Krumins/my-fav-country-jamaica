<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jamican country story">
    <meta name="keywords" content="jamica, jaimacan tourism, jamaican info, jamaican country">
    <meta class="author" content="Rainers Krumins">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <base href="/my-fav-country-jamaica/">
    <title>Places</title>
</head>
<body>
    <!-- Navbar -->
    <?php require "../components/navbar.php" ?>
    
    <div class="container-lg mt-5">
        <div class="text-center">
            <h2>What's your stroy?</h2>
            <p class="lead">Share your Jamaican expierence with others!</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form class="needs-validation" novalidate>
                    <!-- email -->
                    <label for="email" class="form-label">Email address:</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </span>
                        <input type="text" id="email" name="email" class="form-control" placeholder="e.g. email@example.com" required/>
                        <div class="invalid-feedback">
                            Please enter an email.
                        </div>
                    </div>

                    <!-- name -->
                    <label for="name" class="form-label">Name:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-secondary"></i>
                        </span>
                        <input type="text" id="name" class="form-control" placeholder="e.g. John Doe" required/>
                        <div class="invalid-feedback">
                            Please enter a name and surname.
                        </div>
                    </div>

                    <!-- story textfield -->
                    <div class="mb-4 mt-5 form-floating">
                        <textarea class="form-control" id="story" style="height: 140px" placeholder="story" required></textarea>
                        <label for="story">Your story...</label>
                        <div class="invalid-feedback">
                            Please share your story.
                        </div>
                    </div>


                    <!-- submit button -->
                    <div class="mb-4 text-center">
                        <button type="submit" id="submit" class="btn btn-secondary">Share</button>
                    </div>
                    <div id="success-alert"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "../components/footer.php" ?>


    <!-- boostrap javascript -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="./js/story.js"></script>
    
</body>
</html>