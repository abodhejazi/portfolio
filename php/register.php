<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>



<script>
  function validateForm() {
    var x = document.forms["regform"]["username"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
  
  
</script>

 <div class="container">
	<div class="col-sm-10 well">
	    <h1 class="well">Registration</h1>
	<div class="row">
				<form action='registeraction.php' method='post'>
					<div class="col-sm-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="username" class="form-control" required>
						</div>
    						<div class="form-group">
    							<label>Email</label>
    							<input type="Email" name="email"    class="form-control" required>
    						</div>
    					<div class="form-group">
    						<label>password</label>
    						<input type="password" name="password" class="form-control" required >
    					</div>	  
						    <div class="form-group">
								<label>password2</label>
								<input type="password" name="password2"class="form-control" required>
							</div>
					<button  type="submit" name="Submit"class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
				
	</div>
		<?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";
	      unset($_SESSION['message']);
        ?>
	</div>

<?php require ('../includes/footer.php');?>

