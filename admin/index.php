<?php
include 'config.php';
?>

<?php
if (isset($_SESSION['user'])) {
  header("Location: dashboard.php");
}
?>

<?php
$error = false;
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "select * from admin where email = '$email' and password = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $value = $result->fetch_assoc();
    $_SESSION['id'] = $value['id'];
    $_SESSION['user'] = $value['name'];
    header('Location: dashboard.php');
  } else {
    $error = true;
  }
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

  <style>
    html,
    body {
      position: relative;
      height: 100vh;
      background-color: #f1f2f3;
    }
  </style>
</head>

<body class="h-100">
  <div class="container h-100">
    <!-- row -->
    <div class="row justify-content-center align-items-center h-100">
      <!-- col -->
      <div class="col-md-12 col-lg-6 col-xl-5">
        <div class="card p-4 shadow rounded-lg border-0">
          <div class="mb-4">
            <h3>Admin Login</h3>
          </div>
          <?php
          if ($error) { ?>
            <div class="alert alert-danger">
              These credentials do not match our records!
            </div>
          <?php } ?>
          <form action="" method="post">
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off" required />
            </div>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Password" name="password" required />
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
</body>

</html>