<?php
include('konek.php');
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

    <title>Cari Vendor</title>
  </head>
  <body class="bg-light">
    <a href='../login/index.php' class='btn btn-primary ml-2 mt-2'>Back to Menu</a>
  <h1 class="text-center my-4">Tempat Kerja Praktik</h1>

 <!--  <form action="nilai.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
  </form> -->
  <div class="row justify-content-center mx-5">
    <div class="cari my-4 col-lg-8">
      <form action="nilai.php" class="form-inline pb-2">
        <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari berdasarkan Judul" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <?php
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
        ?>
    </div>
  </div>
  <div class="row justify-content-center">
    <table class="table bg-white col-lg-7">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Judul</th>
          <th scope="col">Judul</th>
          <th scope="col">Nama Vendor</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <?php
      if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $sql1 = "SELECT * FROM judul WHERE judul like '%".$cari."%'";
          $query  = mysqli_query($db_link,$sql1);        
        }else{
          $sql2 = "SELECT * FROM judul";
          $query  = mysqli_query($db_link,$sql2);  

        }
        $no = 1;
        while($data = mysqli_fetch_array($query)){ 
      ?>
      <tbody>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data['id_judul']; ?></td>
          <td><?php echo $data['judul']; ?></td>
          <td><?php echo $data['nama_vendor']; ?></td>
          <td><a href="edit.php?ni=<?php echo $data['id_judul'];?>" title="pilih">PILIH</a></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>