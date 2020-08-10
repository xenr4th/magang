<?php
include 'koneksi.php';

?>
<fieldset>
    <form action="simpan.php" method="POST">
    <label>Nama Lengkap</label><br>
            <input type = "text" name="nama"><br>
        <label>Nim</label><br>
            <input type = "text" name="nim"><br><br>

        <input type="radio" name="jk" value="Laki-laki">Laki-Laki 
        <input type="radio" name="jk" value="perempuan">Perempuan <br><br>
        <label>Alamat Lengkap</label><br>
            <textarea type = "text" name="alamat"></textarea><br>
        <label>Asal Kampus</label><br>
            <input type = "text" name="kampus"><br> 
        <label>Prodi</label><br>
            <input type = "text" name="prodi"><br>
        <label>Email</label><br>
            <input type = "text" name="email"><br>
        <label>No Hp</label><br>
            <input type = "text" name="hp"><br>
        <label>Username</label><br>
            <input type = "text" name="user"><br>
        <label>password</label><br>
            <input type = "text" name="pass"><br><br>


        <input type="submit" value="simpan">

        </form>

</fieldset>