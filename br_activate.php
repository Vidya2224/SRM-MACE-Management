<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE breakfast SET status='active' WHERE id=$id");
header("location:D_breakfast.php");

?>
