<!DOCTYPE html>
<html>
<head>
  <title>KERJA PRAKTIK</title>
</head>
<body>
 
  <center>
 
    <h2>LAPORAN KERJA PRAKTIK (KP)</h2>
 
 
    <?php 
    ?>
 
    <table border="1">
      <tr>
        <th>Id_laporan</th>
        <th>Id_transaksi</th>
        <th>Id_vendor</th>
        <th>Nim</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
      </tr>
      <?php 
      $sql = mysql_query($koneksi,"select * from laporan");
      while($data = mysql_fetch_array($sql)){
      ?>
      <tr>
        <td><?php echo $data['id_laporan']; ?></td>
        <td><?php echo $data['id_transaksi']; ?></td>
        <td><?php echo $data['id_vendor']; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
      </tr>
      <?php 
      }
      ?>
    </table>
 
    <br/>
 
    <a href="cetak.php" target="_blank">CETAK</a>
    
 
 
  </center>
</body>
</html>