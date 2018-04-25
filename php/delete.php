<?php require "../config/config.php";


if(isset($_GET['delete']) && $_GET['delete']=="true" && $_GET['productid']!="")
 {
$query="delete from products where productid=".$_GET['productid'];
$result= mysqli_query($conn,$query);
  
  header("Location:index.php");
 }
 ?>