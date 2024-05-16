<?php 

include("connection.php");
$id = $_GET["id"];

$deletequery = "DELETE FROM `patientinformation` WHERE id=$id";
$query = mysqli_query($con, $deletequery);
header("location:displayInfo.php");
?>