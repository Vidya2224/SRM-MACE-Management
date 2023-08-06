<?php

include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $query = mysqli_query($con, "INSERT INTO feedback(email, phone, msg) VALUES ('$email', '$phone', '$msg')");

    if($query)    
        // header("location:Bhaji.php");      
        echo "Feedback submitted";             
    else
        echo "not";

}

?>