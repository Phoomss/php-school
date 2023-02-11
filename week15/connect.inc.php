<?php
  $host="sql12.freemysqlhosting.net";
  $username="sql12594121";
  $password="U9tw2KB1cZ";
  $dbname="sql12594121";

  $conn = new mysqli($host,$username,$password,$dbname);

  if(!$conn){
    echo "Error during connecting";
  }
?>