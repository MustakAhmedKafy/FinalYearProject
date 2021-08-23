<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sunnysky.com</title>
  <!-- fonts awesome -->
  <link rel="shortcut icon" type="image/x-icon" href="img/blue-globe-png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">


  <!--  main style  -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="style.css">
  <style>

  </style>
</head>

<body>
  <!-- navbar -->
  <section class="navigationbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
      <div class="container">
        <a class="navbar-brand" href="index.php">SunnySky</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="news.php">News</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="brand.php">Brand</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="compare.php">Compare</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Video</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="review_video.php">Review</a>
                <a class="dropdown-item" href="compare_video.php">Comparison</a>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-dark" href="login-signup.php">Signup/Login</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link text-dark" href="cart.php"><i class="fas fa-cart-plus"></i></a>
            </li> -->
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </section>