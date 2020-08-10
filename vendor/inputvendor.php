<?php
include 'koneksi.php';

?>
<fieldset>
    <form action="simpan1.php" method="POST">
    <label>Nama Vendor</label><br>
            <input type = "text" name="nama"><br>

    <label>Kategori</label><br>
            <input type = "text" name="kategori"><br> 

    <label>Alamat</label><br>
            <textarea type = "text" name="alamat"></textarea><br>

    <label>Email</label><br>
            <input type = "text" name="email"><br>

    <label>No Hp</label><br>
            <input type = "text" name="hp"><br>

    <label>Username</label><br>
            <input type = "text" name="user"><br>
            
    <label>password</label><br>
            <input type = "text" name="pass"><br>


        <input type="submit" value="simpan">

        </form>

</fieldset>