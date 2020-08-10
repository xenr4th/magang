<html>
    <head>
        <title>Update PHP</title>
    </head>
    <body>
        <?php
            include 'koneksi.php';

            $nim = $_GET['nim'];
            $queri = "SELECT * FROM nilai WHERE nim ='$nim'";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
        <table border>
            <form action="prosesedit.php" method="post">
                <tr>
                    <td>Id Nilai</td> <td>:</td> <td><input type="text" name="id_nilai" value="<?php echo $tampilkan['id_nilai']; ?>" /></td>
                </tr>
                <tr>
                    <td>NIM</td> <td>:</td> <td><!-- input type="text" name="nim" value="<?php echo $tampilkan['nim']; ?>" /> -->
                        <select name="nim">
                            <?php
                            include "koneksi.php";
                            $query = "select * from transaksi";
                            $hasil = mysql_query($query);
                            while ($qtabel = mysql_fetch_assoc($hasil))
                            {
                                echo '<option value="'.$qtabel['transaksi'].'">'.$qtabel['nim'].'</option>';                
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nilai</td> <td>:</td> <td><input type="text" name="nilai" id="nilai" /></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Update" /></td>
                </tr>
            </form>
        </table>
    </body>
</html>