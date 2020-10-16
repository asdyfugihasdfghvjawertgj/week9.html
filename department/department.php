<?php
include_once('../hrsystem/include/dbconn.php');
$name="";
$email="";
$phone="";
if (isset($_POST['submit'])) {
	if ($_POST['name'] && $_POST['email']  && $_POST['phone']) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$sql="insert into department (name,email,phone) values ('$name','$email','$phone')";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			header('location:showdepartment.php');
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Department</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
  </head>
<body>
<div class="container bg-light mt-5">
<form method="POST">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name</label>
				<input type="text" id="input1" name="name" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email</label>
				<br>
				<input type="text" id="input2" name="email" class="form-control">
				<span style="color: red" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label>Phone</label>
				<input type="text" id="input3" name="phone" class="form-control">
				<span style="color: red" id="span3"></span>
		</div>
	</div>
		
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="submit" id="show" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Submit
		</button>
	</div>
	</form>
</div>
<script src="../jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/department.js"></script>
</body>
</html>