<?php
  include 'loginconnection.php';
  if(isset($_POST['submit'])){
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $UserClassification=$_POST['UserClassification'];

    $sql="insert into login(Username,Password,Fname,Lname,UserClassification) values ('$Username','$Password','$Fname','$Lname',' $UserClassification')";
    $result = mysqli_query($con,$sql);

    if($result){
      header('location:Users.php');
    }else{
      die(mysqli_error($con));
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1 class="my-5"><center>COMPUTER LABORATORY</center></h1>
    <h3 class="my-5"><center>MONITORING SYSTEM</center></h3>

    <title>Student System Registration</title>
  </head>
  <body style="background-image: url('bg_wallpaper.gif');">
    <div class="container my-5" style="background-color: #F3CF74;">
      <form method="POST">

      <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Enter Username" name="Username" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="Password" autocomplete="off">
        </div>

        <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control" placeholder="Enter First name" name="Fname" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" placeholder="Enter Last name" name="Lname" autocomplete="off">
        </div>

        <div class="form-group">
          <label>User Classification</label>
          <input type="text" class="form-control" placeholder="Enter the User Classification" name="UserClassification" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-success my-3" name="submit">Submit</button>
        <button class="btn btn-primary"><a href="Users.php" class="text-light">Back</a></button>
      </form> 
    </div>

  </body>
</html>