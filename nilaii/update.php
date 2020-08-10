<?php 
include 'koneksi.php';

// $d=mysql_query("SELECT * FROM nilai WHERE id_nilai='$id'");
// $check = mysql_fetch_array($d);

if (isset($_POST['edit_nilai'])) {
    $id_nilai = $_POST['id_nilai'];
    $data = array(
        'id_nilai' => $_POST['id_nilai'],
        'nim' => $_POST['nim'],
        'nilai' => $_POST['nilai']
    );
    editnilai($data, $id_nilai);
}

function editnilai($data, $id_nilai)
{
    include "koneksi.php";
    $set = array();
    foreach ($data as $colom => $value) {
        $set[] = "`" . $colom . "` = '" . $value . "'";
    }
    $sql = "UPDATE nilai SET " . implode(', ', $set) . " WHERE id_nilai='$id_nilai'";
    if (mysqli_query($konek, $sql)) {
        header('Location:input.php');
    } else {
        echo "error" . mysql_errno($konek, $sql);
    }
}
?>
<form method="POST">
   <label>id nilai</label><br>
            <input type = "text" name="id"<?php echo $check['id'] ?>"><br>

    <label>nim</label><br>
            <input type = "text" name="nim"><br> 
 <label>nilai</label><br>
            <input type = "text" name="nilai"><br>

            <input type="submit" value="edit">
</form>