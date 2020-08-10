<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO vendor VALUES('$_POST[nama]','$_POST[kategori]','$_POST[alamat]','$_POST[email]','$_POST[hp]','$_POST[user]',
'$_POST[pass]')");
    if($insert){
        echo 'data berhasil disimpan';
    }else{
        echo 'data gagal';
    }


?>