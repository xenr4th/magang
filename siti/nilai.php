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

    <title>Penilaian</title>
  </head>
  <body class="bg-light">
    <a href='../login_vendor/index.php' class='btn btn-primary ml-2 mt-2'>Back to Menu</a>
  <h1 class="text-center my-3">Data Nilai Kerja Praktik</h1>
  
  <?php
  $sql  = "SELECT * FROM nilaii WHERE nama_vendor='$username'";
  $query  = mysqli_query($db_link,$sql);
  ?>

  <div class="row justify-content-center">
    <table class="table bg-white col-lg-7">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama Vendor</th>
          <th scope="col">Nilai</th>
          <th scope="col">Tambah</th>
        </tr>
      </thead>
      
      <?php
        $no = 1;
        while($data = mysqli_fetch_array($query)){ 
      ?>

      <tbody>
        <tr>
          <td hidden="hidden"><?php echo $data['id_nilai']; ?></td>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data['nim']; ?></td>
          <td><?php echo $data['nama_vendor']; ?></td>
          <td><?php echo $data['nilai']; ?></td>
          <td><a href="edit.php?ni=<?php echo $data['id_nilai'];?>" class='btn btn-primary mr-2'>Ubah</a>
          <a href="delwor.php?ni=<?php echo $data['id_worker'];?>" onclick="return confirm('Anda yakin akan MENGHAPUS data ini !?');" class='btn btn-primary'>Hapus</a></td>
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