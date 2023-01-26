<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form3";

$con = new mysqli($host,$user,$pass,$db);
if (!$con){
    echo "There are some problems while connecting Database.";
};


$name  = $_POST['name'];
$nicno  = $_POST['nicno'];
$address  = $_POST['address'];
$gender  = $_POST['gender'];
$yesno  = $_POST['yesno'];
$clubname1  = $_POST['clubname1'];
$joinedyear1  = $_POST['joinedyear1'];
$clubname2  = $_POST['clubname2'];
$joinedyear2  = $_POST['joinedyear2'];
$clubname3  = $_POST['clubname3'];
$joinedyear3  = $_POST['joinedyear3'];
$fmname  = $_POST['fmname'];
$fmjob  = $_POST['fmjob'];
$contactno  = $_POST['contactno'];
$district  = $_POST['district'];
$province  = $_POST['province'];
$msg = $_POST['msg'];

$qry = "INSERT INTO `table3`(`name`, `nicno`, `address`, 
`gender`, `yesno`, `clubname1`, `joinedyear1`, `clubname2`, `joinedyear2`, `clubname3`, 
`joinedyear3`, `fmname`, `fmjob`, `contactno`, `district`, `province`, `msg`) VALUES 
('$name','$nicno','$address','$gender','$yesno','$clubname1','$joinedyear1',
'$clubname2','$joinedyear2','$clubname3','$joinedyear3','$fmname','$fmjob','$contactno','$district','$province','$msg')";

$insert = mysqli_query($con,$qry);
if(!$insert) {
    echo "There are some problem while inserting data";
    echo $qry;
}
else {
    echo "Data Inserted";
}

?>