<?php

include_once('include/dbconn.php');
$sql="select * from login1";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
$i=1;
?>
<!DOCTYPE>
<html>
<head>
<title>Test </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
<td>Actions</td>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($result))
{
 ?>
<tr>
<td><?php echo $i++?> </td>
<td><?php echo $row['name']?> </td>
<td><?php echo $row['email']?> </td>
<td><?php echo $row['ph']?> </td>
<td><a class="btn btn-primary" href="view.php?id=<?php echo $row['id']?>"><i class="fa fa-eye"></i></a><a class="btn btn-success" href="edit.php?id=<?php echo $row['id']?>"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return deleteuser(<?php echo $row['id']; ?>);"><i class="fa fa-trash"></i></a></td>
</tr>
<?php
}
?>
</tbody>

</table>
<?php
}
?>
</div>
<script type="text/javascript">
	function deleteuser(id){
		$result=confirm("are you sure to delete?");
		if ($result) {
			window.location.href="delete.php?id="+id;
			return true;
		}
	}
</script>
</body>
</html>