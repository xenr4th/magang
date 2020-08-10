<?php
    include 'koneksi.php';
    
    $id_nilai = $_POST['id_nilai'];
    $nim= $_POST['nim'];
    $nilai = $_POST['nilai'];
    
    $queri = "INSERT INTO nilai VALUES('$id_nilai', '$nim', '$nilai')";
    $lakukan = mysql_query ($queri);
    
    if ($lakukan) {
        echo 'Berhasil';
        header ('location:index.php');
    } else {
        echo 'Gagal !!!';
        header ('location:input.php');
    }
?>