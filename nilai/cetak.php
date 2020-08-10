<html>
<head>
	<title>Hasil Akhir Nilai KP </title>
</head>
<body>
 
	<br/>

	<?php
	include 'koneksi.php';
	?>
 
	<table border="10" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIM</th>
			<th>Nama Mahasiswa KP</th>
			<th>Nama Perusahaan</th>
			<th>Lama Magang</th>
			<th>Disiplin dan Tanggungjawab</th>
			<th>Penguasaan Project</th>
			<th>Kreativitas</th>
			<th>Keahlian dan Keterampilan</th>
			<th>Menghargai dan Menghormati</th>
		</tr>
		
		<?php
		$no=1;
		$sql = mysqli_query($koneksi, "select * from cetak_nilai ");
		while($data = mysqli_fetch_array($sql)){
		?>

		<tr>
	<td><?php echo $no++; ?></td>
<td><?php echo $data['NIM']; ?></td>
<td><?php echo $data['Nama_Mahasiswa_KP'] ; ?></td>
<td><?php echo $data['Nama_Perusahaan']; ?></td>
<td><?php echo $data['Lama_Magang'] ; ?></td>
<td><?php echo $data['Disiplin_dan_Tanggungjawab'] ; ?></td>
<td><?php echo $data['Penguasaan_Project']; ?></td>
<td><?php echo $data['Kreativitas'] ; ?></td>
<td><?php echo $data['Keahlian_dan_Keterampilan'] ; ?></td>
<td><?php echo $data['Menghargai_dan_Menghormati'] ; ?></td>
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