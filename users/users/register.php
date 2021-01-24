<?php
include("../include/url_users.php");


if(isset($_SESSION['username'])) {
		header('Location:../index.php');
}

if(isset($_POST['submit'])) {

	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$emailid=$_POST['emailid'];
	$password=$_POST['password'];

	include("../db/dbconnect.php");

	
	$query="SELECT * FROM users , users_buffer WHERE username='$username' OR emailid='$emailid' ";
	$result=mysqli_query($conn , $query);
	$rows=mysqli_num_rows($result);

	if($rows > 0) {
		header("location:register.php");
	}
	else {
		$query="INSERT INTO users_buffer (username, firstname, password, emailid)
				VALUES ('$username','$firstname','$password','$emailid')";
		mysqli_query($conn , $query);
		header("location:../index.php");
	}


}


else {
	include("../include/frame_register.php");

}


?>
