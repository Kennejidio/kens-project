<?php

//database parameters
$DBhost = 'localhost';
$DBuser = 'root';
$DBpassword ='';
$DBname='abuyog-academy-db';
//connect to database
$db = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname); 
//check if connected
if(!$db){
 echo 'Connection failed: ' . mysqli_connect_error();
 exit();
}
?>