<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE breakfast SET status='inactive' WHERE id=$id");
header("location:D_breakfast.php");

?>
