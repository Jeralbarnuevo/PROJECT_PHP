<?php
    $server="localhost";
    $username="root";
    $pass="";
    $database="violation";

    $conn=new mysqli($server,$username,$pass,$database);
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }
?>