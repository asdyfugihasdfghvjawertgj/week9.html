<?php
session_start();
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

</style>
</head>
<body>
<div class="container">
<div class="alert alert-primary">
<?php
if(isset($_POST['username']) && isset($_POST['password']))
    {
        $name=$_POST['username'];
        $password=$_POST['password'];
        //echo "$name";
       
    $myuser=new Student($name,$password);
    //$myuser->username=$name;
    //echo $myuser->username;
    $myuser->set_username($name);
    echo $myuser->get_username();
    //$myuser->showinfo();


    }

    /**
     * 
     */
     class Student
    {
       private $username;
       private $password; 
        function showinfo()
        {
            echo $this->username;
            echo $this->password;
        }
        function __construct($username,$password){
            $this->username=$username;
            $this->password=$password;
            //echo $this->username;
        }
        function set_username($username){
           $this->username=$username;
           //echo $this->username;
        }
        function get_username(){
            return $this->username;

        }
        function set_password($password){
           $this->password=$password;
           //echo $this->username;
        }
        function get_password(){
            return $this->password;

        }
    }


?>
</div>

</div>

</body>
</html>
