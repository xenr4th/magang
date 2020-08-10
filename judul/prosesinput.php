<?php
  require_once("koneksi.php");
  $id_judul = $_POST['id_judul'];
  $nama_vendor = $_POST['nama_vendor'];
  $judul = $_POST['judul'];
  
  $cekuser = mysql_query("SELECT * FROM judul WHERE
    id_judul = '$id_judul'");
    if(mysql_num_rows($cekuser) > 0) {
      echo "<div align='center'>ID Sudah Terdaftar! <a href='index.php'>Back</a></div>";
    } else {
      if(!$id_judul || !$nama_vendor || !$judul) {
        echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
      } else {
        $simpan = mysql_query("INSERT INTO judul (id_judul, nama_vendor, judul) VALUES('$id_judul','$nama_vendor','$judul')");
        if($simpan) {
          echo "<div align='center'>Sukses di simpan</div>";
        } else {
          echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>