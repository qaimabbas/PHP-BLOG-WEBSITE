<?php

include("../include/url_posts.php");



if(!isset($_SESSION['username']))
{
	header("location:../users/login.php");
}

if(isset($_POST['submit'])) {

	$postTitle=$_POST['postTitle'];
	$postDesc=$_POST['postDesc'];
	$postTag=$_POST['postTag'];
	$postAuthor=$_SESSION['username'];

	include("../db/dbconnect.php");

	
	$query="INSERT INTO posts_buffer (postTitle , postDesc , postTag , postAuthor)
			VALUES ('$postTitle' , '$postDesc' , '$postTag' , '$postAuthor') ";
	mysqli_query($conn , $query);

	printf("Successfully posted your post\n");
	header("location:posts.php");

}


else {
	

	include("../include/frame_newpost.php");

}


?>
