
<?php   
    //รับข้อมูล id มาจากหน้า index.php
    include("../connect.inc.php");
    $empcode = $_POST['empcode'];
    $sql = "SELECT * FROM employee WHERE  empcode = '$empcode'";
    $qEmp = $conn->query($sql);

    $emp = $qEmp->fetch_object();

    // ได้ข้อมูลแล้วให้จัดรูปแบบเป็น json แล้วส่งคืน
    echo json_encode($emp);
?>