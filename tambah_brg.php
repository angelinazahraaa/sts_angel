<?php 
include("database.php");
if(isset($_POST["submit"])) {
    if(tambahbarang($_POST) >0){
        header("location:barang.php");
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <br>
        <form action=""method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_barang">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_barang">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Merk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="merk">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

