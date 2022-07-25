<?php
    require('connection.php');
    session_start();
    if (isset($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        
        $ivrs = stripslashes($_REQUEST['IVRS']);
        $ivrs = mysqli_real_escape_string($con, $ivrs);

        $Mob = stripslashes($_REQUEST['mobile']);
        $Mob = mysqli_real_escape_string($con, $Mob);

        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);

        $query    = "INSERT INTO `customer` (`Name`, `IVRSNo.`, `Mobile No.`, `Address`) VALUES ('$name', '$ivrs', '$Mob', '$address')";
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
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="form-popup" id="myForm1">
        <form class="form-container" method="post">
            <b class="head">Your Profile</b><br><br>
            
            <span class="ivr">Name</span><br>
            <input class="box" type="text" placeholder="Enter Name" name="name" required><br>

            <span class="ivr">IVRS No.</span><br>
            <input class="box" type="text" placeholder="Enter IVRS No." name="IVRS" required><br>

            <span class="ivr">Mobile No.</span><br>
            <input class="box" type="text" placeholder="Enter Mobile No." name="mobile" required><br>

            <span class="ivr">Address</span><br>
            <input class="box" type="text" placeholder="Enter Your Address" name="address" required><br>

            <button type="submit" class="btn">SUBMIT</button>
            <button type="button" class="back" onclick="closeForm1()">BACK</button>
        </form>
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