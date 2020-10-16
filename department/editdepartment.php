<?php
include_once('../hrsystem/include/dbconn.php');
if(isset($_POST['edit']))
{

  $id=$_GET['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sql="update department set name='$name',email='$email',phone='$phone' where id='$id'";
  $result=mysqli_query($conn,$sql);
  if(!$result)
  {
    echo mysqli_error($conn);
  }
  else
  {
    header("location:showdepartment.php");
  }
}
if (isset($_POST['cancel'])) {
 header('location:showdepartment.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title>Admin | Login</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form  method="post">
              <?php
              include_once('../hrsystem/include/dbconn.php');
                $id=$_GET['id'];
                $result=mysqli_query($conn,"select * from department where id='$id'");
                $cnt=1;
                while ($row=mysqli_fetch_assoc($result)) {
                	
                ?>
                <div >
		            <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" >
                    <span id="nameerror" style="color:red"></span>
		            <br>
		            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" ><br >
                    <span id="pwerror" style="color:red"></span>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" >
                    <span id="pherror" style="color:red"></span>
                    <br>
                    <?php
                      }
                      ?>
                <br>
                <br>
		            <input  name="edit" class="btn btn-primary" type="submit" value="Submit">
                 <input  name="cancel" class="btn btn-secondary" type="submit" value="Cancel">
                    
                </div>
                
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="../js/jquery.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/myjs.js"></script>
    


  </body>
</html>