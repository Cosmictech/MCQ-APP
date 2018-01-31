<?php

    
    function result($connection,$questionNo){
        $query = "SELECT * FROM test1 WHERE id=$questionNo";
        $result = mysqli_query($connection,$query);
        return $result;
    }

?>