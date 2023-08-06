<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE sweets SET status='active' WHERE id=$id");
header("location:Sweets.php");

?>
