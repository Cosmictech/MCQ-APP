<?php

    
    function result(){
        include("connect.php");
        $query = "SELECT * FROM test1 WHERE id=$questionNo";
        $connection = connect();                
        $result = mysqli_query($connection,$query);
        return $result;
    }

?>