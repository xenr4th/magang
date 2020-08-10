<?php
require_once("koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}

include 'koneksi.php';

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nilai</title>
</head>

<body bgcolor="#CCCCCC">
<?php

$query	= mysqli_query ("SELECT * FROM nilaii WHERE nim='<?php echo $username;?>'");

?>
<h2><strong><p align="center">Data Nilai Kerja Praktek</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">ID NILAI</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">NIM</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">NAMA VENDOR</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">NILAI</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_nilai']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nim']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama_vendor']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nilai']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
      <a href="edit.php?ni=<?php echo $data['id_nilai'];?>" title="Edit data ini"> || edit || </a>
      <a href="delete.php?ni=<?php echo $data['id_nilai'];?>" onclick="return confirm('Yakin ingin menghapus data ini?');">|| hapus ||</a>
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>