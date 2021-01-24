<?php

include("../include/url_users.php");


if(!isset($_SESSION['username']))
{
	header("location:login.php");
}

if(isset($_POST['submit'])) {

	$postTitle=$_POST['title'];
	$postDesc=$_POST['description'];
	$postTag=$_POST['tag'];
	$postAuthor=$_SESSION['username'];

	include("../db/dbconnect.php");

	
	$query="INSERT INTO posts (postTitle , postDesc , postTag , postAuthor)
			VALUES ('$postTitle' , '$postDesc' , '$postTag' , '$postAuthor') ";
	mysqli_query($conn , $query);

	printf("Successfully posted your post\n");
}


else {
	echo "
		<form action='newpost.php' method='POST' >
			Title : <input type='text' name='title'></br>
			Description : <input type='text' name='description'></br>
			Tags : <input type='text' name='tag'></br>
			<input type='submit' name='submit' value='Publish'></br>
		</form>
	";
}


?>