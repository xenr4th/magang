<?php
require_once("koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Data Transaksi</title>

<form action="simpan.php" method="POST">
    
    <label>ID Nilai</label><br>
        <input type = "text" name="id_nilai"><br>
    <label>Nama Vendor</label><br>
        <input type = "text" name="nama_vendor" value="<?php echo $username;?>"><br>
    <label>Nama Judul</label><br>
        <input type = "text" name="nama_judul"><br>
    <label>NIM</label><br>
        <input type="text" name="nim"><br>
    <label>Nilai</label><br>
        <input type="text" name="nilai"><br><br>
    <input type="submit" value="simpan">
    <a href="../login/index.php"><input type="button" value="kembali ke Menu"></a>

</form>