<?php
require('connection.php');
session_start();
$records = "SELECT `Name`, `IVRSNo.`, `Subject`, `Mobile No.`, `Address`, `complain` FROM `complaint`;";
$result = mysqli_query($con,$records);
$nfr = mysqli_num_rows($result);
$arr = array();
if($result){
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }
}
?>
<html>
    <head>
        <!-- <h1>Yoo people</h1> -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <th></th>
            </tr>
            <?php
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
                <th><a href='delet.php'>Succes</a></th>
            </tr>");
            }
            
            
            ?>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </table>
        <!-- <button onclick="generateRows()"> refresh</button> -->
       
    </body>
</html>
