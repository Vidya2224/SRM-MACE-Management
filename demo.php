<?php

if($_GET)
{
    $row = $_GET['data']; // print_r($_GET); //remember to add semicolon      
    // while($row) 
    // {
    //     echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    // }
    foreach($row as $data)
    {
        echo "id". $data["id"]. " name : ". $data["name"];
    }
}
else
{
  echo "Url has no user";
}

?>