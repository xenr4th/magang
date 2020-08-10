<?php
include 'koneksi.php';
$id_judul         = $_GET['id_judul'];
$judul  = mysqli_query($koneksi, "select * from judul where id_judul='$id'");
$row        = mysqli_fetch_array($judul);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <form method="post" action="carijudul.php">
            <input type="hidden" value="<?php echo $row['id_judul'];?>" name="id_judul">
            <table>
                <tr>
                    <td>
                        NIM
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row['nim'];?>" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>
                        ID Judul
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row['nama'];?>" name="id_judul">
                    </td>
                </tr>
                <tr>
                    <td>
                        Judul
                    </td>
                <td>
                <tr>
                    <td colspan="2">
                        <button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>