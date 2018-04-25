<?php require "../config/config.php";
session_start();
	 
if (isset($_POST["signout"])) {
		session_destroy();
		session_start();
		$_SESSION["message"] = "You are now logged out";
		header("Location: login.php");//Go back to the login pages
	}else{
	 
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	
     if (empty($username) or empty($password)) {
			$_SESSION["message"] = "Must enter Username and Password";
			header("Location: login.php");	//Redirection information
			exit ;//Ends the script
		}
		$usename = strip_tags($username);
		$password = strip_tags($password);
	    $pass=md5($password);

	
	$query="SELECT * FROM users WHERE (username='$username' or email='$username'and password='$pass')";
    $result=mysqli_query($conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));


       if($row=(mysqli_fetch_assoc($result)))
       
       {    //loged in without problem
       	$_SESSION['authuser']= $row['username'];
       	$_SESSION['type']= $row['type'];
       	$_SESSION['authuserid']= $row['userid'];

       	if($_SESSION['type']==0){header("location:index.php");}
       	if($_SESSION['type']==1){header("location:admin.php");}

           
          
       }



		else{
		    session_destroy();
		    session_start();
			$_SESSION['message']="CLOUD NOT LOG IN AS $username";
			header("location: login.php");
			exit();
		}
	

	

	}
?>





