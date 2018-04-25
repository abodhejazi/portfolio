<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>

    <div class="col-sm-8 text-left"> 
     <ul>
       <h1>Welcome Page</h1>
       <?php
  require "../config/config.php";
       //disply products
       $result= $conn->query("SELECT * FROM products");
       
       displayData($result);
       
       function displayData($result){?>
           print'<div class="table-responsive">';
        print"<table class='table table-bordered table-hover'> ";
             print '<thead class="thead-inverse">';
         print  "<tr> ";
         
         print "<td> NAME </td>";
         print "<td>  BRAND </td>";
         print "<td>  COLOR </td>";
         print "<td>  MODLE </td>";
         print "<td >  IMAGE </td>";
         print "<td >  Update or Delete </td>";
         print  "</tr> ";
          print "</thead>";
          <?php
        while($row=$result->fetch_assoc()){
         
         $_SESSION['PID']=$row['productid'];
    ?>
       <tbody>
        <tr> 
       
         <td height="100px" max-width="100px"><?php  $row['name'] ?> </td>
         <td height='100px' max-width='100px'><?php $row['brand'] ?></td>
        <td height='100px' max-width='100px'><?php  $row['color'] ?></td>
        <td height='100px' max-width='100px'><?php $row['modle'] ?></td>
         <td width='0%'><img src="../assets/img/"<?php $row['img'] ?>height='100px' max-width='100px'>   </td>
  
         <tr> 
         </tbody>
<?php}?>
      </table>
      </div>
       
       <?php}>
        
  
    
     </ul>
     <?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";
        
        ?>
        
     </div>
 
 <?php require ('../includes/rightnav.php');?>
<?php require ('../includes/footer.php');?>

