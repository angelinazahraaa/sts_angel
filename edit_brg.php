<div class="container mt-5">
<h2>Ubah data barang</h2>
<br>

--<-----tombol kembali----->
<a href="data_brg.php" class="btn btn-primary btn-sm float-left">$larr;Kembali</a>
<div class="clearfix"></div>

<?php 
--<ambil-data-barang-sesuai-id-barang-yg-akan-diubah
$barang = $conn->query("SELECT *FROM barang WHERE id_barang = '$_GET[id]'");
$data = $barang->fecth_assoc();

print_r($data);
?>


</div>


