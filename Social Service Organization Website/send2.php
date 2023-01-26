<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form2";

$con = new mysqli($host,$user,$pass,$db);
if (!$con){
    echo "There are some problems while connecting Database.";
}

$name  = $_POST['name'];
$emailaddress  = $_POST['emailaddress'];
$contactnumber  = $_POST['contactnumber'];
$questiontype  = $_POST['questiontype'];
$msg  = $_POST['msg'];

$qry = "INSERT INTO `table2`(`name`, `emailaddress`, `contactnumber`, `questiontype`, 
`msg`) VALUES ('$name','$emailaddress','$contactnumber','$questiontype','$msg')";

$insert = mysqli_query($con,$qry);
if(!$insert) {
    echo "There are some problem while inserting data";
}
else {
    echo "Data Inserted";
}
?>