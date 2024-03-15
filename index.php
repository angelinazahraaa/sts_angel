
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
include_once("database.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    if (cek_login($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        if ($_SESSION['role'] == "admin") {
            header("location:admin.php");
        } else {
            header("location:user.php");
        }
    } else {
        header("location:index.php?msg=gagal");
    }
}
?>
  <div class="card col-sm-4 mx-auto mt-5">
  <div class="card-header">
    Form login
  </div>
  <div class="card-body">
  <form method="POST" action="" autocomplete="off">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username" autofocus>
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Masukan password" autofocus>
    </div>
    <div class="form-group">
        <label for="level">Level</label>
        <select name="level" id="level" class="form-control">
        <option value="">--Masuk Sebagai--</option>
        <option value="1">user</option>
        <option value="2">admin</option>
</select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Masuk</button>
 </form>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>