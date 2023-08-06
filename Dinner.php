<?php
function Bhaji(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM bhaji WHERE status='active'");
    return $result;
}
function chapati(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM chapati WHERE status='active'");
    return $result;
}

function Rice(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM rice WHERE status='active'");
    return $result;
}

function Sweets(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM sweets WHERE status='active'");
    return $result;
}

function Soups(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM soups WHERE status='active'");
    return $result;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinner services</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">

    <!-- bootsrap starts-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap ends -->

</head>

<body id="body">
    <nav id="navbar">
        <div id="logo">
            <img src="logo5.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="services1.php">Services</a></li>
            <li class="item"><a href="contactTwo.php">Contact Us</a></li>
        </ul>
    </nav>

    <div  id="main">
        <div id="div1">

            <img src="d1.jpg" alt="" style="border-radius:50%;height: 500px ;width: 500px; border: 5px solid white;">

        </div>
        <div id="div2">
            <table class="table" style="padding-left: 50px; color: aliceblue;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                
                <tr>
                    <?php
                    $result = Bhaji();
                    $count = 1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>                    
                </tr>

                <?php
                    $count = $count + 1;
                    }
                ?>

                <tr>
                    <?php
                    $result = chapati();
                    // $count = 1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>                    
                </tr>

                <?php
                    $count = $count + 1;
                    }
                ?>


                <tr>
                    <?php
                    $result = Rice();
                    // $count = 1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>                    
                </tr>

                <?php
                    $count = $count + 1;
                    }
                ?>


                <tr>
                    <?php
                    $result = Sweets();
                    // $count = 1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>                    
                </tr>

                <?php
                    $count = $count + 1;
                    }
                ?>


                <tr>
                    <?php
                    $result = Soups();
                    // $count = 1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    
                    ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>                    
                </tr>

                <?php
                    $count = $count + 1;
                    }
                ?>
       </table>

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
            
             