<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form1";

$con = new mysqli($host,$user,$pass,$db);
if (!$con){
    echo "There are some problems while connecting Database.";
}


$name  = $_POST['name'];
$nic  = $_POST['nic'];
$occuption  = $_POST['occuption'];
$knowabout  = $_POST['knowabout'];
$contactnumber  = $_POST['contactnumber'];
$emailaddress  = $_POST['emailaddress'];
$bankname  = $_POST['bankname'];
$myfile  = $_POST['myfile'];
$paymenttype  = $_POST['paymenttype'];
$moneyamount  = $_POST['moneyamount'];
$msg  = $_POST['msg'];

$qry ="INSERT INTO `table1`(`name`, `nic`, `occuption`, `knowabout`, `contactnumber`, 
`emailaddress`, `bankname`, `myfile`, `paymenttype`,`moneyamount`, `msg`) VALUES ('$name','$nic','$occuption','$knowabout',
'$contactnumber','$emailaddress','$bankname','$myfile','$paymenttype','$moneyamount','$msg')";

$insert = mysqli_query($con,$qry);
if(!$insert) {
    echo "There are some problem while inserting data";
}
else {
    echo "Data Inserted";
}
?>