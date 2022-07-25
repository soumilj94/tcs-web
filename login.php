<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Help Login</title>
    <link rel="stylesheet" href="login.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;500;600;700;800&display=swap" rel="stylesheet"> 
</head>
<body>
<?php
    require('connection.php');  
    session_start();
    if (isset($_POST['ivrs'])) {
        $username = stripslashes($_REQUEST['ivrs']); 
        $username = mysqli_real_escape_string($con, $username);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $query    = "SELECT * FROM `login` WHERE `IVRSNo.`='$username' AND `Password`='$password';";
        
        $result = mysqli_query($con, $query); //or die(mysql_error())
        $rows = mysqli_num_rows($result);
        if($rows == 1){
            $_SESSION['ivrs'] = $username;
            header("Location:service.html");

        }
        
        else {
        }?>
        <script type="text/javascript">
            alert("Invalid Credentials!");
        </script>
        <?php
        if($rows==1 && $username=='N3336001400' && $password=='85265471'){//Utility Officer credentials
            header("Location:util.php");
        }
    } 
    else {
    }
?>
    
    <div class="background-image">
        <div class="header-one"></div>
        <div class="abt"><a class="about" href="about.html">About</a></div>
        <div class="cts"><a class="contact" href="contact.html">Contact</a></div>
        <h1>City Help Portal</h1>
        <img class="login-logo" src="./login-logo.png"/>
        <form method="post" class="form" id="form" onsubmit="return validateForm()">
            <div class="card">
                <img class="user" src="user.png"/>
                
                <input type="text" maxlength="11" class="input-field" id="inputField"
                autocomplete="off" placeholder="Enter IVRS" name="ivrs"/>

                <input type="password" maxlength="8" class="pswd-field" id="pswdField" 
                  autocomplete="off" placeholder="Enter Password" name="password"/>

                <input class="submit" id="submit" type="submit" value="Login"/>

                </div>
            </div>
        </form>
    </div>

    <script>
        let inputField = document.getElementById("inputField");
        let pswdField = document.getElementById("pswdField");
        let flag = 1;

        function validateForm(){
            // For Input field
            if(inputField.value == ""){
                // console.log("username empty");
                alert("Please Enter your IVRS Number!");
                flag = 0;
            }
            else if(inputField.value.length < 11){
            alert("Invalid IVRS format!");
            flag = 0;
            }

            // For Password field
            if(pswdField.value == ""){
                alert("Please enter your Password!");
                flag = 0
            }
            else if(pswdField.value.length < 8){
                alert("Invalid Password format!");
            }


            if(flag){
                return true;
            }
            else{
                return false;
            }
        }

    </script>
</body>
</html>
