<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<form action="simpan.php" method="POST">

    <label>ID Transaksi</label><br>
        <input type = "text" name="id_transaksi"><br>  
    <label>NIM</label><br>
        <input type = "text" name="nim"><br>
    <label>ID Judul</label><br>
        <input type = "text" name="id_judul"><br>
    <label>Tanggal Mulai</label><br>
        <input type="date" name="tanggal_mulai"><br>
    <label>Tanggal Berakhir</label><br>
        <input type="date" name="tanggal_akhir"><br><br>
    <input type="submit" value="simpan">

</form>