<?php
    //index.php?name=valu tel=0000 ==> Query String
    // var_dump($_GET);
    // echo isset($_GET['name'])?"ture":"false";
    
    if (isset($_GET['name']))
        $name = $_GET['name'];
    else $name="";

    $tel = isset($_GET['tel']) ? $_GET['tel'] :"";
    $age = isset($_GET['age']) ? $_GET['age'] :-1;

    if($age>=18)
        echo"hello";
    else echo"no way";    
    echo "Name: $name<br>Tel:$tel";
    
    // $name = $_GET['name'];
    // $tel = $_GET ['tel'];
    // echo "Name : $name<br>Tel : $tel";
?>