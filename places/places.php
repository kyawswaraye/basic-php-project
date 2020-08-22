<?php 
        include_once("../partials/header.php");
        require "../config.php";


        $sql = "select * from places";
        $result = mysqli_query($conn,$sql);
        ?>

                    <div class='container'>
                        <div class='row'>
                            <h2 class="my-5 text-center">Places In Southern Shan State</h2>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
    ?>
                            <div class='col-md-4'>
                                    <div class="wrap_col bg-light">
                                        <h4><a href="single_place.php?id=<?php echo $row['pl_id']; ?>"><?php echo $row["pl_name"] ?></a></h4>
                                        <div class="wrapimage">
                                            <img class="img-fluid" src="../images/<?php echo $row["pl_images"] ?>"alt="">
                                        </div>
                                        <p><?php echo $row["pl_address"] ?></p>
                                        <p class="my-3"><?php echo $row["pl_description"] ?></p>
                                        <p>View:<?php echo $row["pl_view"] ?></p>
                                        <p>Fees:<?php echo $row["pl_fees"] ?></p>
                                        <small>Opening Time:<?php echo $row["pl_opening_time"] ?></small>
                                        <small>To<?php echo $row["pl_closing_time"] ?></small>
                                    </div>
                            </div>  
    <?php } } ?>
                        </div>
                     </div>

    <?php include_once("../partials/footer.php"); ?>

    
