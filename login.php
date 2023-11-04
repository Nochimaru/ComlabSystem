<?php
    include("loginconnection.php");

    $username_error = null;
    $password_error = null;
    $display_error = "none";

    if(isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];


        $sql = "select * from login where Username = '$username' and Password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            header("Location: Home.php");
            
        }else{
            $display_error = "block";
            header("Location: index.php");
            
        }
    }

?>