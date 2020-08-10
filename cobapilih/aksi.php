<?php
	$hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "kp_poltek";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);

$insert = mysql_query("INSERT INTO transaksi VALUES('$_POST[id_transaksi]','$_POST[nim]','$_POST[id_judul]','$_POST[tanggal_mulai]','$_POST[tanggal_akhir]')");
    if($insert){
        echo 'Transaksi Berhasil';
    }else{
        echo 'Data <b>GAGAL</b> Disimpan! Harap Coba Lagi!!';
    }

?>
<br>
<a href="../login/index.php"><b>Kembali ke Menu</b></a><br>
<a href="../transaksi/index.php"><b>Tambah Transaksi</b></a><br>
<a href="../login/logout.php"><b>Logout</b></a>