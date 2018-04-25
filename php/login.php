<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
<?php
	// Check if we have already created a authenticated session
	if (isset($_SESSION["authuser"])) {
		$_SESSION["message"] = "You are already logged in as ". $_SESSION['authuser'];
		
	}
?>



     
    
    	<?php if (isset($_SESSION["authuser"])) { ?>
		<form method="post" action="loginaction.php">
			<input type="hidden" name="signout" value="True" >
			<input name="submit" type="submit" value="Log Out">
		</form>
		<?php } else { ?>

      <div class="container">
	  <div class="col-sm-10 well">
	      <h1 class="well">Login</h1>
     	<div class="row">
				<form method="POST" action="loginaction.php">
					<div class="col-sm-12">
    					<div class="form-group">
    						<label>password</label>
    						<input type="text" name="username" class="form-control">
    					</div>	  
						    <div class="form-group">
								<label>password</label>
								<input type="password" name="password"class="form-control">
							</div>
					<button  type="submit" name="login"class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
				<?php } ?>
					<?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";
	                 unset($_SESSION['message']);?>
	</div>
	</div>

<?php require ('../includes/footer.php');?>



