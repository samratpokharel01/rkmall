<?php
include('../dbcon.php');
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:../login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom Css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Fontawesome CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.min.css" integrity="sha512-wDB6AYiYP4FO5Sxieamqy9wtpAY3qdHMqlhZecIEUu1YjkLw5gQf/4ZDgOzmCBAF5SheMjmugkpUSVoUrGbLkQ==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin's Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top ">
        <a class="navbar-brand text-white font-weight-bold py-1 font-25" href="./dashboard.html">Admin Pannel</a>
        <div class="dropdown ml-auto">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome! Admin <i class="fas fa-user pl-1"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </div>
        </div>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-2 col-sm-12 mt-5 ml-0">
                <ul class="nav flex-column bg-light">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="./dashboard.php" style="color: black;">
                            <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="./Opening_soon/index.php" style="color: black;">
                            <i class="fas fa-spinner"></i> Opening Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="./News_and_notice/index.php" style="color: black;">
                            <i class="fas fa-bullhorn"></i>News and Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="./services/index.php" style="color: black;">
                            <i class="fas fa-plus-square"></i>Services</a>
                    </li>
                </ul>
            </div>
            <div class="col-10 mt-3">
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM services";
                        $result = mysqli_query($conn,$sql);
                        $s_count  = mysqli_num_rows($result);
                        
                    ?>
                    <div class="col-md-4 col-sm-12 mt-1">
                        <div class="card text-center bg-danger">
                            <div class="card-body ">
                                <h5 class="card-title text-white">Total Services</h5>
                                <p class="card-text text-white"><?php  if (isset($s_count)) {
                                    echo $s_count;
                                }  ?></p>
                                <a href="./services/index.php" class="card-link text-white ">View <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql = "SELECT * FROM news_notice";
                        $result = mysqli_query($conn,$sql);
                        $n_count  = mysqli_num_rows($result);
                        
                    ?>
                    <div class="col-md-4 col-sm-12 mt-1">
                        <div class="card text-center bg-success">
                            <div class="card-body ">
                                <h5 class="card-title text-white">Total News</h5>
                                <p class="card-text text-white"><?php  if (isset($n_count)) {
                                    echo $n_count;
                                }  ?></p></p>
                                <a href="./News_and_notice/index.php" class="card-link text-white ">View <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql = "SELECT * FROM opening_soon";
                        $result = mysqli_query($conn,$sql);
                        $o_count  = mysqli_num_rows($result);
                        
                    ?>
                    <div class="col-md-4 col-sm-12 mt-1">
                        <div class="card text-center bg-info">
                            <div class="card-body ">
                                <h5 class="card-title text-white">Opening soon</h5>
                                <p class="card-text text-white"><?php  if (isset($o_count)) {
                                    echo $o_count;
                                }  ?></p>
                                <a href="./Opening_soon/index.php" class="card-link text-white ">View <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 shadow">
                    <p class="py-2 bg-dark font-weight-bold text-white text-center">Opening Soon</p>
                    <div class="p-5">
                        <table class="table table-bordered my-2">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td class="text-center text-success"><i class="fas fa-edit"></i></td>
                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td class="text-center text-success"><i class="fas fa-edit"></i></td>
                                    <td class="text-center text-danger"><i class="fas fa-trash"></i></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>