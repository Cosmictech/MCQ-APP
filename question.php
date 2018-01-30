<!DOCTYPE html>
<head>
    <title>Question 1</title>
<link rel="stylesheet" href="css/question.css">
</head>
    <body>
        <div class="question-page">
            <div class="form">
                <form class="question-form" action="question.php" method="post">
                <?php
                $count = 0;
                STATIC $questionNo = 1;    
                
                    $servername = "localhost";
                    $username = "username";
                    $password = "password";
                    $database = "mcq_app";
    
                    $db= mysqli_connect($servername,$username,$password,$database);
                    if($db->connect_error)
                        die("Connection Failed :".$db->connect_error);
                    else
                        echo "Connected Succssfully";
                
                $query = "SELECT * FROM test1 WHERE id=$questionNo";
                    
                $result = mysqli_query($db,$query);
                
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $question = $row["question"];
                    $option1 = $row["option1"];
                    $option2 = $row["option2"];
                    $option3 = $row["option3"];
                    $option4 = $row["option4"];
                    
                echo "<p><b>Question $questionNo:</b> $question </p><hr>
                <input type=\"radio\" name=\"options\" value=\"$option1\" id=\"o1\" checked><label for=\"o1\">$option1</label><br>
                <input type=\"radio\" name=\"options\" value=\"$option2\" id=\"o2\"><label for=\"o2\">$option2</label><br>
                <input type=\"radio\" name=\"options\" value=\"$option3\" id=\"o3\"><label for=\"o3\">$option3</label><br>
                <input type=\"radio\" name=\"options\" value=\"$option4\" id=\"o4\"><label for=\"o4\">$option4</label><br><br>
                <button type=\"submit\">Next</button>
                <a href=\"result.php\"><button type=\"button\">End Test</button></a>";
                    
                    if($_POST){
                    $userAns = $_POST['options'];
                    $ans = $row["answer"];
                    if($userAns==$ans){
                        $count++;
                        echo "Your answer is correct";
                    }
                    else
                        echo "Your answer is wrong";
                        
                    echo "<h3>Total Marks : $count";
                    }
                }
                ?>
                    
                </form>
                
            </div>
        
        </div>
    </body>
