<?php
include "session.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echoes - Home</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body class="container-fluid body_background px-0">

<!-- Top Navbar  -->
<div class="col-sm-12 top_nav_sticky">

    <nav class="navbar navbar-expand-md nav_background">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="images/favicon.png" alt="echoes logo"></a>
          <button class="navbar-toggler background_orange" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fw-bold fs-3 text-white" aria-current="page" href="index.php">Echoes</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search for artists, songs, and albums!" aria-label="Search">
              <button class="btn text-white background_orange" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                <?php if (!empty($_SESSION["record_found"])): ?>
                <li class="nav-item">
                <a class="nav-link active fw-bold" aria-current="page" href="logout.php"><p class="text_orange mt-2">Logout</p></a>
                </li>

                <li class="nav-item">
                  <div class="mt-3 fw-bold text_orange"><?php echo $_SESSION["record_found"]["nickname"] ?></div>
                </li>
                <?php endif; ?>
              
                <?php if (empty($_SESSION["record_found"])): ?>
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="signin.php"><p class="text_orange mt-2">Sign In</p></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active fw-bold" aria-current="page" href="signup.php"><p class="text_orange mt-2">Sign Up</p></a>
                </li>
                <?php endif; ?>
                
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="upload.php"><button class="btn background_orange text-white fw-bold rounded-pill">Upload</button></a>
                </li>
                
            </ul>

          </div>
        </div>
      </nav>
</div>


<!-- Left Navbar -->

<!-- Biggest Div -->
<div class="col-sm-12 row justify-content-between">

<!-- Left -->
    <div class="col-sm-3 px-0">

        <div class="col-sm-12 left_nav_sticky1" style="position: sticky; top:10%;">

          <!-- Carousel -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/left_nav1.png" class="d-block w-100 img-fluid" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/left_nav2.png" class="d-block w-100 img-fluid" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/left_nav3.png" class="d-block w-100 img-fluid" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/left_nav4.png" class="d-block w-100 img-fluid" alt="">
              </div>
            </div>
          </div>

        </div>

        <div class="col-sm-12 nav_background text-white fs-5 fw-bold" style="position: sticky; top:57%;">

          <div class="ms-5">
            <p> <i class="bi bi-house-door"></i> Home</p>
            <p> <i class="bi bi-music-note"></i> Genres</p>
            <p> <i class="bi bi-music-note-beamed"></i> Top Albums</p>
            <p> <i class="bi bi-people-fill"></i> Friends</p>
            <p> <i class="bi bi-heart-fill"></i> Liked Songs</p>
            <p class="fs-6">Terms and Conditions</p>
          </div>

        </div>

    </div>

    <div class="col-sm-9">
        
    

 
    
<script src="style/bootstrap.bundle.js"></script>

</body>
</html>