<?php 

require 'function.php';

if ( isset($_POST["register"]) ) { 
  
  if (register($_POST) > 0) {
      echo " 
        <script>
          alert('Success');
        </script>";
      header("Location: login-page.php");
  } else { 
      echo mysqli_error($db);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Simple Blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" name="login" id="login" href="login-page.php">Login</a>
        </ul>
      </div>
    </div>
  </nav>


    <header class="masthead" style="background-image: url('img/1387229011202.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Register</h1>
              <span class="subheading"></span>
              <form action="" method="POST">
                <div class="form-group">                  
                  <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Re-Password" name="repassword" id="repassword" required>
                </div>
                <button type="submit" name="register"class="btn btn-secondary">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

<hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
