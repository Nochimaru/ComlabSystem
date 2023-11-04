<!DOCTYPE html>
<?php
    include("itemconnection.php");

    $SerialNum
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
                        <th scope="col">ITEM_ID</th>

                        <th scope="col">SERIAL_NUMBER</th>

                        <th scope="col">ITEM_NAME</th>

                        <th scope="col">ITEM_CLASSIFICATION</th>

                        <th scope="col" >STATUS</th>

                        <th scope="col">USER_ID</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM items;" ;
                        $result = mysqli_query($con,$sql);
                        $resultCheck = mysqli_num_rows($result);


                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                            $itemNum =$row['itemNum'];
                            $SerialNum=$row['SerialNum'];
                            $ItemName=$row['ItemName'];
                            $Classification=$row['Classification'];
                            $Availability = $row['Availability'];
                            $UserID = $row['UserID'];
                
                            echo '<tr>
                            <th scope="row">' . $itemNum . '</th>
                            <td>' . $SerialNum . '</td>
                            <td>' . $ItemName . '</td>
                            <td>' . $Classification . '</td>
                            <td>' . $Availability . '</td>
                            <td>' . $UserID . '</td>
                            <td>
                                <button class="btn btn-primary"><a href="EditItem.php?updateItem=' . $itemNum . '" class="text-light">Edit</a></button>
                                <button class="btn btn-danger"><a href="DeleteItem.php?deleteItem=' . $itemNum . '" class="text-light">Remove</a></button>
                            </td>
                        </tr>';
                    
                        } 
                    }
                    ?>
                </tbody>
            </table>
            <button class="btn btn-success"><a href="Items.php" class="text-light">Add Device</a></button>

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