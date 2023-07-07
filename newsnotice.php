<?php
include('./dbcon.php');
if (!isset($_POST['id'])) {
    header('location:./index.php');
}
$id = $_POST['id'];
$sql = "SELECT * FROM news_notice WHERE n_id = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);


?>
<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- font-awsome link goes here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <!-- custom css link goes here -->
    <link rel="stylesheet" href="./scss/style.css">
    <title>R.K Mall/About-us</title>
</head>

<body>
    <!-- header starts here -->
    <header>
        <div class="container-fluid bg-light d-flex justify-content-between ">
            <p class="px-4 pb-0 pt-3 font-baloo font-14 ">
                R.K Mall
            </p>
            <div class="d-flex">
                <p class="font-baloo font-14 border-right border-left px-4 pb-0 pt-3">About us</p>
                <p class="font-baloo font-14 border-right border-left px-4 pb-0 pt-3">Contact us</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-none d-md-block mx-auto">
                    <figure>
                        <img src="assets/logo.png" alt="" class="w-40" height="120">
                    </figure>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="icons d-flex justify-content-center mt-5">
                        <a href="https://www.facebook.com/rkcitycenter" target="_blank" id="icon" class="bg-light"><i
                                class="fab fa-facebook-square  p-2"></i></a>
                        <a href="" id="icon" class="ml-4 bg-light"> <i class="fab fa-twitter  p-2"></i></a>
                        <a href="https://www.instagram.com/rk_citycentrepvtltd/" id="icon" class="ml-4 bg-light"><i
                                class="fab fa-instagram  p-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-indigo mt-3">
            <div class="container-fluid">
                <a class="navbar-brand text-white font-ubuntu" href="#">R.K Mall</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-white font-ubuntu mx-2" aria-current="page"
                                href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-ubuntu mx-2" href="./about-us.html">About us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-ubuntu mx-2" href="./contact-us.html">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-ubuntu mx-2" href="#">Coming Soon</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="my-4">
        <div class="container pt-4">
            <h1 class="text-center display-5 font-baloo bold text-danger">
                <?php  echo $data['title'];   ?>
            </h1>
            <div class="row">
                <div class="col-md-7 col-sm-12 my-3 mx-auto">
                    <figure>
                        <img src="./Admin/uploads/news_notice/<?php  echo $data['image']; ?>" class="img-fluid shadow-lg" alt="">
                    </figure>
                </div>
                <div class="col-12 px-5  bg-light shadow-lg">
                    <p class="text-center font-ubuntu py-5">
                        <?php     echo $data['n_desc'];    ?>
                    </p>
                </div>
            </div>
        </div>
    </main>


    <!-- header ends here -->
    <!-- Optional JavaScript; choose one of the two! -->


    <footer class="mt-5 bg-indigo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mx-auto ">
                    <p class="font-20   pt-4 text-center">Quick Links</p>
                    <a href="./contact-us.html" class="text-white font-baloo py-2 d-flex justify-content-center"> <i
                            class="fas fa-chevron-circle-right pr-3"></i> Contact Us</a>
                    <a href="./about-us.html" class="text-white font-baloo py-2 d-flex justify-content-center"> <i
                            class="fas fa-chevron-circle-right pr-3"></i> About Us</a>
                    <a href="https://www.facebook.com/rkcitycenter"
                        class="text-white font-baloo py-2 d-flex justify-content-center"> <i
                            class="fas fa-chevron-circle-right pr-3"></i> facebook</a>
                    <a href="https://www.instagram.com/rk_citycentrepvtltd/"
                        class="text-white font-baloo py-2 d-flex justify-content-center"> <i
                            class="fas fa-chevron-circle-right pr-3"></i> Instagram</a>
                </div>
                <div class="col-md-6 col-sm-12 mx-auto">
                    <p class="font-20 pt-4 d-flex justify-content-center ">Join With Us</p>
                    <div class="frame d-flex justify-content-center">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frkcitycenter&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="200" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowTransparency="true" allow="encrypted-media"></iframe>
                        <!-- <iframe src="https://www.facebook.com/rkcitycenter" frameborder="0"></iframe> -->
                    </div>
                </div>
            </div>
            <hr class="w-100">
            <p class="text-center text-dark-50 pt-2 mb-0 pb-0 text-white">Site desined by :- Krisal-Pokharel</p>
        </div>
    </footer>



    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
        crossorigin="anonymous"></script>


    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })</script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
</body>

</html>