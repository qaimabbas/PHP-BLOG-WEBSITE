<?php

include("../db/dbconnect.php");


if(!isset($_REQUEST['id'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$postid=$_REQUEST['id'];
}

echo $postid;


$query="DELETE FROM posts_buffer
		WHERE postID='$postid'
		";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	echo "Something went Wrong ! please try again later";
}

?>