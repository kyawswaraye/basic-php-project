    <?php
        include_once("../partials/header.php");
        require "../config.php";


        $id=$_GET['id'];
        $sql = "SELECT * from pagodas WHERE p_id=$id";
        $result = mysqli_query($conn,$sql);

        if ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="container">
                <div class='col-md-12'>
                    <div class="single_col">
                        <h2 class="py-5 text-center"><?php echo $row["p_name"] ?></h2>
                        <div class="single_wrapimage mb-3">
                            <img class="img-fluid" src="../images/<?php echo $row["image"] ?>" alt="">
                        </div>
                        <p><?php echo $row["p_address"] ?></p>
                        <p class="mb-3"><?php echo $row["p_description"] ?></p>
                        <p class="mb-3">View:<?php echo $row["p_view"] ?></p>
                        <small class="pb-5">Opening Time:<?php echo $row["p_opening_time"] ?></small>
                        <small class="pb-5">Closing Time<?php echo $row["p_closing_time"] ?></small>
                    </div>
                </div>
            </div>

    <?php } ?>
    
    <?php include_once("../partials/footer.php"); ?>

