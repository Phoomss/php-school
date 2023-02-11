<?php
    // step1
    include('connect.inc.php');
    session_start();
    
    // step2
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $encryp = md5($pass);
    
    // step3
    $sql  = "SELECT * FROM users WHERE name='$uname' AND password='$encryp'";
    // step4
    $quser = $conn->query($sql);
    if ($quser){
        $result = $quser->fetch_object();
        $_SESSION['user'] = $result->name;
        header('location: userdata.php');
    }else{
        header('location: login.php');
    }
?>