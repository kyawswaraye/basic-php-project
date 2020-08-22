<?php 
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taunggyi Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="wrap">
        <?php
        if($_SESSION["name"]) {
            ?>
           <div class="front_log"> <p>Welcome </p><?php echo $_SESSION["name"]; ?><br><p>Click here to</p><a href="./user/user_logout.php" title="Logout"><p>Logout.</p></a></div>

            <div class="container-fluid front_page">
                <div class="row text-center">
                    <div class="col-md-4 main_menu1"><div class="overlay"></div><h1 class=""><a class="text-white" href="./pagodas/pagodas.php">Pagodas</a></h1></div>
                    <div class="col-md-4 main_menu2"><h1 class=""><a class="text-white" href="./places/places.php">Places</a></h1></div>
                    <div class="col-md-4 main_menu3"><h1 class=""><a class="text-white" href="./hotels/hotels.php">Hotels</a></h1></div>
                </div>
            </div>

<?php       }else{ 

           header("location:./user/user_signup.php");
           
 } ?>
    </div>

</body>
</html>
