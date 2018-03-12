<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
    <div class="col-sm-8 text-left"> 
       <h1>Welcome Page</h1>

       <?php
  require "../config/config.php";
       //disply products
   	$query = "SELECT * FROM products ORDER BY productid DESC";
	$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));
     ?>
     
     <div class="card-group"> 
      <?php
        while($row=mysqli_fetch_assoc($result)){
        ?>
       
 <div class="col-sm-4 col-md-4 text-left">
  <div class="card">
      <div class="stylebo">
    <img class="card-img-top" src="../assets/img/<?php echo $row['img']; ?>"  alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">products detale</h4>
      <p class="card-text"><?php echo "name:  ". $row['name'] ;?></p>
      <p class="card-text"><?php echo "brand:  ". $row['brand'] ;?></p>
      <p class="card-text"><?php echo "color:  ". $row['color'] ;?></p>
      <p class="card-text"><?php echo "modle:  ". $row['modle'] ;?></p>
      </div>
    </div>

    
    <?php	if(isset($_SESSION['type']) && $_SESSION['type']==1 ){?> 
    <span>
    <a class="btn btn-info" href="update.php?productid=<?php echo $row['productid']?>" title="click for edit"
    onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
    
    <a class="btn btn-danger" href="delete.php?productid=<?php echo $row['productid']."&delete=true"; ?>" title="click for delete" 
    onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
    </span>
    <?php
}
?>
    </div>
     </div>

  

     <?php
   }
   
  ?>
 </div>
   <?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";?>
     </div>
    
  
<?php require ('../includes/rightnav.php');?>
<?php require ('../includes/footer.php');?>
