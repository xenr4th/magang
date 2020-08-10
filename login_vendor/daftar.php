<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
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
        <h1 class="text-center py-3 mt-1">Daftar Vendor</h1>
         <div class="row justify-content-center">
           <div class="col-lg-6">
            <form>
              <div class="form-group">
                <input type="text" style="display: none;" class="form-control" name="id_vendor">
              </div>
              <div class="form-group">
                <label for="nim">Nama Vendor</label>
                <input type="text" class="form-control" name="nama_vendor" required>
              </div>
              <div class="form-group">
                  <label for="nim">Kategori</label>
                  <input type="text" class="form-control" name="kategori" required>
                </div>
         
              <div class="form-group pt-2">
                <label for="alamat">Alamat Lengkap</label>
                <textarea name="alamat" name="alamat" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="as">Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="no">No. HP</label>
                <input type="text" class="form-control" name="hp">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pass">
              </div>
              <div class="form-group">
                <button type="submit" value="simpan" class="btn btn-primary mt-3 mr-2">Daftar</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>

              </div>
            </form>
          </div>
         </div>
       </div>
     </section>
    </form>