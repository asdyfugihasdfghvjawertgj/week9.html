<?php
include_once('../hrsystem/include/dbconn.php');
$sql="select * from employee";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);

$i=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Employee</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<td>Actions</td>
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
<td><?php echo $i++?> </td>
<td><?php echo $row['name']?> </td>
<td><?php echo $row['email']?> </td>
<td><?php echo $row['phone']?> </td>
<td><?php echo $namerow['name'] ?></td>
<td><a class="btn btn-primary" href="employeeview.php?id=<?php echo $row['eid']; ?>"><i class="fa fa-eye"></i></a><a class="btn btn-success" href="employeeedit.php?id=<?php echo $row['eid']; ?>"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return deleteuser(<?php echo $row['eid']; ?>);"><i class="fa fa-trash"></i></a></td>
  			
  			<?php
  				}
  			}
  			?>
  		</th>	
  		</tbody>
  		
  	</table>
  	
  </div>
  </div>
<script type="text/javascript">
	function deleteuser(eid){
		$result=confirm("are you sure to delete?");
		if ($result) {
			window.location.href="employeedelete.php?id="+eid;
			return true;
		}
	}
	</script>	
  </body>
  </html>