        <?php 
        include_once("../partials/header.php");
        require "../config.php";


        $sql = "select * from pagodas";
        $result = mysqli_query($conn,$sql);
        ?>

                    <div class='container'>
                        <div class='row'>
                            <h2 class="my-5 text-center">Pagodas In Taunggyi</h2>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
    ?>
                            <div class='col-md-4'>
                                    <div class="wrap_col bg-light">
                                        <h4><a href="single_pagoda.php?id=<?php echo $row['p_id']; ?>"><?php echo $row["p_name"] ?></a></h4>
                                        <div class="wrapimage">
                                            <img class="img-fluid" src="../images/<?php echo $row["image"] ?>"alt="">
                                        </div>
                                        <p><?php echo $row["p_address"] ?></p>
                                        <p class="my-3"><?php echo $row["p_description"] ?></p>
                                        <p>View:<?php echo $row["p_view"] ?></p>
                                        <small>Opening Time:<?php echo $row["p_opening_time"] ?></small>
                                        <small>Closing Time<?php echo $row["p_closing_time"] ?></small>
                                    </div>
                            </div>  
    <?php } } ?>
                        </div>
                     </div>

    <?php include_once("../partials/footer.php"); ?>

    
