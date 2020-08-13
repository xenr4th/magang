<?php 
require_once('koneksi.php'); 

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
	<h1 class="text-center my-3">Laporan</h1>
	 
	<form action="laporan.php" method="get">
	</form>
	<div class="row justify-content-center">
		<table class="table bg-white col-lg-7">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>ID Transaksi</th>
					<th>NIM</th>
					<th>ID Judul</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal Berakhir</th>
				</tr>
			</thead>
			<?php 
			$sql = "SELECT transaksi.id_transaksi,transaksi.nim,transaksi.id_judul,
			transaksi.tanggal_mulai,transaksi.tanggal_akhir,judul.nama_vendor FROM transaksi INNER JOIN judul
			ON transaksi.id_judul = judul.id_judul WHERE nama_vendor='$username'";
			$query  = mysqli_query($db_link,$sql);
			?>
			<?php
			$no = 1;
			$pilih = "pilih";
			while($d = mysqli_fetch_array($query)){
			?>
			<tbody>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['id_transaksi']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['id_judul']; ?></td>
					<td><?php echo date('d F Y', strtotime($d['tanggal_mulai'])); ?></td>
					<td><?php echo date('d F Y', strtotime($d['tanggal_akhir'])); ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
</body>
</html>