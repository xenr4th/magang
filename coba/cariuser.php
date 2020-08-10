<?php 
include 'koneksi.php';
?>

<h3>Form Pencarian</h3>
 
<form action="cariuser.php" method="get">
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
	</tr>

    <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("SELECT * FROM user WHERE nama_lengkap like '%".$cari."%'");				
	}else{
		$data = mysql_query("SELECT * FROM user");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama_lengkap']; ?></td>
	</tr>
	<?php } ?>
</table>