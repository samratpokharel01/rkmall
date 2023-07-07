<?php
include('../../dbcon.php');
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:../../login.php');
}
if (isset($_POST['submit'])) {

    $c_name = $_POST['c_name'];
    $c_desc = $_POST['c_desc'];
    $date = $_POST['date'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    move_uploaded_file($file_tmp, "../uploads/opening-soon/" . $file_name);


    if ($c_name =="" || empty($c_desc) || $date =="") {
        $empty_msg = "Please fill all the fields ";
    } else {
    
        $sql = "INSERT INTO opening_soon (c_name, c_desc, o_date, image) VALUES ('$c_name','$c_desc','$date','$file_name')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $empty_msg = "Inserted Successfully";
            header('location:./index.php');
            die();
        }
    }
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
        <a class="navbar-brand text-white font-weight-bold py-1 font-25" href="../../index.php">Admin Pannel</a>
        <div class="dropdown ml-auto">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome! Admin <i class="fas fa-user pl-1"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="../logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </div>
        </div>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-2 col-sm-12 mt-5 ml-0">
                <ul class="nav flex-column bg-light">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="../dashboard.php" style="color: black;">
                            <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="../Opening_soon/index.php" style="color: black;">
                            <i class="fas fa-spinner"></i> Opening Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="../News_and_notice/index.php" style="color: black;">
                            <i class="fas fa-book-open"></i>News_Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="../services/index.php" style="color: black;">
                            <i class="fas fa-plus-square"></i>Services</a>
                    </li>
                </ul>
            </div>

            <!-- 2nd page starts here -->
            <div class="col-10 mt-3">

                <div class="jumbotron">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" name="c_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Description</label>
                            <textarea name="c_desc" type="text" class="form-control" id="exampleInputPassword1"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Images</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Opening Date</label>
                            <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <a type="submit" href="./index.php" class="btn btn-danger">Go Back <span><i class="fas fa-arrow-alt-circle-up"></i></span> </a>

                        <button type="submit" class="btn btn-info" name="submit">Submit <span><i class="fas fa-arrow-alt-circle-right"></i></span> </button>

                        <?php if (isset($empty_msg)) { ?>
                            <p class="text-center p-2 alert alert-danger"> <?php echo $empty_msg;} ?></p>

                    </form>

                </div>

            </div>
            <!-- 2nd page ends here -->
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