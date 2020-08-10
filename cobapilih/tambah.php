<?php

$con = mysqli_connect("localhost","root","","kp_poltek");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}

?>

<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">ID NILAI</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="id_nilai">
    </label></td>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIM</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
    <select name="nim">
<?php

$result = mysqli_query($con,"SELECT nim FROM transaksi INNER JOIN judul
  ON transaksi.id_judul = judul.id_judul WHERE nama_vendor='$username'");
  while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[nim]</option>";
    } 
?>
</select>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NAMA VENDOR</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="nama_vendor" type="text" size="20" value="<?php echo $username; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NILAI</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nilai">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>

</table>
</form>
</body>