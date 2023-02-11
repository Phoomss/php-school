
<?php   
    //รับข้อมูล id มาจากหน้า car.php
    include("../connect.inc.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM car WHERE id = $id";
    $qCar = $conn->query($sql);

    $car = $qCar->fetch_object();

    // ได้ข้อมูลแล้วให้จัดรูปแบบเป็น json แล้วส่งคืน
    echo json_encode($car);
?>
