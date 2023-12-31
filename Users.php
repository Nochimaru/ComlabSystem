<!DOCTYPE html>
<?php
    include("show.php");

    $Username 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comlab Inventory System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleUser.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="welcome">
        <div class="test">
            <table class="table my-2" style="background-color: white;">
                <thead>
                    <tr>
                        <th scope="col">USER_ID</th>

                        <th scope="col">FIRST_NAME</th>

                        <th scope="col">LAST_NAME</th>

                        <th scope="col" >USERNAME</th>

                        <th scope="col">USER_CLASSIFICATION</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM login;" ;
                        $result = mysqli_query($con,$sql);
                        $resultCheck = mysqli_num_rows($result);


                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                            $UserID=$row['UserID'];
                            $Fname=$row['Fname'];
                            $Lname=$row['Lname'];
                            $Username = $row['Username'];
                            $UserClassification=$row['UserClassification'];
                
                        echo '<tr>
                                <th scope="row">'.$UserID.'</th>
                                <td>'.$Fname.'</td>
                                <td>'.$Lname.'</td>
                                <td>'.$Username.'</td>
                                <td>'.$UserClassification.'</td>
                                <td>
                                <button class="btn btn-primary"><a href="EditUser.php ?updateID='.$UserID.'" class="text-light">Edit</a></button>
                                
                                <button class="btn btn-danger" ><a href="DeleteUser.php ?deleteID='.$UserID.'" class="text-light">Remove</a></button>
                                </td>
                
                            </tr>';
                        } 
                    }
                    ?>
                </tbody>
            </table>
            <button class="btn btn-success"><a href="userAdd.php" class="text-light">Add User</a></button>

        </div>
    </div>
    <div class="header">
        <div class="side-nav">
            <a href="Home.php" class="logo">
            <img src="logo.png" class="logo-img">
            <img src="logo2.png" class="logo-icon">
            </a>
            <ul class="nav-links">
                <li><a href="Users.php"><i class="fa-solid fa-user"></i><p>USERS</p></a></li>
                <li><a href="Items.php"><i class="fa-solid fa-paperclip"></i><p>ITEM REGISTRATION</p></a></li>
                <li><a href="ItemTracking.php"><i class="fa-solid fa-eye"></i><p>ITEM TRACKING</p></a></li>
                <li><a href=""><i class="fa-solid fa-chart-simple"></i><p>REPORTS</p></a></li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-left"></i><p>LOGOUT</p></a></li>
                <div class = "active"></div>
            </ul>
        </div>
    </div>


</body>

</html>