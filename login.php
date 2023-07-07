<?php
session_start();
?>
<?php

include('./dbcon.php');

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];


  if ($email == "admin@gmail.com" && $password == "admin123") {
    $_SESSION['admin_name'] = 'admin';
    header('location:./Admin/dashboard.php');
  } else {
    $msg = "Please enter valid login details";
  };
};


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONTAWESOME cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

  <link rel="stylesheet" href="./scss/style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

  <title>Admin Login</title>
</head>

<body>

  <div class="container-fluid bg-indigo">
    <h2 class="text-center py-4 text-white">R.K. Mall</h2>
  </div>
  <div class="container">
    <div class="row my-5">
      <div class="col-sm-12 col-md-10 mx-auto my-5 bg-light shadow-lg">
        <form class="p-5" action="" method="POST">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> <i class="fas fa-pen px-1"></i> <strong>Email</strong></label>
            <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="email">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> <i class="fas fa-key px-1"></i> <strong>Password</strong></label>
            <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
          </div>

          <button type="submit" class="btn btn-primary" name="submit" onclick="inserted()">LOGIN</button>

          <?php
          if (isset($msg)) {
          ?>

            <div class="my-2 mb-0">
              <p class="p-2 alert alert-danger">
                <?php
                echo $msg;
                ?>
              </p>
            </div>
          <?php }
          ?>

        </form>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

  <!-- <script>
      function inserted() {
        alert('INSERTED SUCCESSFULLY')
      }
    </script> -->
  <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
</body>

</html>