<?php
// function display_data(){
//     include("connect.php");
//     $result = mysqli_query($con, "SELECT * FROM bhaji");
//     return $result;
// }


include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    echo $name;
    $query = mysqli_query($con, "INSERT INTO soups(name, status, time) VALUES ('$name', 'inactive', 'dinner')");

    if($query)    
        header("location:Soups.php");                   
    else
        echo "not";

}

?>