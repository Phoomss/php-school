<?php
    // 1 create connection
    include("connect.inc.php");
    // 2 query
    $name = $_POST['user_name'];
    $tel = $_POST['user_tel'];
    $emil = $_POST['user_email'];
    $password = $_POST['user_password'];
    $address = $_POST['user_address'];
    $password = md5($password);
    
    $sql = "INSERT INTO users (name, tel, email, password, address) 
    VALUES ('$name', '$tel','$emil','$password','$address');";
    $qUser = $conn->query($sql);
    if($qUser){
        header('Location: userdata.php');
    }else{
        echo "Error while inserting user data";
    }
?>