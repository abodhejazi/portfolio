<?php require ('../includes/header.php');?>
<?php
// including the database connection file
require "../config/config.php"; 

//getting id from url
if(isset($_GET['productid'])&& $_GET['productid']!==""){
$id =($_GET['productid']);
 
//selecting data associated with this particular id
$query =("SELECT * FROM products WHERE productid=$id");
$result = mysqli_query( $conn,$query) or die('oops something went wrong!; ' . mysqli_error($conn));
 
foreach ($result as $res) {
    $name = $res['name'];
    $brand = $res['brand'];
    $color = $res['color'];
    $modle = $res['modle'];
}}else{
    echo "oops something went wrong";
}

 
 
if(isset($_POST['update']))
{    
    $id = $_GET['productid'];
    
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $color=$_POST['color'];
    $modle= $_POST['modle'];
    
   $query =("UPDATE products SET name='$name',brand='$brand',color='$color',modle='$modle' WHERE productid=$id");
   $result = mysqli_query( $conn,$query) or die('oops something went wrong!; ' . mysqli_error($conn));

        
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
?>
     <div class="container">
    <h1 class="well">Update products</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form  method="post" action="">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" value="<?php echo $name;?>">
						</div>
    						<div class="form-group">
    							<label>brand</label>
    							<input type="text" name="brand" value="<?php echo $brand;?>">
    						</div>
    					<div class="form-group">
    						<label>color</label>
    						<input type="text" name="color" value="<?php echo $color;?>">
    					</div>	  
						    <div class="form-group">
								<label>modle</label>
								<input type="text" name="modle" value="<?php echo $modle;?>">
							</div>
					<button  type="update" name="update"class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
				
	</div>
	</div>

<?php require ('../includes/footer.php');?>

