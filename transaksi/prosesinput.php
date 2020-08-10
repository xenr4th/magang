<?php
  require_once("koneksi.php");
  $id_transaksi = $_POST['id_transaksi'];
  $nim = $_POST['nim'];
  $id_judul = $_POST['id_judul'];
  $tanggal_mulai = $_POST['tanggal_mulai'];
  $tanggal_akhir = $_POST['tanggal_akhir'] date('d-m-Y');
  $sql = mysql_query("SELECT * FROM transaksi");
  
  $simpan = mysql_query("INSERT INTO transaksi (id_transaksi, nim, id_judul, tanggal_mulai, tanggal_akhir) VALUES('$id_transaksi','$nim','$id_judul','$tanggal_mulai','$tanggal_akhir')");
      if($simpan) {
        echo "<div align='center'>Sukses di simpan</div>";
      } else {
        echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>