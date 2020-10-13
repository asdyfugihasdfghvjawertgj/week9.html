<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
  </head>

<style type="text/css">
h1{
	position: relative;
	top:-160px;
	color: blue;
	opacity: 0.3;

	}
	#show1{
		display: none;
	}

</style>
<body>
<!--register in image-->	
<h1 style="text-align: center;">REGISTER</h1>
<!--title register-->
<div class="container">
	<h4 style="color: black;" class="font-weight-bold">REGISTER</h4>
	<div style="background-color: darkblue; width: 30px;height: 5px;"></div>
</div>
<!--registration form-->
<div class="container bg-light mt-5">
<form method="POST" action="datalist.php">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Citizan ID Passport No.<span style="color: red;">*</span></label>
				<input type="text" id="input1" name="citizan" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Title(EN)<span style="color: red;">*</span></label>
				<br>
				<select name="titleen"id="input2" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Mr.">Mr.</option>
        		<option value="Ms.">Ms.</option>
        		<option value="Mrs">Mrs.</option>
    </select>
				<span style="color: red" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label>Name(EN)<span style="color: red;">*</span></label>
				<input type="text" id="input3" name="nameen" class="form-control">
				<span style="color: red" id="span3"></span>
		</div>
	</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Nationality<span style="color: red;">*</span></label>
				<br>
				<select name="nationality" id="input4" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Burmese">Burmese</option>
        		<option value="Thai">Thai</option>
        		<option value="Cambodia">Cambodia</option>
				</select>
				<span style="color: red" id="span4"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Current Living Country<span style="color: red;">*</span></label>
				<br>
				<select name="country"id="input5" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Living Inside Thailand">Living Inside Thailand</option>
        		<option value="Living Outside Thailand">Living Outside Thailand</option>
				</select>
				<span style="color: red" id="span5"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>School<span style="color: red;">*</span></label>
				<br>
				<select name="school" id="input6" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="10 January 1979 High School, Cambodia">10 January 1979 High School, Cambodia</option>
        		<option value="AB Paterson College, Australia">AB Paterson College, Australia</option>
        		<option value="Abasyn University, Pakistan">Abasyn University, Pakistan</option>
        		<option value="Abdul Wali Khan University Mardan, Pakistan">Abdul Wali Khan University Mardan, Pakistan</option>
        		<option value="Abia State University, Nigeria">Abia State University, Nigeria</option>
        		<option value="Abo Akademi University, Finland">Abo Akademi University, Finland</option>
				</select>
				<span style="color: red" id="span6"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email<span style="color: red;">*</span></label>
				<input type="text" id="input7" name="email" class="form-control">
				<span style="color: red" id="span7"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Country Code<span style="color: red;">*</span></label>
				<br>
				<select name="code"id="input8" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="+258 (Mozambique)">+258 (Mozambique)</option>
        		<option value="+95 (Myanmar)">+95 (Myanmar)</option>
        		<option value="+264 (Namibia)">+264 (Namibia)</option>
        		<option value="+674 (Nauru)">+674 (Nauru)</option>
        		<option value="+977 (Nepal)">+977 (Nepal)</option>
        		<option value="+31 (Netherlands)">+31 (Netherlands)</option>
				</select>
				<span style="color: red" id="span8"></span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Mobile<span style="color: red;">*</span></label>
				<input type="text" id="input9" name="mobile" class="form-control">
				<span style="color: red" id="span9"></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="register" id="show" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Register
		</button>
	</div>
	</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/registration.js"></script>

</body>
</html>


