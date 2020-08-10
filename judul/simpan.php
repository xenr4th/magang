<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO judul VALUES
	('$_POST[id_judul]','$_POST[nama_vendor]','$_POST[judul]')");
    if($insert){
        echo 'Proses Berhasil
        <br><a href="../judul/index.php">Tambahkan Judul Lagi</a>';
    }else{
        echo '<b>PROSES GAGAL</b>, Terdapat kesalahan penginputan!!
        <br><a href="../judul/index.php">Coba Lagi</a>';
    }
?><br><a href="../login_vendor/index.php">Kembali ke Menu</a>
