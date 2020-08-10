<?php 
require_once('koneksi.php'); 

session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<h3>Laporan</h3>
 
<form action="laporan.php" method="get">
</form>
 
<table border="2">
	<tr>
		<th>No</th>
		<th>ID Transaksi</th>
		<th>NIM</th>
		<th>ID Judul</th>
		<th>Tanggal Masuk</th>
		<th>Tanggal Berakhir</th>
	</tr>
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
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id_transaksi']; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['id_judul']; ?></td>
		<td><?php echo date('d F Y', strtotime($d['tanggal_mulai'])); ?></td>
		<td><?php echo date('d F Y', strtotime($d['tanggal_akhir'])); ?></td>
	</tr>
	<?php } ?>
</table><br>
<a href='../login_vendor/index.php' class='btn btn-danger'>Kembali ke Menu</a>