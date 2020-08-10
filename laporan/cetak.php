<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN KERJA PRAKTIK (KP) </h2>
		<h4>Politeknik Harapan Bersamma Tegal</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="10" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Id_laporan</th>
			<th>Id_transaksi</th>
			<th>Id_vendor</th>
			<th>NIM</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
		</tr>

		<?php 
		$no = 1;
		$sql = mysql_query($koneksi,"select * from laporan");
		while($data = mysql_fetch_array($sql)){
		?>
		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_laporan']; ?></td>
        	<td><?php echo $data['id_transaksi']; ?></td>
        	<td><?php echo $data['id_vendor']; ?></td>
        	<td><?php echo $data['nim']; ?></td>
        	<td><?php echo $data['tanggal']; ?></td>
        	<td><?php echo $data['keterangan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>