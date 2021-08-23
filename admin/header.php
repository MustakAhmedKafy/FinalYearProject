<?php
include 'config.php';
?>

<?php
if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

  <title></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Sunnysky</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="sign-out.php?logout">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="brand.php">
                Brands
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">
                News
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">
                Product
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="comparison.php">
                Comparison
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.php">
                Review
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video_review.php">
               Video Review
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video_comparison.php">
               Video Comparison
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                User Profile
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">