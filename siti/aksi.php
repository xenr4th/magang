<?php
include('konek.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id_nilai	= $_POST['id_nilai'];
	$nim	    = $_POST['nim'];
	$nama_vendor	= $_POST['nama_vendor'];
	$nilai		= $_POST['nilai'];
	
	$sql	= 'insert into nilaii (id_nilai,nim,nama_vendor,nilai) values ("'.$id_nilai.'","'.$nim.'","'.$nama_vendor.'","'.$nilai.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: nilai.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){
	$id_nilai	= $_POST['id_nilai'];
	$nim		= $_POST['nim'];
	$nama_vendor= $_POST['nama_vendor'];
	$nilai		= $_POST['nilai'];
	
	$sql	= 'update nilaii set nilai="'.$nilai.'" where id_nilai="'.$id_nilai.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: nilai.php');
	}
	else{
		echo 'Gagal';
	}
}
?>