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
    
    <input type = "text" name="id_transaksi" style="display: none;"><br>
    <label>NIM</label><br>
        <input type = "text" name="nim" value="<?php echo $username;?>"><br>
    <label>ID Judul</label><br>
        <input type = "text" name="id_judul"><br>
    <label>Tanggal Mulai</label><br>
        <input type="date"  name="tanggal_mulai"><br>
    <label>Tanggal Berakhir</label><br>
        <input type="date" name="tanggal_akhir"><br><br>
    <input type="submit" value="simpan">
    <a href="../login/index.php"><input type="button" value="kembali ke Menu"></a>

</form>