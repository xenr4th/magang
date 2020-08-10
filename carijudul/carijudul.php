<?php 
include 'koneksi.php';
?>

<h3>Pencarian Judul</h3>
 
<form action="carijudul.php" method="get">
	<label>Cari berdasarkan <b>Judul</b>:</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="3" cellpadding="2" cellspacing="2" >
	<tr>
		<th>No</th>
		<th>ID Judul</th>
		<th>Judul</th>
		<th>Nama Vendor</th>
		<th>Aksi</th>
	</tr>

    <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("SELECT * FROM judul WHERE judul like '%".$cari."%'");				
	}else{
		$data = mysql_query("SELECT * FROM judul");	
	}

	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id_judul']; ?></td>
		<td><?php echo $d['judul']; ?></td>
		<td><?php echo $d['nama_vendor']; ?></td>
		<td><a href="..//edit.php?ni=<?php echo $data['id_judul'];?>">PILIH</a></td>
	</tr>
	<?php } ?>
</table><br>
<a href="../login/index.php">Kembali</a>