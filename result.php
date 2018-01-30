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
    
      <?php
      if($_POST){
          $totalMarks =10;
          $marks = $_POST['options'];
          $result = "Passed";
      }
      echo "<h3>Total Marks : $totalMarks</h3><br>
      <h3>Your Marks : $marks</h3><br>
      <h3>Result : $result</h3><br>"
      ?>
      <a href="dashboard.php"><button>Ok</button></a>
      
    
  </div>
</div>





</body>

</html>
