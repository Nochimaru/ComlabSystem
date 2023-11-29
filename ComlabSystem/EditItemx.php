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

  if(isset($_POST['submit'])){
    $ItemName = $_POST['ItemName'];
    $Classification = $_POST['Classification'];
    $Availability = $_POST['Availability'];
    $UserID = $_POST['UserID'];

    $sql = "UPDATE items SET SerialNum = '$SerialNum', ItemName = '$ItemName', Classification = '$Classification', Availability = '$Availability', UserID = '$UserID' WHERE itemNum = $itemNum";
    $result = mysqli_query($con, $sql);

    if($result){
      header('location: ItemTrackingx.php');
    } else {
      die(mysqli_error($con));
    }
  }
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
          <label>Item Name</label>
          <input type="text" class="form-control" placeholder="Enter Item Name" name="ItemName" autocomplete="off" value=<?php echo $ItemName;?>>
        </div>

        <div class="form-group">
          <label>SerialNum</label>
          <input type="text" class="form-control" placeholder="Enter Item Serial Number" name="SerialNum" autocomplete="off" value=<?php echo $SerialNum;?>>

        <div class="form-group">
          <label>Classification</label>
          <input type="text" class="form-control" placeholder="Enter Item Classification" name="Classification" autocomplete="off" value=<?php echo $Classification;?>>
        </div>

        <div class="form-group">
          <label>Availability</label>
          <input type="text" class="form-control" placeholder="Enter Item Status" name="Availability" autocomplete="off" value=<?php echo $Availability;?>>
        </div>

        <div class="form-group">
          <label>UserID</label>
          <input type="text" class="form-control" placeholder="Enter Item User" name="UserID" autocomplete="off" value=<?php echo $UserID;?>>

        <?php
           /*include 'loginconnection.php';
           $query = mysqli_query($con,"Select * from login");
           echo "<input type='search' list='dtlist' />";
           echo "<datalist id='dtlist'>";
            while($row = mysqli_fetch_array($query))
            {
                echo "<option>$row[UserID]</option>";
            }
            echo "<datalist>";*/ 
        ?>   
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
            
  
    </div>
    <div class="header">
        <div class="side-nav">
            <a href="Homex.php" class="logo">
            <img src="logo.png" class="logo-img">
            <img src="logo2.png" class="logo-icon">
            </a>
            <ul class="nav-links">
                <li><a href="Trackingx.php"><i class="fa-solid fa-eye"></i><p>ITEM TRACKING</p></a></li>
                <li><a href="Reportx.php"><i class="fa-solid fa-chart-simple"></i><p>REPORTS</p></a></li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-left"></i><p>LOGOUT</p></a></li>
                <div class = "active"></div>
            </ul>
        </div>
    </div>


</body>

</html>