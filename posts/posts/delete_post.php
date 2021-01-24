<?php

include("../db/dbconnect.php");


if(!isset($_REQUEST['postid'])) {
	header("location:post.php?id=".$id);
} else {
	$postid=$_REQUEST['postid'];
}

$query="DELETE FROM posts
		WHERE postID='$postid'
		";

$result=mysqli_query($conn , $query);


$query="DELETE FROM user_post
		WHERE postID='$postid'
		";

$result=mysqli_query($conn , $query);


$query="DELETE FROM comments
				WHERE postID='$postid'
				";

$result=mysqli_query($conn , $query);

if($result==TRUE) {
	header("location:posts.php");
} else {
	echo "Problem in deleting the Post";
}

?>
