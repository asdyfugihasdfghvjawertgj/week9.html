<?php
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="University";
$conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
?>