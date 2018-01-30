<?php
function connect(){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "mcq_app";
    $connection = mysqli_connect($servername,$username,$password,$database);
    
    return $connection;
}

function check_connection($connection){
    if($connection->connect_error)
        die("Connection Failed :".$connection->connect_error);
    //else
       // echo "Connected Succssfully";
}

?>