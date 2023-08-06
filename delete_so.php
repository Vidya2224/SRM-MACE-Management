<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM soups WHERE id=$id");
header("location:Soups.php");

?>
