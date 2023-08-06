<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE soups SET status='inactive' WHERE id=$id");
header("location:Soups.php");

?>
