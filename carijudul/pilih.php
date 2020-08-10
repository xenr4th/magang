<?php
    
    $db_host        = 'localhost'; 
    $db_usn     = 'root'; //nama username
    $db_pwd     = ''; //password jika tadak ada bisa di kosongi seperti contoh 
    $db_name    = 'kp_poltek'; //nama database

    $db_link    = mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
    if (!$db_link){
        echo 'Tidak dapat terhubung ke database';
    }

    session_start();
    if(!isset($_SESSION['username'])) {
       header('location:login.php'); 
    } else { 
       $username = $_SESSION['username']; 
    }

    if(isset($_GET['ni'])){
    $ni   = $_GET['ni'];
    $query  = mysqli_query($db_link,'select id_judul from judul WHERE');
    $data   = mysqli_fetch_array($query);
  }
?>

<title>Data Transaksi</title>

<form action="pilih.php" method="GET">
    
    <input type = "text" name="id_transaksi" style="display: none;"><br>
    <label>NIM</label><br>
        <input type = "text" name="nim" value="<?php echo $username;?>"><br>
    <label>ID Judul</label><br>
        <input type = "text" name="id_judul" value="<?php echo $data['id_judul']; ?>"><br>
    <label>Tanggal Mulai</label><br>
        <input type="date" name="tanggal_mulai"><br>
    <label>Tanggal Berakhir</label><br>
        <input type="date" name="tanggal_akhir"><br><br>
    <input type="submit" value="simpan">
    <a href="../login/index.php"><input type="button" value="kembali ke Menu"></a>

</form>