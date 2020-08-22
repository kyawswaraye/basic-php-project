<?php
    include_once("../partials/header.php");
    require "../config.php";
?>



    <?php

        if(isset($_GET['submit_search'])){
            $search=mysqli_real_escape_string($conn, $_GET['search']);
            $sql="SELECT * FROM places WHERE pl_name LIKE '%$search%' OR pl_address LIKE '%$search%' OR pl_description LIKE '%$search%' OR pl_view LIKE '%$search%' OR pl_opening_time LIKE '%$search%' OR pl_closing_time LIKE '%$search%' OR pl_fees LIKE '%$search%' OR pl_images LIKE '%$search%'";
            $result=mysqli_query($conn, $sql);
            $queryResult=mysqli_num_rows($result);
    ?>
                        <div class="container">
                            <h3>Search Places Page</h3>
                            <?php echo "There Are ".$queryResult." Results For Your Search ".$search.""; ?>
                            <div class="row">
    <?php
        if($queryResult >0){
                while($row=mysqli_fetch_assoc($result)){ ?>

                                <div class="col-md-4 my-5">
                                    <h3 class="my-3"><?php echo $row["pl_name"] ?></h3>
                                    <div class="wrapimage">
                                        <img class="img-fluid" src="../images/<?php echo $row["pl_images"] ?>"alt="">
                                    </div>
                                    <p class="my-2"><?php echo $row['pl_address'] ?></p>
                                    <p class="my-2"><?php echo $row['pl_description'] ?></p>
                                    <p class="my-2">View:<?php echo $row['pl_view'] ?></p>
                                    <p class="my-2">Opening Time:<?php echo $row['pl_opening_time'] ?></p>
                                    <p class="my-2">Closing Time:<?php echo $row['pl_closing_time'] ?></p>
                                    <p class="my-2">Ticket Fees:<?php echo $row['pl_fees'] ?></p>
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