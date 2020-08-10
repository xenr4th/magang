<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO transaksi VALUES('$_POST[id_transaksi]','$_POST[nim]','$_POST[id_judul]','$_POST[tanggal_mulai]','$_POST[tanggal_akhir]')");
    if($insert){
        echo 'data berhasil di simpan';
    }else{
        echo 'data gagal';
    }

?>