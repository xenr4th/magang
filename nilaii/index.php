<?php
require_once("koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Data Judul</title>

<form action="simpan.php" method="POST">
	
	<label>ID Nilai</label><br>
      <input type = "text" name="id_nilai" disabled placeholder="AUTO INCREMENT"><br>
  <label>NIM</label><br>
      <input type = "text" name="nama_vendor" value="<?php echo $username;?>"><br>
  <label>Nilai</label><br>
      <input type = "text" name="judul"><br><br>
  <input type="submit" value="simpan">

</form>