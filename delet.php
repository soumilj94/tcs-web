<?php
    require('connection.php');
    session_start();
    $user = $_SESSION['IVRSNo.'];    
    $query    = "DELETE FROM `utility` WHERE `IVRSNo.`='$user';";
    $q=mysqli_query($con,"UPDATE `complaint` set `status`='Resolved' where `IVRSNo.`='$user'");
    if (mysqli_query($con, $query)) {
        echo '<script>';
        echo 'alert("Cleared");';
        echo 'location = "srch.php";';
        echo '</script>';
    }else{
        echo '<script>';
        echo 'alert("Sorry !! Try Again");';
        echo 'location = "srch.php";';
        echo '</script>';
    }
?>  