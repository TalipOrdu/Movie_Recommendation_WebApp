<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $conn = mysqli_connect($host,$username,$password,$database);
    mysqli_set_charset($conn, "UTF8");
    
    if($conn){
        echo "";
    }else{
        echo "connection failed";
    }
?>