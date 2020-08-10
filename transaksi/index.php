<?php
require_once("koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Daftar User</title>
  </head>
  <body>
    <button onclick="goBack()" type="button" class="btn btn-primary ml-2 mt-2">Back</button>
      <script>
          function goBack() {
              window.history.back();
          }
      </script>
    <form action="simpan.php" method="POST">
     <section>
       <div class="container">
        <h1 class="text-center py-3 mt-1">Daftar Transaksi</h1>
         <div class="row justify-content-center">
           <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $username;?>"
              </div>
              <div class="form-group ">
                <label for="nim" class="mt-3">ID Judul</label>
                <input type="text" class="form-control mb-2" name="id_judul" required>
                <a href="../cobapilih/nilai.php">Cari Judul</a>
              </div>
              <div class="form-group">
                  <label for="nim">Tanggal Mulai</label>
                  <input type="date" class="form-control" name="tanggal_mulai" required>
                </div>
              <div class="form-group">
                <label for="as">Tanggal Berakhir</label>
                <input type="date" class="form-control" name="tanggal_akhir">
              </div>
              <div class="form-group">
                <button type="submit" value="simpan" class="btn btn-primary mt-3 mr-2">Daftar</button>
              </div>
            </form>
          </div>
         </div>
       </div>
     </section>
    </form>