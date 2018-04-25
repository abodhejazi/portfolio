<?php
	session_start();
  require "../config/config.php";
	// Get the data collected from the user

/*This function is used to create a legal SQL string that you can use in an SQL statement*/

if(isset($_POST['username'],$_POST['password'],$_POST['email'])){
	$username = mysqli_real_escape_string($conn,trim($_POST['username']));
	$email = mysqli_real_escape_string($conn,trim($_POST['email']));
	$password= mysqli_real_escape_string($conn,trim($_POST['password']));



	//Server side validation
	if (empty($username) or empty($password)) {
		$_SESSION["message"] = "Must enter Username and Password ";
		header("Location: register.php");	//Return to register page if empty
		exit ;//End
	}

	
	if (empty($username) or empty($password) or empty($email) ) {
		$_SESSION["message"] = "All fields on this page are required";
		header("Location: register.php");	//Return to register page if empty
		exit ;//End
	}

	$query = "SELECT * FROM users WHERE username = '$username' ";
	$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));

	//See if any rows were returned to check that the username chosen does not exist for another user.
	if ($row = mysqli_fetch_assoc($result)) {
		//Then we have a successful login
	  	//Create a session variable to store the user name.
		$_SESSION["message"] = " '$username' already exists. Please choose a different username";
		header("Location: register.php");	//Redirection information
		exit ;//Ends the script
	}
	


	$query = "SELECT * FROM users WHERE email = '$email' ";
	$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));
		//See if any rows were returned to check that the username chosen does not exist for another user.
	if ($row = mysqli_fetch_assoc($result)) {
		//Then we have a successful login
		//Create a session variable to store the email.
		$_SESSION["message"] = " '$email' already exists. Please choose a different email";
		header("Location: register.php");	//Return to register page
		exit ;//End
	}

	//Encrypt the password using MD5 encryption and store it in the database. This password will not be reversible.
	$password = md5($password);
	$type=0;
	$query = "INSERT INTO users( username,password,email,type) VALUES('$username', '$password' , '$email','$type')";
    $result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));
if($result){
    
    $_SESSION["message"]="user created sucssesfully";
    header("location:login.php");
    exit;
}

}
?>




