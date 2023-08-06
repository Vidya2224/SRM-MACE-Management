<?php

include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $query = mysqli_query($con, "INSERT INTO breakfast(name, price, status) VALUES ('$name', $price, 'inactive')");

    if($query)    
        header("location:D_breakfast.php");                   
    else
        echo "not";

}

?>