<?php
  $host = "it-nvc.cf1jmac6bmlg.ap-southeast-1.rds.amazonaws.com";
  $user = "admin";
  $password = "adminadmin";
  $dbname = "store";

  $conn = new mysqli($host, $user, $password, $dbname);

  if(!$conn){
    echo "Error during connecting";
  }
?>
