<?php

require "connect.php";

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$user_name=$_POST["username"];
$password=$_POST["password"];

$mysql_qry="select * from register where Username like '$user_name'";
$result=mysqli_query($dbnew,$mysql_qry);


if(mysqli_num_rows($result)>0){
	echo "user name exist";
}
else{
	$mysql_qry="insert into register(First_Name,Last_Name,Email,Username,Password) values('$fname','$lname','$email','$user_name','$password')";
	mysqli_query($dbnew,$mysql_qry);
	echo "successfuly registered";
}

?>