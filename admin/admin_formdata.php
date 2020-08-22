<?php
    session_start();
    require "config.php";

    $name=$_POST["name"];
    $pass=$_POST["password"];

    $sql="INSERT INTO admin_login(username, password)
    VALUE('".$name."','".$pass."')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New account created successfully";
        $_SESSION["name"]=$name;
        $_SESSION["password"]=$pass;
        header("location:../admin_index.php");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    $conn->close();
