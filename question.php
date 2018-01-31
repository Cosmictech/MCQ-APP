<!DOCTYPE html>

                
                <?php
                    
                        
                        
                       
                        
                        function getForm(){
                            
                            include("globalvariables.php");                    
                            include("connect.php");
                            
                            include("nextquestion.php");
                            $connection = connect();
                            check_connection($connection);
                                        
                            $result = result($connection,$questionNo);
                    
                
                            if($result->num_rows > 0){
                                $row = $result->fetch_assoc();
                                $question = $row["question"];
                                $option1 = $row["option1"];
                                $option2 = $row["option2"];
                                $option3 = $row["option3"];
                                $option4 = $row["option4"];
                                $ans = $row["answer"];
                            
                                $form = "<form class=\"question-form\" action=\"question.php\" method=\"post\">
                                    <p><b>Question $questionNo:</b> $question </p><hr>
                                    <input type=\"radio\" name=\"options\" value=\"$option1\" id=\"o1\" checked><label for=\"o1\">$option1</label><br>
                                    <input type=\"radio\" name=\"options\" value=\"$option2\" id=\"o2\"><label for=\"o2\">$option2</label><br>
                                    <input type=\"radio\" name=\"options\" value=\"$option3\" id=\"o3\"><label for=\"o3\">$option3</label><br>
                                    <input type=\"radio\" name=\"options\" value=\"$option4\" id=\"o4\"><label for=\"o4\">$option4</label><br><br>
                                    <button type=\"submit\">Next</button>
                                    <a href=\"result.php\"><button type=\"button\">End Test</button></a>
                                    </form>";
                            }
                            return $form;
                        }
                        
                        
                        
                       /* if($_POST){
                            $userAns = $_POST['options'];
                            if($userAns==$ans){
                                echo "Your answer is correct";
                            }
                        else
                            echo "Your answer is wrong";
                        
                        echo "<h3>Total Marks : $count";
                        } */
                   
                   header("location: form.php"); 
                ?>
                    
                
                
 