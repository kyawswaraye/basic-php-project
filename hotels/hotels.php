<?php 
        include_once("../partials/header.php");
        require "../config.php";


        $sql = "select * from hotels";
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
                                        <h4><a href="single_hotel.php?id=<?php echo $row['h_id']; ?>"><?php echo $row["h_name"] ?></a></h4>
                                        <div class="wrapimage">
                                            <img class="img-fluid" src="../images/<?php echo $row["h_images"] ?>"alt="">
                                        </div>
                                        <p><?php echo $row["h_address"] ?></p>
                                        <p class="my-3"><?php echo $row["h_description"] ?></p>
                                        <p>Phone:<?php echo $row["h_phone"] ?></p>
                                        <p>Email:<?php echo $row["h_email"] ?></p>
                                        <p>Availability:<?php echo $row["h_availability"] ?></p>
                                        <p>Total Rooms:<?php echo $row["h_total_room"] ?></p>
                                        <p>Left Rooms:<?php echo $row["h_left_room"] ?></p>
                                        <small>Price:<?php echo $row["h_upper_price_bound"] ?></small>
                                        <small>To<?php echo $row["h_lower_price_bound"] ?></small>
                                    </div>
                            </div>  
    <?php } } ?>
                        </div>
                     </div>

    <?php include_once("../partials/footer.php"); ?>

    
