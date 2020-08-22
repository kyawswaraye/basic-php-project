<?php
    include_once("../partials/header.php");
    require "../config.php";
?>




    <?php

        if(isset($_GET['submit_search'])){
            $search=mysqli_real_escape_string($conn, $_GET['search']);
            $sql="SELECT * FROM hotels WHERE h_name LIKE '%$search%' OR h_address LIKE '%$search%' OR h_description LIKE '%$search%' OR h_phone LIKE '%$search%' OR h_email LIKE '%$search%' OR h_upper_price_bound LIKE '%$search%' OR h_images LIKE '%$search%'";
            $result=mysqli_query($conn, $sql);
            $queryResult=mysqli_num_rows($result);
    ?>

            
                        <div class="container">
                                <h3>Search Pagodas Page</h3>
                                <?php   echo "There Are ".$queryResult." Results For Your Search ".$search.""; ?>
                            <div class="row">
                                
            <?php
            if($queryResult >0){
                while($row=mysqli_fetch_assoc($result)){ 
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
    <?php   }
            }else{
                echo "There Is No Matching Result Your Search";
            }
        }

    ?>
                            </div>
                        </div>


<?php include_once("../partials/footer.php"); ?>