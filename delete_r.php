<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM rice WHERE id=$id");
header("location:Rice.php");

?>
