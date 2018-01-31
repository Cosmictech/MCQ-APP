<head>
    <title>Question 1</title>
<link rel="stylesheet" href="css/form.css">
</head>
    <body>
        <div class="question-page">
            <div class="form">
                <?php
                    include("question.php");    
                    echo getForm();
                    if($_POST){

                        $userAnswer = $_POST['options'];
                        if($userAnswer==$ans){

                            $questionNo++;
                            $count++;
                            echo "Your answer is correct $questionNo & $count";

                        }

                        else{
                            echo "Your answer is incorrect";
                            $questionNo++;

                         }

                    }           
?>
            </div>
        </div>
    </body>
