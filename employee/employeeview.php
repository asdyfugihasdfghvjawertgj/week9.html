<?php

include_once('../hrsystem/include/dbconn.php');
$id=$_GET['id'];
$sql="select * from employee where eid='$id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
$i=1;
//$result=mysqli_query($conn,$id);
//$rows=mysqli_num_rows($result);
//$i=1;
//echo "$id";
?>
<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title>Admin | Login</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

</head>
<body>
<div class="container">
<?php
if($rows>0)
{
?>
<table class="table table-striped">
<thead>
<tr>
<td>No</td>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Deptname</td>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($result))
{
$deptid=$row['dept_id'];
$name="select * from department where id='$deptid'";
$result1=mysqli_query($conn,$name);
$namerow=mysqli_fetch_assoc($result1);
//echo $row['id'];	
//echo $namerow['name']==$row['dept_id'];
 ?>
<tr>
<td><?php echo $i++ ?> </td>
<td><?php echo $row['name']?> </td>
<td><?php echo $row['email']?> </td>
<td><?php echo $row['phone']?> </td>
<td><?php echo $namerow['name']?> </td>
<?php
}
?>
</tbody>

</table>
<?php
}
?>
</div>
</body>
</html>