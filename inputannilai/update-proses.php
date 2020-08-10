 <?php
    include('connect.php');

    $id_nilai = $_POST['id_nilai'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
   
    $queri = "UPDATE nilai SET id_nilai = '$id_nilai', id_nilai = '$id_nilai'";
    $lakukan = mysql_query ($queri);
   
    if ($lakukan) {
        echo 'Berhasil';
        header ('location:index.php');
    } else {
        echo 'Gagal !!!';
        header ('location:update.php');
    }
?> 