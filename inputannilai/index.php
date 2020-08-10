 <html>
    <head>
        <title>Select Nilai</title>
    </head>
    <body>
        <?php
            include ('koneksi.php');
           
            $queri = "SELECT * FROM nilai";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
       
        <a href="insert.php">Tambah Data</a>
        <table border="1">
            <tr align="center">
                <td>Id_judul</td>
                <td>Nim</td>
                <td>Nilai</td>
            </tr>
            <?php do { ?>
            <tr>
                <td align="center"><?php echo $tampilkan['id_judul']; ?> </td>
                <td><?php echo $tampilkan['nim']; ?> </td>
                <td><?php echo $tampilkan['nilai']; ?> </td>
            </tr>
            <?php } while ($tampilkan = mysql_fetch_array($lakukan)); ?>
        </table>
    </body>
</html>