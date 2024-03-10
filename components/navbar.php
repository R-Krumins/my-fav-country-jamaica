<?php
    $ROOT_FOLDER = "/helloweb"
?>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
    <div class="container-xxl">
        <!-- navbar brand / title -->
        <a class="navbar-brand align-items-center" href="<?php echo $ROOT_FOLDER?>">
          <span class="text-secondary fw-bold">
              Jamaica
              <img src="<?php echo $ROOT_FOLDER . "/resources/weed.png"?>" width="30" height="30" class="d-inline-block align-top" alt="">
          </span>
        </a>
    
        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Places</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $ROOT_FOLDER . "/pages/food.php"?>">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Story</a>
            </li>       
          </ul>
        </div>

    </div>
  </nav>

