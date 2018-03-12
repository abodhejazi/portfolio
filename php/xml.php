<?php 
header( "content-type: application/xml; charset=ISO-8859-15" );
require ('../config/config.php');

$query = "SELECT * FROM products"; 
$result = mysqli_query($conn, $query) or die ("Error in query: $query. ".mysql_error()); 
//Top of xml file

$_xml = '<?xml version="1.0"?>'; 
$_xml = '<?xml-stylesheet type="text/xsl" href="../php/xslt.xsl" ?>'; 

$_xml .="<pc>"; 
while($row = mysqli_fetch_array($result)) { 
$_xml .="<product>"; 
$_xml .="<productid>".$row['productid']."</productid>"; 
$_xml .="<name>".$row['name']."</name>"; 
$_xml .="<color>".$row['color']."</color>"; 
$_xml .="<modle>".$row['modle']."</modle>"; 
$_xml .="<brand>".$row['brand']."</brand>"; 
$_xml .="</product>"; 
} 
$_xml .="</pc>"; 
//Parse and create an xml object using the string
$x= new SimpleXMLElement($_xml);

//And output
print $x->saveXML();

//or we could write to a file
//$x->asXML(products.xml);

?>
