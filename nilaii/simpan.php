<?php
include 'koneksi.php';

$insert = mysql_query("INSERT INTO nilai VALUES('$_POST[id]','$_POST[nim]','$_POST[nilai]')");
    if($insert){
        echo 'data berhasil disimpan';
    }else{
        echo 'data gagal';
    }


?>