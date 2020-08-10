<?php
include('konek.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from nilaii where id_nilai="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: nilai.php');
?>