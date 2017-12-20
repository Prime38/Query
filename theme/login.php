<?php

require "connect.php";


$user_name=$_POST["username"];
$password=$_POST["password"];


$mysql_qry="select * from register where Username like '$user_name' and Password like '$password'";
$result= mysqli_query($dbnew,$mysql_qry);

if(mysqli_num_rows($result)>0)
{  
	while($row=mysqli_fetch_row($result))
	{echo "success";
	
session_start();
    
    $_SESSION["Login"]=$row[0];
     
 $use=$_SESSION["Login"];

if(!file_exists ( "uploads/$use" ))
     mkdir("uploads/$use/",0777);

header("Location:index-slider.html");
}
}

else
	{echo "not success";header("Location:index_2.html");}


?>