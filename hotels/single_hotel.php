<?php
        include_once("../partials/header.php");
        require "../config.php";


        $id=$_GET['id'];
        $sql = "SELECT * from hotels WHERE h_id=$id";
        $result = mysqli_query($conn,$sql);

        if ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="container">
                <div class='col-md-12'>
                    <div class="single_col">
                        <h2 class="py-5 text-center"><?php echo $row["h_name"] ?></h2>
                        <div class="single_wrapimage mb-3">
                            <img class="img-fluid" src="../images/<?php echo $row["h_images"] ?>" alt="">
                        </div>
                        <p><?php echo $row["h_address"] ?></p>
                        <p class="mb-3"><?php echo $row["h_description"] ?></p>
                        <p>Phone:<?php echo $row["h_phone"] ?></p>
                        <p>Email:<?php echo $row["h_email"] ?></p>
                        <p>Availability:<?php echo $row["h_availability"] ?></p>
                        <small>Price:<?php echo $row["h_upper_price_bound"] ?></small>
                        <small>To:<?php echo $row["h_lower_price_bound"] ?></small>
                    </div>
                </div>
            </div>

    <?php } ?>
    
    <?php include_once("../partials/footer.php"); ?>

