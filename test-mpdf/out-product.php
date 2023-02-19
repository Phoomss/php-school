<?php
  require_once("vendor/autoload.php");
  include("connect.inc.php");
  $category = $_POST['category'];
  $reorder_level = $_POST['reorder'];
  $date = date("d-m-Y h:i:sa");

  
  $sql = "SELECT * FROM products 
  WHERE category='$category' 
  AND unit_in_stock < $reorder_level";
  // echo $sql;
  $qCate = $conn->query($sql);

  $output_head = "
    <link rel='stylesheet' href='pdf.css'>
    <h1 d >Product at low-level stock ($category) </h1>
    <h2>Level : $reorder_level </h1>
    <hr>
    <table>
    <thead>
        <tr>
            <td >ID</td>
            <td >Category</td>
            <td >Name</td>
            <td >Price</td>
            <td >Unit In Stock</td>
        </tr>
    </thead>
    <tbody>
  ";
  $output_body="";
  while($row=$qCate->fetch_object()){
    $output_body .= "
      <tr>
        <td >$row->ID</td>
        <td>$row->category</td>
        <td>$row->name</td>
        <td>$row->price</td>
        <td>$row->unit_in_stock</td>
      </tr>
      <tr>Total Product: </tr>
    ";
  }
  $output_tail = "</tbody></table>
  <p>Report by : 3530901004 Narongsak P.</p>
  <p>Date: $date</p>";
  
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML($output_head);
  $mpdf->WriteHTML($output_body);
  $mpdf->WriteHTML($output_tail);
  $mpdf->output();
?>