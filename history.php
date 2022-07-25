<html>
    <head>

    </head>
    <body>
            <table  class="table" border="1">
            <tr class="">
                <th class="">Name</th>
                <th class="">IVRS No.</th>
                <th class="">Subject</th>
                <th class="">Mobile No.</th>
                <th class="">Address</th>
                <th class="">Complaint</th>
                <th class="">Status</th>
            </tr>
           
        </form>
    </body>
</html>

<?php
require('connection.php');
session_start();
// echo "Firstname: "." ".$_SESSION['ivrs']."<br>";
$user = $_SESSION['ivrs'];

$records = "SELECT `Name`, `IVRSNo.`, `Subject`, `Mobile No.`, `Address`, `complain` FROM `complaint` WHERE `IVRSNo.`= '$user';";
$result = mysqli_query($con,$records);
$nfr = mysqli_num_rows($result);
$arr = array();
if($result){
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }
}
foreach($arr as $value){
    $name=$value['Name'];
    $ivrs=$value['IVRSNo.'];
    $subject=$value['Subject'];
    $mob=$value['Mobile No.'];
    $address=$value['Address'];
    $complain=$value['complain'];
    echo("<tr>
    <th>$name</th>
    <th>$ivrs</th>
    <th>$subject</th>
    <th>$mob</th>
    <th>$address</th>
    <th>$complain</th>
    <th></th>
</tr>");
}

// require('connection.php');
// session_start();
//     if( $_SESSION['user'] = $username )
//     {
//         echo 'Hello '. $_SESSION["user"] . ' You are adminstrator on this page';
//     }
//     else
//     {
//         echo 'You can not accesss';
//     }

//
?>