<?php

include("connect.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = mysqli_query($con, "SELECT * FROM manager WHERE email='$uname' and pass='$pass'");

    if(mysqli_num_rows($query) > 0)    
        header("location:dashboard.php");
    else
        header("location:userlogin.php");
}


?>