<?php
        include_once("../partials/header.php");
        require "../config.php";


        $id=$_GET['id'];
        $sql = "SELECT * from places WHERE pl_id=$id";
        $result = mysqli_query($conn,$sql);

        if ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="container">
                <div class='col-md-12'>
                    <div class="single_col">
                        <h2 class="py-5 text-center"><?php echo $row["pl_name"] ?></h2>
                        <div class="single_wrapimage mb-3">
                            <img class="img-fluid" src="../images/<?php echo $row["pl_images"] ?>" alt="">
                        </div>
                        <p><?php echo $row["pl_address"] ?></p>
                        <p class="mb-3"><?php echo $row["pl_description"] ?></p>
                        <p class="mb-3">View:<?php echo $row["pl_view"] ?></p>
                        <small class="pb-5">Opening Time:<?php echo $row["pl_opening_time"] ?></small>
                        <small class="pb-5">To<?php echo $row["pl_closing_time"] ?></small>
                    </div>
                </div>
            </div>

    <?php } ?>
    
    <?php include_once("../partials/footer.php"); ?>

