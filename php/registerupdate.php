<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
<?php  require "../config/config.php";
//getting id from url
if(isset($_GET['userid'])&& $_GET['userid']!==""){
$id =($_GET['userid']);
 
//selecting data associated with this particular id
$query =("SELECT * FROM users WHERE userid=$id");
$result = mysqli_query( $conn,$query) or die('oops something went wrong!; ' . mysqli_error($conn));
 
foreach ($result as $res) {
    $username = $res['username'];
    $password= $res['password'];
    $email = $res['email'];
}}else{}

 
 
if(isset($_POST['update']))
{    
    $id = $_GET['userid'];
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

   $query =("UPDATE users SET username='$username',password='$password',email='$email' WHERE userid=$id");
   $result = mysqli_query( $conn,$query) or die('oops something went wrong!; ' . mysqli_error($conn));

        
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: admin.php");
    }
       ?>
       
  
    
    <form  method="post" action="">
<div class="container">
    <div class="col-sm-10 well">
	    <h1 class="well">Update  User</h1>
<table class="table table-inverse">
    <thead>
      <tr class="table-danger">
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <td><input type="text" name="username" value="<?php echo $username;?>"></td>
    <td><input type="text" name="password" value="<?php echo $password;?>"></td>
    <td><input type="text" name="email" value="<?php echo $email;?>"></td>
    
     
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
        
      </tr>
    </tbody>
  </table>
     
</div>
</div>
    </form>
<?php require ('../includes/footer.php');?>