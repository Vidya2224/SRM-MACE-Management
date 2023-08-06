<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE chapati SET status='inactive' WHERE id=$id");
header("location:Chapati.php");

?>
