<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'sts_engell');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Failed to connect to MYSQL: " . mysqli_error($dbconnect));

function cek_login($username,$password){
  global $dbconnect;
  $uname =$username;
  $upass =$password;

  $hasil =mysqli_query($dbconnect, "SELECT *FROM user where username='$uname' and password='$upass'");

  $cek=mysqli_num_rows($hasil);
  if($cek > 0){
       $_SESSION['username'] =$sql['username'];
       $_SESSION['role'] =$sql['role'];
       return true;
  }else{
    return false;
  }
  }
 function tampildata($kueri)
{
    global $dbconnect;
    $result=mysqli_query($dbconnect, $kueri);
    $rows=[];
    while($row = mysqli_fetch_assoc($result));
    {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata)
{
    global $dbconnect;
    $sql=mysqli_query($dbconnect, $inputdata);
    return $sql;
      
}


function tambahbarang ($data){
  global $dbconnect;

  $kode_barang=htmlspecialchars($data['kode_barang']);
  $nama_barang=htmlspecialchars($data['nama_barang']);
  $kategori=htmlspecialchars($data['kategori']);
  $merk=htmlspecialchars($data['merk']);
  $jumlah=htmlspecialchars($data['jumlah']);
  
  $sql=mysqli_query($dbconnect, "INSERT INTO barang (
    id,kode_barang,
    nama_barang,
    kategori,
    merk,
    jumlah)
    VALUES (null,'$kode_barang','$nama_barang','$kategori','$merk','$jumlah')");
  return $sql;
}

 ?>