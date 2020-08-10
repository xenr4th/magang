<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>
  <body>
      <div class="navbar pb-5">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="../menu_utama/menu_utama.php">Home </a>
              <a class="nav-item nav-link" href="daftar.php">Daftar</a>
              <a class="nav-item nav-link" href="../login/login.php">Login As User</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <form action="proseslogin.php" method="post">
      <section>
        <div class="container mt-5 py-5 px-5 col-lg-4 bg-light">
          <h1 class="text-center">Login Vendor</h1>
      <div class="form-group">
       <label for="InputUser">Username</label>
        <input type="text" name="username" class="form-control" id="InputUser" aria-describedby="userHelp" placeholder="Masukan Username">
        <small id="emailHelp" class="form-text text-muted">Gunakan Nama Vendor sebagai Username</small>
      </div>
      <div class="form-group">
        <label for="InputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Masukan Password">
      </div>
      <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
    </section>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>