<?php 

require 'function.php';

if ( isset($_POST["register"])) { 
  if (register($_POST) > 0) {
      echo " 
        <script>
          alert('Success');
          document.location.href = 'login-page.php';
        </script>
    ";
  } else { 
      echo "
        <script>
          alert('Failed!');
        </script>
      ";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Simple Blog</title>
  </head>
    <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Simple Blog</h2>
            <center><h1> Register Page</h1></center>
         </div>
      </div>
        <div class="main">
          <div class="col-md-6 col-sm-12">
            <div class="login-form">
              <form action="" method="POST">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                  </div>
                  <div calss="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                    <label>Re-Password</label>
                    <input type="password" class="form-control" placeholder="Re-Password" name="re-password" required>
                  </div>
                  <button type="submit" name="register"class="btn btn-secondary">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
