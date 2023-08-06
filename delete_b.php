<?php
include("connect.php");
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM bhaji WHERE id=$id");
header("location:Bhaji.php");

?>
