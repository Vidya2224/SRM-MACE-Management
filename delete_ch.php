<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM chapati WHERE id=$id");
header("location:Chapati.php");

?>
