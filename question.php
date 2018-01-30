<!DOCTYPE html>
<head>
    <title>Question 1</title>
<link rel="stylesheet" href="css/question.css">
</head>
    <body>
        <div class="question-page">
            <div class="form">
                <form class="question-form" action="nextquestion.php" method="post">
                <?php
               
                    include("connect.php");
                    include("form.php");
                    $connection = connect();
                    check_connection($connection);
                    $questionNo =1;
                    /*$query = "SELECT * FROM test1 WHERE id=$questionNo";
                    
                    $result = mysqli_query($connection,$query);*/
                    
                    $result = result();
                
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $question = $row["question"];
                        $option1 = $row["option1"];
                        $option2 = $row["option2"];
                        $option3 = $row["option3"];
                        $option4 = $row["option4"];
                        
                        echo getForm($questionNo,$question,$option1,$option2,$option3,$option4);
                    
                        if($_POST){
                            $userAns = $_POST['options'];
                        $ans = $row["answer"];
                            if($userAns==$ans){
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
