<?php  require "../config/config.php";
if(!empty($_GET['q'])){
$q=$_GET['q'];    
$query = "SELECT * FROM users WHERE username LIKE '%$q%' ";
$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));

while($output=mysqli_fetch_assoc($result)){
    
    echo'<a>'.$output['username'].'</a><br/>';
    
}
}

?>

