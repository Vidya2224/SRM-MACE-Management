<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE bhaji SET status='active' WHERE id=$id");
header("location:Bhaji.php");

?>
