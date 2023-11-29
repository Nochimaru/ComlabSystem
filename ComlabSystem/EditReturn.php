<?php
include 'itemconnection.php';

$itemNum = $_GET['updateItem'];
$sql = "SELECT * FROM items WHERE itemNum = $itemNum";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$SerialNum = $row['SerialNum'];
$ItemName = $row['ItemName'];
$Classification = $row['Classification'];
$Availability = $row['Availability'];
$UserID = $row['UserID'];
$NameOfUser = $row['NameOfUser'];

if(isset($_POST['submit'])){
    $ItemName = $_POST['ItemName'];
    $Classification = $_POST['Classification'];
    $Availability = $_POST['Availability'];
    $UserID = !empty($_POST['UserID']) ? $_POST['UserID'] : NULL; // Set UserID to NULL if empty
    $NameOfUser = $_POST['NameOfUser'];

    $sql = "UPDATE items SET Availability = '$Availability', UserID = ?, NameOfUser = '$NameOfUser' WHERE itemNum = $itemNum";
    $stmt = mysqli_prepare($con, $sql);

    if($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $UserID);
        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0) {
            header('location: Return.php');
            exit();
        } else {
            echo "Failed to update item";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepared statement: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>


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
<div class="help">
      <form method="POST">

        <div class="form-group">
          <label>Availability</label>
          <input type="text" class="form-control" placeholder="Enter Item Status" name="Availability" autocomplete="off" value=<?php echo $Availability;?>>
        </div>

        <div class="form-group">
          <label>FACULTY_ID</label>
          <input type="text" class="form-control" placeholder="Enter Item User" name="UserID" autocomplete="off" value=<?php echo $UserID;?>>   
        </div>

        <div class="form-group">
          <label>Name of User</label>
          <input type="text" class="form-control" placeholder="Enter User Name" name="NameOfUser" autocomplete="off" value=<?php echo $NameOfUser;?>>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
            
  
    </div>
    <div class="header">
        <div class="side-nav">
            <a href="Home.php" class="logo">
            <img src="logo.png" class="logo-img">
            <img src="logo2.png" class="logo-icon">
            </a>
            <ul class="nav-links">
                <li><a href="Users.php"><i class="fa-solid fa-user"></i><p>USERS</p></a></li>
                <li><a href="Tracking.php"><i class="fa-solid fa-eye"></i><p>ITEM TRACKING</p></a></li>
                <li><a href="Report.php"><i class="fa-solid fa-chart-simple"></i><p>REPORTS</p></a></li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-left"></i><p>LOGOUT</p></a></li>
                <div class = "active"></div>
            </ul>
        </div>
    </div>


</body>

</html>