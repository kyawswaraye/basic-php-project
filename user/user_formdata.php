<?php
    session_start();
    require "config.php";

    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $dob=$_POST["dob"];
    $nrc=$_POST["nrc"];
    $phone=$_POST["phone"];
    $nationality=$_POST["nationality"];
    $gender=$_POST["gender"];

    $sql="INSERT INTO user_login(user_name, email, password, dob, nrc, phone_number, nationality, gender)
    VALUE('".$name."', '".$email."', '".$pass."', '".$dob."', '".$nrc."', '".$phone."', '".$nationality."', '".$gender."')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New account created successfully";
        $_SESSION["name"]=$name;
        $_SESSION["password"]=$pass;
        header("location:../index.php");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    $conn->close();
