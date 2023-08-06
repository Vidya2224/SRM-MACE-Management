<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM sweets WHERE id=$id");
header("location:Sweets.php");

?>
