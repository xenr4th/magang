<?php
    include 'koneksi.php';
    include 'edit.php';

    $id_nilai = $_POST['id_nilai'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $tnilai = $_GET[id=nilai]
    
    $queri = "UPDATE nilai SET nilai = '$tnilai'" WHERE nim;
    $lakukan = mysql_query ($queri);
    
    if ($lakukan) {
        echo 'Berhasil';
        header ('location:index.php');
    } else {
        echo 'Gagal !!!';
        header ('location:edit.php');
    }
?>