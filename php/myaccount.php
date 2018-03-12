<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
<?php session_start();
 require "../config/config.php"; 
if(isset($_SESSION['authuserid']) && $_SESSION['authuserid']!="" ){
$authuid=$_SESSION['authuserid'];

$query = "SELECT * FROM users where userid=$authuid";
$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));
            
   foreach ($result as $res) {
    $username = $res['username'];
    $password = $res['password'];
    $email = $res['email'];



     
if(isset($_POST['update']))
{    
    $userid=$_SESSION['authuserid'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

   $query ="UPDATE users SET username='$username',password='$password',email='$email' WHERE userid=$userid";
   $result = mysqli_query($conn,$query) or die('oops something went wrong!; ' . mysqli_error($conn));

        
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
               
}}

?>



<form  method="post" action="">
<div class="container">
    <div class="col-sm-10 well">
        <h1 class="well">Update my information</h1>
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
         </form>

</div>
</div>

   <?php require ('../includes/footer.php');?>
    