<?php
include('./dbcon.php');
?>

<section class="comming-soon my-5 py-5 bg-light">
    <div class="container">
        <div class="row">
        <?php
$sql = "SELECT * FROM opening_soon ORDER BY o_id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($result)) {

?>
            <div class="col-md-4 col-sm-12 mx-auto">
                <div class="card text-center">
                    <img src="Admin/uploads/opening-soon/<?php  echo $data['image'];    ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-ubuntu bold text-center"><?php  echo $data['c_name'];   ?></h5>
                        <p class="card-text font-baloo"><?php   echo $data['c_desc'];   ?></p>
                        <a href="https://www.beinghumanclothing.com/" class="btn btn-primary">Visit Here</a>
                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>



