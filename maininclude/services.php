<?php
include('./dbcon.php');
?>
<section class="bg-light">
    <div class="container mt-4 mb-1 ">
        <div class="">
            <h2 class="text-center font-baloo display-5  pt-4">Our Services</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM services ORDER BY s_id DESC LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-4 col-sm-12 mx-auto">
                                <div class="card">
                                    <img src="Admin/uploads/services/<?php echo $data['image'];   ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['title'];   ?></h5>
                                        <p class="card-text"><?php echo $data['s_desc'];   ?></p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM services ORDER BY s_id DESC LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-4 col-sm-12 mx-auto">
                                <div class="card">
                                    <img src="Admin/uploads/services/<?php echo $data['image'];   ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['title'];   ?></h5>
                                        <p class="card-text"><?php echo $data['s_desc'];   ?></p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM services ORDER BY s_id DESC LIMIT 3";
                        $result = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-4 col-sm-12 mx-auto">
                                <div class="card">
                                    <img src="Admin/uploads/services/<?php echo $data['image'];   ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['title'];   ?></h5>
                                        <p class="card-text"><?php echo $data['s_desc'];   ?></p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 d-none d-md-block mx-auto">
                            <div class="card">
                                <img src="./assets/card5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 d-none d-md-block mx-auto">
                            <div class="card">
                                <img src="./assets/card6.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12  mx-auto">
                            <div class="card">
                                <img src="./assets/card7.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>