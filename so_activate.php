<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE soups SET status='active' WHERE id=$id");
header("location:Soups.php");

?>
