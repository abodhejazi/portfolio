<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>

 
      <div class="container">
    <div class="col-sm-8 well">
      <h1 class="well">uplod file</h1>
	 
     	<div class="row">
				<form method="POST" action="oop-uplod-img.php" enctype="multipart/form-data">
    					<div class="form-group">
    						<label for="file">file:<input type="file" name="file" id="file" class="form-control"></label>
    						<input type="submit" value="Uplod" class="btn btn-lg btn-info"></button>	
    					</div>	  
				  	 			<?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";?>
					</div>
				</form> 
				</div>
				</div>
 
		
		
     <?php require ('../includes/footer.php');?>