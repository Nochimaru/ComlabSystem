<?php
  include 'itemconnection.php';
  if(isset($_POST['submit'])){
    $SerialNum=$_POST['SerialNum'];
    $ItemName=$_POST['ItemName'];
    $Classification=$_POST['Classification'];
    $Availability=$_POST['Availability'];


    $sql="insert into items(SerialNum,ItemName,Classification,Availability,UserID) values ('$SerialNum','$ItemName','$Classification','$Availability', NULL)";
    $result = mysqli_query($con,$sql);

    if($result){
      header('location:Items.php');
    }else{
      die(mysqli_error($con));
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comlab Inventory System</title>
    <link rel="stylesheet" type="text/css" href="styleHome.css">
    

</head>
<body>
<div class="welcome">

    <div class="container my-5" style="background-color: #F3CF74;">
      <form method="POST">

      <div class="form-group">
          <label>Serial Number</label>
          <input type="text" class="form-control" placeholder="Enter Serial Number" name="SerialNum" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Item Name</label>
          <input type="text" class="form-control" placeholder="Enter Device Name" name="ItemName" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Classification</label>
          <input type="text" class="form-control" placeholder="Enter Device Classification" name="Classification" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Availability</label>
          <input type="text" class="form-control" placeholder="Availability" name="Availability" autocomplete="off">
        </div>


        <button type="submit" class="btn btn-success my-3" name="submit">Submit</button>
        <button class="btn btn-primary"><a href="Items.php" class="text-light">Back</a></button>
      </form> 
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