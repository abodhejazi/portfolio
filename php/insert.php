<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>



 <div class="container">
	<div class="col-sm-10 well">
	    <h1 class="well">insert  product</h1>
	<div class="row">
  <form action="insertproduct.php" method="POST" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required="required">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Brand</label>
    <input type="text" class="form-control" name="brand" placeholder="Enter Product Brand" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Color</label>
    <input type="text" class="form-control" name="color" placeholder="Enter Product Color" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Modle</label>
    <input type="text" class="form-control" name="modle" placeholder="Enter Product Modle" required="required">
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Product Pic</label>
    <input type="file" class="form-control" name="pro_image" placeholder="Enter Product Picture"  accept="image/*">
  </div>
  
    <button type="submit" class="btn btn-primary" name="submit" vlaue="submit">Submit</button>	
    </form> 
	</div>
	 <?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";
        unset($_SESSION['message']);
         echo "<h3><font color=black>".$_SESSION['err_message']."</font></h3>";
        unset($_SESSION['err_message']);
        ?>
     	</div>
     		</div>
     
  
<?php require ('../includes/footer.php');?>