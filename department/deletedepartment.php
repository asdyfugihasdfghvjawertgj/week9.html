<?php
include_once("../hrsystem/include/dbconn.php");
$id=$_GET['id'];
$validate="select * from employee where eid='$id'";
$delete=mysqli_query($conn,$validate);
$rows=mysqli_num_rows($delete);
if($rows==0){
	$sql="delete from department where id='$id'";
$result=mysqli_query($conn,$sql);
header('location:showdepartment.php');	

}

?>