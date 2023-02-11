<?php
    include("../connect.inc.php");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];

    $sql = "insert into employee (firstname, lastname, salary) values ('$firstname', '$lastname', '$salary')";
    $qEmp = $conn->query($sql);

    $result = array();
    if($qEmp){
        $lastid = $conn->insert_id;
        $result['insert_id'] = $lastid;
        $result['msg']="Insert Complete";
    }else{
        $result['msg']="Error during inserting";
    }

    echo json_encode($result);
?>