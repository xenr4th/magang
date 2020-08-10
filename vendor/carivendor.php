<?php 
include 'koneksi.php';
?>

<h3>Form Pencarian</h3>
 
<form action="carivendor.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="2">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>kategori</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>No Hp</th>
	</tr>

    <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("SELECT * FROM vendor WHERE nama_vendor like '%".$cari."%'");				
	}else{
		$data = mysql_query("SELECT * FROM vendor");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama_vendor']; ?></td>
		<td><?php echo $d['kategori']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td><?php echo $d['email']; ?></td>
		<td><?php echo $d['no_hp']; ?></td>
	</tr>
	<?php } ?>
</table>