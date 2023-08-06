<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE chapati SET status='active' WHERE id=$id");
header("location:Chapati.php");

?>
