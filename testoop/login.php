<?php
//include_once('include/dbconn.php');
if (isset($_POST['login'])) {
  if ($_POST['username'] && $_POST['password']) {
   header('location:display.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <div id="login-page">
      <div class="container">
      <form class="form-login" method="POST">
            <h2 class="form-login-heading">Host Myanmar(Mandalay)</h2>
              
            <div class="login-wrap">
                <input type="text"id="name" name="username" class="form-control" placeholder="User ID" autofocus>
                <span style="color: red" id="nameerror"></span><br>
                <input type="password" id="pwd" name="password" class="form-control" placeholder="Password"><span style="color: red" id="pwderror"></span><br >
                <input  name="login" id="login1" class="btn btn-theme btn-block" type="submit">
            </div>
          </form>     
      
      </div>
    </div>
    
    <script src="js/myjs.js"></script>
  
  </body>
</html>
