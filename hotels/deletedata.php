<?php 

require "../config.php";

$id=$_POST["id"];

$sql = "DELETE FROM hotels WHERE h_id = '$id' ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


header("location:../admin_index.php");
?>