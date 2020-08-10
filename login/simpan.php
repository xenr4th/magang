<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO user VALUES('$_POST[nama]','$_POST[nim]','$_POST[jk]','$_POST[alamat]','$_POST[kampus]','$_POST[prodi]','$_POST[email]','$_POST[hp]','$_POST[pass]')");
    if($insert){
        echo 'Akun berhasil dibuat';
    }else{
        echo 'data gagal';
    }
?>

<a href="login.php">Kembali ke Form Login</a>