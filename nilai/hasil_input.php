<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai KP</blink></h3>
<table align="center" border="2">
<?php
$nim=$_POST["tnim"];
$nama=$_POST["tnama"] ;
$perusahaan=$_POST["tperusahaan"] ;
$magang=$_POST["tmagang"] ;
$disiplin=$_POST["tdisiplin"];
$project=$_POST["tproject"];
$kreatif=$_POST["tkreatif"];
$ahli=$_POST["tahli"];
$sopan=$_POST["tsopan"];
?>

<tr>
<th>NIM</th>
<th>Nama Mahasiswa iswa KP</th>
<th>Nama Perusahaan</th>
<th>Lama Magang</th>
<th>Disiplin dan Tanggungjawab</th>
<th>Penguasaan Project</th>
<th>Kreativitas</th>
<th>Keahlian dan Keterampilan</th>
<th>Menghargai dan Menghormati</th>
</tr>


<tr>
<td align="center"><?php echo$nim; ?></td>
<td align="center"><?php echo$nama;?></td>
<td align="center"><?php echo$perusahaan; ?></td>
<td align="center"><?php echo$magang; ?></td>
<td align="center"><?php echo$disiplin; ?></td>
<td align="center"><?php echo$project; ?></td>
<td align="center"><?php echo$kreatif; ?></td>
<td align="center"><?php echo$ahli; ?></td>
<td align="center"><?php echo$sopan; ?></td>

<a href="cetak.php" target="_blank">CETAK</a>

<!-- <tr>
	<td><?php echo $no++; ?></td>
<td><?php echo $data['nim']; ?></td>
<td><?php echo $data['nama'] ; ?></td>
<td><?php echo $data['nama_perusahaan']; ?></td>
<td><?php echo $data['lama_magang'] ; ?></td>
<td><?php echo $data['Disiplin_dan_Tanggungjawab'] ; ?></td>
<td><?php echo $data['Penguasaan Project']; ?></td>
<td><?php echo $data['Kreativitas'] ; ?></td>
<td><?php echo $data['MKeahlian_dan_Keterampilan'] ; ?></td>
<td><?php echo $data['Menghargai_dan_Menghormati'] ; ?></td> -->





</tr>

</table>
</tr>
<tr>
<a></a></br>
<a></a></br>
</body>
</html>