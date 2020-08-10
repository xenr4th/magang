<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO vendor VALUES('$_POST[id_vendor]','$_POST[nama_vendor]','$_POST[kategori]','$_POST[alamat]','$_POST[email]','$_POST[hp]','$_POST[pass]')");
    if($insert){
        echo 'Akun Anda berhasil dibuat';
    }else{
        echo 'Proses <b>GAGAL</b>, Terdapat kesalahan Penginputan!!
        <br><a href="../login_vendor/daftar.php">Daftar Lagi</a>';
    }
?>
<br>
<a href="login.php">Kembali ke Form Login</a>