<?php
    require_once("vendor/autoload.php");
    include("connect.inc.php");

    $sql = "SELECT * FROM employee";
    $qEmp = $conn->query($sql);
   
    $output_head = "
    <link rel='stylesheet' href='pdf.css'>
    <img src='images/1.png'>
    <table >
        <tr >
            <td >empcode</td> <td>firstname</td> <td>lastname</td> <td>salary</td> <td>workyear</td>
        </tr>
    ";
    $output_tail="</table>";
    $output_body="";
    while($row=$qEmp->fetch_object()){
        $output_body .="
        <tr>
            <td>$row->empcode</td> 
            <td>$row->firstname</td> 
            <td>$row->lastname</td>
            <td>$row->salary</td>
            <td>$row->workyear</td>
        </tr>
        ";
    }
    $mpdf = new \Mpdf\Mpdf();//แนวนอน
    $mpdf->WriteHTML($output_head);
    $mpdf->WriteHTML($output_body);
    $mpdf->WriteHTML($output_tail);
    $mpdf->output();
?>