<?php
include_once("../hrsystem/include/dbconn.php");
$id=$_GET['id'];

$sql="delete from employee where eid='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "successfully deleted.";
    //header('location:showemployee.php');
}
else
{
    echo mysqli_error($conn);
}

?>