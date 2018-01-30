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
    if($_POST){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "mcq_app";
    
    $db= mysqli_connect($servername,$username,$password,$database);
    if($db->connect_error)
        die("Connection Failed :".$db->connect_error);
    else
        echo "Connected Succssfully";
    $myid = $_POST['studid'];
    $mypass = $_POST['pass'];
    
    $query = "SELECT id,password FROM users WHERE id='$myid' and password='$mypass' ";
    $result = mysqli_query($db,$query);
    
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount > 0)
        header("location: dashboard.php");
    else
        echo "<script>alert('Invalid Student ID or Password');</script>";
    }
?>


</body>

</html>
