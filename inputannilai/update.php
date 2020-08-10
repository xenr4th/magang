 <html>
    <head>
        <title>Update Nilai</title>
    </head>
    <body>
        <?php
            include ('koneksi.php');
            $id = $_GET['id'];
            $queri = "SELECT * FROM nilai WHERE id_nilai='$id'";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
        <table border="0">
            <form action="update_proses.php" method="post">
                <tr>
                    <td>id_nilai</td> <td>:</td> <td><input type="text" name="id_nilai" value="<?php echo $tampilkan['id_nilai']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nim</td> <td>:</td> <td><input type="text" name="nim" value="<?php echo $tampilkan['nim']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nilai</td> <td>:</td> <td><input type="text" name="nilai" value="<?php echo $tampilkan['nilai']; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Update" /></td>
                </tr>
            </form>
        </table>
    </body>
</html>