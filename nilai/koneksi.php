<?php
// include 'koneksi.php';
// // menyimpan data kedalam variabel
// $nim          			     = $_POST['nim'];
// $Nama_Mahasiswa_KP           = $_POST['nama'];
// $Nama_Perusahaan	         = $_POST['perusahaan'];
// $Lama_Magang			     = $_POST['magang'];
// $Disiplin_dan_Tanggungjawab  = $_POST['disiplin'];
// $Penguasaan_Project		     = $_POST['project'];
// $Kreativitas			     = $_POST['kreatif'];
// $Keahlian_dan_Keterampilan   = $_POST['ahli'];
// $Menghargai_dan_Menghormati  = $_POST['sopan'];
// // query SQL untuk insert data
// $query="INSERT INTO mahasiswa SET nim='$nim',Nama_Mahasiswa_KP='$nama',Nama_Perusahaan='$perusahaan',Lama_Magang='$magang',Disiplin_dan_Tanggungjawab='$disiplin',Penguasaan_Project='$project',Kreativitas='$kreatif',Keahlian_dan_Keterampilan='$ahli',Menghargai_dan_Menghormati='$sopan'";
// mysqli_query($koneksi, $query);
// // mengalihkan ke halaman index.php
// header("location:index.php");
$koneksi = mysqli_connect("localhost","root","","dbnilai");

if (mysqli_connect_errno()){
	echo "koneksi database gagal : ". mysqli_connect_errno();
}
?>