<?php
// function display_data(){
//     include("connect.php");
//     $result = mysqli_query($con, "SELECT * FROM bhaji");
//     return $result;
// }


include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST['fname'];
    echo $fname;
    $lname = $_POST['lname'];
    echo $lname;
    $email = $_POST['email'];
    echo $email;
    $phone = $_POST['phone'];
    echo $phone;
    $type = $_POST['type'];
    echo $type;
    $dept = $_POST['dept'];
    echo $dept;
    

    $query = mysqli_query($con, "INSERT INTO students(fname,lname,email,phone,type,dept) VALUES ('$fname', '$lname','$email','$phone','$type','$dept')");

    if($query)    
        header("location:student_breakfast.php");                   
    else
        echo "not";

}

?>