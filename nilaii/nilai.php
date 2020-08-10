<?php
include 'koneksi.php';

?>

<h3>Form Nilai</h3>
 
<form action="nilai.php" method="get">
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
		<th>ID Nilai</th>
		<th>NIM</th>
		<th>Nilai</th>
		<th>Opsi</th>
	</tr>

    <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("SELECT * FROM nilai WHERE nim like '%".$cari."%'");				
	}else{
		$data = mysql_query("SELECT * FROM nilai");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id_nilai']; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nilai']; ?><td><a href=""><?php echo $update; ?></a></td></td>
	</tr>
	
</table>