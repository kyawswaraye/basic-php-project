<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
            SESSION_START();

    ?>
           <?php
        if($_SESSION["name"]) {
            ?>
           <div class="front_log"><p>Welcome </p><?php echo $_SESSION["name"]; ?><br><p>Click here to</p><a href="./admin/admin_logout.php" title="Logout"><p>Logout.</p></a></div>
                                                        
                            <div class="container">
                                <h3>Hotels List</h3>
                                <div class="row">
                                    <div class="col-md-4"><?php require "./hotels/hotels_form.php" ?></div>
                                        <div class="col-md-8"><?php require "./hotels/hotels_select.php" ?></div>
                                    </div>
                            </div>

    <?php       }else{ 

        header("location:./admin/admin_signup.php");

    } ?>

</body>
</html>