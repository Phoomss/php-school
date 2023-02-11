<?php
    include("connect.inc.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    $qUser = $conn->query($sql);
    if($qUser){
        header('Location: userdata.php');
    }else{
        echo "Error while deleting user data";
    }
?>