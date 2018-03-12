<?php
$base_url="http://hejazi.one/C7157340";

 $db['hostname']='hejazi.one.mysql';
 $db['usename']='hejazi_one';
 $db['password']='abod-123';
 $db['database']='hejazi_one';

$conn=new mysqli($db['hostname'],$db['usename'],$db['password'],$db['database']);
   
   if ($conn->connect_errno) {
       print "there was an error connecting to mysql dbs";
   }else{
       print "";
   }
?>