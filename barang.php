<?php
require_once("database.php");
$tampil = tampildata ('SELECT * FROM barang');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>My Notes</title>
  </head>
  <body>
<h2>Data Barang</h2>
<hr>
<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
<a href="tambah_brg.php" class="btn btn-primary btn-sm float-right">Tambah data</a>

<div class="clearfix"></div>

<div class="container">
    <table class="table">
    <thead>
        <tr>
            <th>id.</th>
            <th>Kode barang</th>
             <th>Nama barang</th>
             <th>kategori</th>
             <th>merk</th>
             <th>jumlah</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($tampil as $barang ): ?>
        <tr>
            <td><?php echo "$barang['id'];"?></td>
            <td><?php echo "$barang['kode_barang'];" ?></td>
            <td><?php echo "$barang['nama_barang'];" ?></td>
            <td><?php echo "$barang['kategori'];" ?></td>
            <td><?php echo "$barang['merk'];" ?></td>
            <td><?php echo "$barang['jumlah'];" ?></td>
            <td>
                <div class="d-inline">
                    <td>
                        <a href="">delete</a> |
                        <a href="">edit</a>
                    </td>
                </td>
                </div>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
</div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>