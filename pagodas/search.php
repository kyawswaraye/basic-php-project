<?php
    include_once("../partials/header.php");
    require "../config.php";
?>




    <?php

        if(isset($_GET['submit_search'])){
            $search=mysqli_real_escape_string($conn, $_GET['search']);
            $sql="SELECT * FROM pagodas WHERE p_name LIKE '%$search%' OR p_address LIKE '%$search%' OR p_description LIKE '%$search%' OR p_view LIKE '%$search%' OR p_opening_time LIKE '%$search%' OR p_closing_time LIKE '%$search%' OR image LIKE '%$search%'";
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
                        <div class="col-md-4 my-5">
                                    <h3 class="my-3"><?php echo $row["p_name"] ?></h3>
                                    <div class="wrapimage">
                                        <img class="img-fluid" src="../images/<?php echo $row["image"] ?>"alt="">
                                    </div>
                                    <p class="my-2"><?php echo $row['p_address'] ?></p>
                                    <p class="my-2"><?php echo $row['p_description'] ?></p>
                                    <p class="my-2"><?php echo $row['p_view'] ?></p>
                                    <p class="my-2">Opening Time:<?php echo $row['p_opening_time'] ?></p>
                                    <p class="my-2">Closing Time:<?php echo $row['p_closing_time'] ?></p>
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