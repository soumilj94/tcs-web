<?php
    require('connection.php');
    session_start();
    $user = $_SESSION['ivrs'];
    if (isset($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);

        $Mob = stripslashes($_REQUEST['mobile']);
        $Mob = mysqli_real_escape_string($con, $Mob);

        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);

        $query    = "UPDATE `customer` SET `Name`='$name',`Mobile No.`='$Mob',`Address`='$address' WHERE `IVRSNo.`='$user'";
        if (mysqli_query($con, $query)) {
            echo '<script>';
            echo 'alert("Data Updated Successfully");';
            echo 'location = "service.html";';
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert("Sorry !! Try Again");';
            echo 'location = "service.html";';
            echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head><title>Profile</title>
        <link rel="stylesheet" href="profile.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    </head>
<body>
<div class="background-image">
<div class="header-one"></div>
<div class="abt"><a class="about" href="about.html">About</a></div>
<div class="cts"><a class="contact" href="contact.html">Contact</a></div>
<img class="logo" src="./logo.png"/>
        <div class="card">
        <img class="user" src="user.png"/>
        <div class="form-popup" id="myForm1">
        <form class="form-container" method="post">
            <b class="head">Your Profile</b><br><br>

            <span class="ivr">IVRS No.</span><br>
            <h2 class="ivrsno"><?php echo $_SESSION['ivrs'];?></h2>
            
            <input class="box" type="text" placeholder="Enter Name" name="name" required><br>

            <input class="box" type="text" placeholder="Enter Mobile No." name="mobile" required><br>

            <input class="box" type="text" placeholder="Enter Your Address" name="address" required><br>

            <button type="submit" class="btn">SUBMIT</button>
            <a href="service.html"><button type="button" class="back" >BACK</button></a>
        </form>
    </div>
    </div>
</div>
    <script>
    function openForm1() {
        document.getElementById("myForm1").style.display = "block";
    }
    function closeForm1() {
        document.getElementById("myForm1").style.display = "none";
        }
        </script> 
</body>
</html>