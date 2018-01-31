<?php
include("question.php");
include("globalvariables.php");
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