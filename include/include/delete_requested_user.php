<?php

include("../db/dbconnect.php");


if(!isset($_REQUEST['username'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$username=$_REQUEST['username'];
}



$query="DELETE FROM users_buffer
		WHERE username='$username'
		";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	echo "Something went Wrong ! please try again later";
}

?>
