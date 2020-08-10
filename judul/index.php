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
        <h1 class="text-center py-3 mt-1">Daftar Vendor</h1>
         <div class="row justify-content-center">
           <div class="col-lg-6">
            <form>
            	<input type = "text" name="id_judul" style="display: none;">
              <div class="form-group">
                <label for="nama_vendor">Nama Vendor</label>
                <input type="text" class="form-control" name="nama_vendor" value="<?php echo $username;?>" readonly="readonly">
              </div>
              <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" required>
                </div>
              <div class="form-group">
                <button type="submit" value="simpan" class="btn btn-primary mt-3 mr-2">Tambahkan</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
              </div>
            </form>
          </div>
         </div>
       </div>
     </section>
    </form>

<!-- <title>Data Judul</title>

<form action="simpan.php" method="POST">
  
    <input type = "text" name="id_judul" style="display: none;">
    <label>Nama Vendor</label><br>
        <input type = "text"  name="nama_vendor" value="<?php echo $username;?>" readonly="readonly"><br>
    <label>Judul</label><br>
        <input type = "text" name="judul"><br><br>
    <input type="submit" value="simpan">
    <a href="../login_vendor/index.php">Kembali ke Menu</a>

</form> -->