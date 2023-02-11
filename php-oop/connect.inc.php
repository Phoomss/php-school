<?php
    $host="localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    //(1) creat connection
    //mysqli_connect()
    $conn = new mysqli($host, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed ". $conn->connect_error);
    }else{
        echo "Success";
    }
?>