<?php 
        include_once("../partials/header.php");
?>
<?php

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $nrc=$_POST['nrc'];
    $nationality=$_POST['nationality'];
    $gender=$_POST['gender'];


    require 'config.php';
    $sql = "INSERT INTO user (user_name, email, password, phone_number, dob, nrc, nationality, gender )
    VALUES ('".$name."', '".$email."', '".$pass."', '".$phone."', '".$dob."', '".$nrc."', '".$nationality."', '".$gender."')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
$conn->close();
// header("location:form.php");
?>
<?php include_once("../partials/footer.php"); ?>
