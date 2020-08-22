<?php
require "../config.php";


$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$description=$_POST['description'];
$availability=$_POST['availability'];
$left_room=$_POST['left_room'];
$total_room=$_POST['total_room'];
$upper_price_bound=$_POST['upper_price_bound'];
$lower_price_bound=$_POST['lower_price_bound'];
$image=$_POST['image'];

 $sql ="INSERT INTO hotels(h_name, h_address, h_phone, h_email, h_lower_price_bound, h_upper_price_bound, h_availability, h_left_room, h_total_room, h_images, h_description)
 VALUE ('".$name."','".$address."','".$phone."','".$email."','".$lower_price_bound."','".$upper_price_bound."','".$availability."','".$left_room."','".$total_room."','".$image."','".$description."')";
 echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        $conn->close();
        header("location:../admin_index.php");


?>