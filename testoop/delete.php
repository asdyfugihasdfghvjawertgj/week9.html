<?php
include_once("include/dbconn.php");
$id=$_GET['id'];

$sql="delete from login1 where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "successfully deleted.";
}
else
{
    echo mysqli_error($conn);
}

?>