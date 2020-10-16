<?php
include_once('../hrsystem/include/dbconn.php');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$nrc=$_POST['nrc'];
	$deptid=$_POST['deptid'];
	//echo "$name";
	$sql="insert into employee (name,email,phone,address,nrc,dept_id) values ('$name','$email','$phone','$address','$nrc','$deptid')";
	mysqli_query($conn,$sql);
	header('location:showemployee.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Employee</title>
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
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Address</label>
				<input type="text" id="input4" name="address" class="form-control">
				<span style="color: red" id="span4"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>NRC</label>
				<br>
				<input type="text" id="input5" name="nrc" class="form-control">
				<span style="color: red" id="span5"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label>Dept_id</label>
				<select name="deptid" id="input6" style="width: 100%; height: 40px;">
				<label>Dept_id</label>
				<?php
				include_once('hrsystem/include/dbconn.php');
				$sql="select * from department";
				$result=mysqli_query($conn,$sql);
				$rows=mysqli_num_rows($result);
						
				for ($i=0; $i <$rows ; $i++) { 
					$row=mysqli_fetch_assoc($result);

					
							
				?>
				<option value=""></option>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
				
				<?php
				}
				
				?>
				</select>
				
				<span style="color: red" id="span6"></span>
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/employee.js"></script>
</body>
</html>