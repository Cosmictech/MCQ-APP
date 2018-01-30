<?php
function getForm($questionNo,$question,$option1,$option2,$option3,$option4){
    $form = "<p><b>Question $questionNo:</b> $question </p><hr>
            <input type=\"radio\" name=\"options\" value=\"$option1\" id=\"o1\" checked><label for=\"o1\">$option1</label><br>
            <input type=\"radio\" name=\"options\" value=\"$option2\" id=\"o2\"><label for=\"o2\">$option2</label><br>
            <input type=\"radio\" name=\"options\" value=\"$option3\" id=\"o3\"><label for=\"o3\">$option3</label><br>
            <input type=\"radio\" name=\"options\" value=\"$option4\" id=\"o4\"><label for=\"o4\">$option4</label><br><br>
            <button type=\"submit\">Next</button>
            <a href=\"result.php\"><button type=\"button\">End Test</button></a>";
    return $form;
?>