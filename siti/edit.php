<?php
  include('konek.php');
  if(isset($_GET['ni'])){
    $ni   = $_GET['ni'];
    $query  = mysqli_query($db_link,'select * from nilaii where id_nilai = "'.$ni.'"');
    $data   = mysqli_fetch_array($query);
    $nim = $data['nim']
    ;
    $nama_vendor = $data['nama_vendor'];
    $nilai  = $data['nilai'];
  }
  else{
  $nim = '';
  $nama_vendor = '';
  $nilai = '';
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Nilai</title>
  </head>
  <body class="bg-light">
    <button onclick="goBack()" type="button" class="btn btn-primary ml-2 mt-2">Back</button>
      <script>
          function goBack() {
              window.history.back();
          }
  </script>
      <form method="post" name="frm" action="aksi.php">
       <section>
         <div class="container">
          <h1 class="text-center py-3 mt-1">Daftar User</h1>
           <div class="row justify-content-center">
             <div class="col-lg-6">
              <form>
                <div class="form-group">
                  <label for="nl">ID Nilai</label>
                  <input type="text" class="form-control" name="id_nilai" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" name="nim" value="<?php echo $nim; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="as">Nama Vendor</label>
                  <input type="text" class="form-control" name="nama_vendor" value="<?php echo $nama_vendor; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="prodi">Nilai</label>
                  <input class="form-control" name="nilai" type="number" min="1" max="100"  value="<?php echo $nilai; ?>">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mt-3 mr-2" name="tedit">Ubah</button>
                </div>
              </form>
            </div>
           </div>
         </div>
       </section>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>