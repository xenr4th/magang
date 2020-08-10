<html>
    <head>
        <title>Select PHP</title>
    </head>
    <body>
        <?php
            include 'koneksi.php';
            
            $queri = "SELECT * FROM nilai";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
        
        <a href="input.php">Tambah Data</a>
        <table border="1">
            <tr align="center">
                <td>ID Nilai</td>
                <td>Nim</td>
                <td>Nilai</td>
            </tr>
            <?php do{ ?>
            <tr>
                <td align="center"><?php echo $tampilkan['id_nilai']; ?> </td>
                <td><?php echo $tampilkan['nim']; ?> </td>
                <td><?php echo $tampilkan['nilai']; ?> </td>
            </tr>
            <?php } while ($tampilkan = mysql_fetch_array($lakukan));
                
             ?>
        </table><br>
        <a href="edit.php">Edit</a>
    </body>
</html>