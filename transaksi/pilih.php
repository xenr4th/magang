<?php
require_once("koneksi.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<?php 
include_once 'koneksi.php'; 
$sql = mysql_query ("SELECT * FROM judul");
$row_query =mysql_fetch_array($sql);

?>

<title>Data Transaksi</title>

<form action="simpan.php" method="POST">
    
    <label>ID Transaksi</label><br>
        <input type = "text" name="id_transaksi" disabled placeholder="AUTO INCREMENT"><br>
    <label>NIM</label><br>
        <input type = "text" name="nim" value="<?php echo $username;?>"><br>
    <label>ID Judul</label><br>
        <input type = "text" name="id_judul" value="<?php echo $row_query['id_judul'] ?>"><br>
        <!-- <a href="../carijudul/carijudul.php">cari</a><br> -->
    <label>Tanggal Mulai</label><br>
        <input type="date" name="tanggal_mulai"><br>
    <label>Tanggal Berakhir</label><br>
        <input type="date" name="tanggal_akhir"><br><br>
    <input type="submit" value="simpan">

</form>