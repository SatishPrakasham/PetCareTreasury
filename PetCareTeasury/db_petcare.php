<?php 

$sname= "localhost";
$uname= "root";
$pass= "";

$db_name = "petcaretreasury";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$conn){
	echo "Connection failed!";
}





