<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title> 
      <link rel="stylesheet" href="css/index.css">  
</head>

<body>
  <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="index.php" method="post">
      <input type="text" placeholder="Student ID" name="studid"/>
      <input type="password" placeholder="Password" name="pass"/>
      <button>login</button>
      
    </form>
  </div>
</div>
<?php
    if($_POST){                     //Check if form is submitted
    include("connect.php");         //include connect.php 
    $connection = connect();        //creates the connection with database   
    check_connection($connection);  //checks the connection with database
    
    $myid = $_POST['studid'];       
    $mypass = md5($_POST['pass']);  //encrypts user password in md5
    
    $query = "SELECT id,password FROM users WHERE id='$myid' and password='$mypass' ";  //get user id & password from database
    $result = mysqli_query($connection,$query);     //store the result of query 
    
    $rowcount = mysqli_num_rows($result);       //get row count
    
    if($rowcount > 0)                           //if record matches do login
        header("location: dashboard.php");
    else
        echo "<script>alert('Invalid Student ID or Password');</script>";       //else alert(Invalid)
    }
?>


</body>

</html>
