<?php

session_start();

require_once '../config/db.php;

$username = $con-->real_escape_string($_POST['username']);
$password = $con-->real_escape_string($_POST['password']);
$level =$_POST['level'];

if(empty($username) || empety($password) || empty($level)) :{
    header(Location: ../index.php);

}
$sql ="SELECT *FROM users WHERE username ='$username' AND password = '$password' AND id_level ='$level'";
$query =$conn->query($sql);

if($query->num_rows >0){
    while ($result =$query->fecth_assoc()){
        $_SESSION['nama'] = $result['nama'];
        $_SESSION['id_user'] = $result['id_user'];

        if($result['id_level'] == 1){
            //alihkan ke halaman admin

            header ('Location: ../admin.php');
         } else{
            echo <script>alert("anda masuk sebagai operator");</script>";
        }
}else {
    $_SESSION['eror']= <b>username</b> atau <b>password</b> tidak valid';
    header('Location: ../index.php');
    
