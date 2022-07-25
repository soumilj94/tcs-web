<?php
    require('connection.php');
    session_start();
    $user = $_SESSION['ivrs'];
    isset($_POST['name']);
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con, $name);
    isset($_POST['mobile']);
    $Mob = stripslashes($_REQUEST['mobile']);
    $Mob = mysqli_real_escape_string($con, $Mob);
    isset($_POST['address']);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con, $address);
    isset($_POST['complain']);    
    $complain = stripslashes($_REQUEST['complain']);
    $complain = mysqli_real_escape_string($con, $complain);

        $query    = "INSERT INTO `complaint` (`Name`, `IVRSNo.`, `Subject`, `Mobile No.`, `Address`, `complain`) VALUES ('$name', '$ivrs', 'Meter Issue', '$Mob', '$address', '$complain')";
        if (mysqli_query($con, $query)) {
            echo '<script>';
            echo 'alert("Complaint Registered Successfully");';
            echo 'location = "service.html";';
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert("Sorry !! Try Again");';
            echo 'location = "service.html";';
            echo '</script>';
        }
?>  
    