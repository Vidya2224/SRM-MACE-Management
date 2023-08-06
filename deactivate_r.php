<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE rice SET status='inactive' WHERE id=$id");
header("location:Rice.php");

?>
