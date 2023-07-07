<?php
include('./dbcon.php');
?>
<section class="news-notice">
        <div class="container">
            <div class="heading-news">
                <p class="font-ubuntu display-5">News and Notice</p>
            </div>
            <div class="row">

        <?php
$sql = "SELECT * FROM news_notice ORDER BY n_id DESC LIMIT 4 ";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($result)) {

?>




                <div class="col-md-3 col-sm-12 mt-4">
                    <div class="card shadow-lg">
                        <p class="py-2">
                            <form action="newsnotice.php" method="POST">
                                <input type="hidden" name="id" value="<?php    echo $data['n_id'];      ?>">
                                <button class="text-danger font-20 d-flex justify-content-center font-ubhuntu"><?php  echo $data['title']; ?></button>
                            </form>
                        </p>

                        <img src="Admin/uploads/news_notice/<?php  echo $data['image'];   ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php  echo $data['n_desc'];   ?></p>
                            <p class="form-text text-center"><?php  echo $data['date'];   ?></p>
                        </div>
                    </div>
                </div>
               
                <?php
}
?>
                
            </div>
        </div>
    </section>