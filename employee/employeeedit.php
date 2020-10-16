<?php
include_once('../hrsystem/include/dbconn.php');
if(isset($_POST['edit']))
{

  $id=$_GET['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $deptid=$_POST['deptid'];
  $sql="update employee set name='$name',email='$email',phone='$phone',dept_id='$deptid' where eid='$id'";
  $result=mysqli_query($conn,$sql);
  if(!$result)
  {
    echo mysqli_error($conn);
  }
  else
  {
    header("location:showemployee.php");
  }
}
if (isset($_POST['cancel'])) {
 header('location:showemployee.php');
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
                $result=mysqli_query($conn,"select * from employee where eid='$id'");
                $cnt=1;
                while ($row=mysqli_fetch_assoc($result)) {
                    	$deptid=$row['dept_id'];
					             $name="select * from department where id='$deptid'";
					             $result1=mysqli_query($conn,$name);
					             $namerow=mysqli_fetch_assoc($result1);
                	
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
                    <select name="deptid" style="width: 100%;height: 40px;">
                      <option value="<?php echo $namerow['id'];?>"><?php echo $namerow['name'];?></option>
                      <?php
                      include_once('../hrsystem/include/dbconn.php');
                      $sql="select * from department";
                      $result=mysqli_query($conn,$sql);
                      $rows=mysqli_num_rows($result);
                      for ($i=0; $i <$rows ; $i++) { 
                      $row1=mysqli_fetch_assoc($result);
                      if ($row1['name']!=$namerow['name']) {
                      ?>
                       <option value="<?php echo $row1['id']; ?>"><?php echo $row1['name'];?></option>
                       <?php
                      }
                      ?>
                      
                      <?php
                      }
                    }
                      ?>
                    	
                    	</select>
                    <span id="depterror" style="color:red"></span>
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