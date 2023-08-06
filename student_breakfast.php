<?php
function display_data(){
    include("connect.php");
    $result = mysqli_query($con, "SELECT * FROM students WHERE type='withbreakfast'");
    return $result;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Breakfast List</title>

    <!-- <title>Collapsible sidebar using Bootstrap 4</title> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><b style="padding-left: 5px;">DASHBOARD</b></a>
                </li>
                <li>
                    <a href="studentpage.php">Student</a>
                </li>
                <li>
                    <a href="Menur.php">Menu</a>
                </li>
                <li>
                    <a href="D_breakfast.php">Breakfast</a>
                </li>
                <li>
                    <a href="feedback.php">Feedback</a>
                </li>
                
                
                <!-- <li>
                    <a href="http://127.0.0.1:5000/syresult">RESULT</a>
                </li> -->
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Press</span>
                    </button>                                       
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="add_studentbreakfast.php" method="POST">
                                        <label>First Name : </label>
                                        <input type="text" name="fname" placeholder="Enter First name"> <br>
                                        <label>Last Name : </label>
                                        <input type="text" name="lname" placeholder="Enter Last name"> <br>
                                        <label>Email : </label>
                                        <input type="text" name="email" placeholder="Enter Email"> <br>
                                        <label>Phone : </label>
                                        <input type="text" name="phone" placeholder="Enter phone no"> <br>
                                        <label>Type : </label>
                                        <input type="text" name="type" placeholder="Enter type"> <br>
                                        <label>Dept  : </label>
                                        <input type="text" name="dept" placeholder="Enter dept name"> <br>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>                         
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary" name="submit">Save changes</button>   -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- changes -->

                </div>
            </nav>
            
            <div id="div2">
                <div style="height:300px;width:200px;overflow:scrollbar;">
                    <table class="table table-success table-striped">
                        <tr>
                            <th>SrNo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Type</th>
                            <th>Department</th>
                        </tr>
                        <tr>
                            <?php
                            $result = display_data();
                            $count = 1;
                            while($row=mysqli_fetch_assoc($result))
                            {
                            
                            ?>
                            <td><?php echo $count?></td>
                            <td><?php echo $row['fname']. " " .$row['lname']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['type']?></td>
                            <td><?php echo $row['dept']?></td>
                        </tr>

                        <?php
                            $count = $count + 1;
                            }
                        ?>
 
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>

