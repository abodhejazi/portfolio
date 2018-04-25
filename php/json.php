<?php 
include "../config/config.php";
  global $conn;
  $sql = "select * from products"; //replace with your table name 


$result = mysqli_query($conn,$sql) or die;
  $jsondata = array();
  while($row=mysqli_fetch_row($result)){
  $jsondata[]=$row;
  }
  echo json_encode($jsondata);


?>