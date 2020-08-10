<?php
  include('konek.php');
  session_start();
  if(!isset($_SESSION['username'])) {
     header('location:login.php'); 
  } else { 
     $username = $_SESSION['username']; 
  }
  if(isset($_GET['ni'])){
    $ni   = $_GET['ni'];
    $query  = mysqli_query($db_link,'select * from judul where id_judul = "'.$ni.'"');
    $data   = mysqli_fetch_array($query);
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
    <form action="aksi.php" method="POST">
     <section>
       <div class="container">
        <h1 class="text-center py-3 mt-1">Daftar Transaksi</h1>
         <div class="row justify-content-center">
           <div class="col-lg-6">
            <form>
              <input type = "text" name="id_transaksi" style="display: none;">
              <div class="form-group">
                <label for="nl">NIM</label>
                <input type="text" class="form-control" readonly="readonly" name="nim" value="<?php echo $username;?>">
              </div>
              <div class="form-group">
                <label for="nim">ID Judul</label>
                <input type="text" class="form-control" readonly="readonly" name="id_judul" value="<?php echo $_GET['ni']; ?>">
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
                <input type="submit" value="Daftar" class="btn btn-primary mt-3 mr-2">
              </div>
            </form>
          </div>
         </div>
       </div>
     </section>
    </form>