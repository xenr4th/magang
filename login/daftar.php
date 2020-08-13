<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Daftar User</title>
  </head>
  <body>
    <button onclick="goBack()" type="button" class="btn btn-primary ml-2 mt-2">Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
</script>
    <form action="simpan.php" method="POST">
     <section>
       <div class="container">
        <h1 class="text-center py-3 mt-1">Daftar User</h1>
         <div class="row justify-content-center">
           <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nl">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" required>
              </div>
              <div> 
                <input type="radio" name="jk" value="Laki-laki"><label class="pr-1"></label> Laki-Laki
                <label class="pl-3"></label><input type="radio" name="jk" value="perempuan"><label class="pr-1"></label> Perempuan
              </div>
              <div class="form-group pt-2">
                <label for="alamat">Alamat Lengkap</label>
                <textarea name="alamat" name="alamat" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="as">Asal Kampus</label>
                <input type="text" class="form-control" name="kampus">
              </div>
              <div class="form-group">
                <label for="prodi">Program Strudi</label>
                <input type="text" class="form-control" name="prodi">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="no">No. HP</label>
                <input type="text" class="form-control" name="hp">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pass">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3 mr-2">Daftar</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>

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