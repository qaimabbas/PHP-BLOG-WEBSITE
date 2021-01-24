<?php

include("../db/dbconnect.php");


if(!isset($_REQUEST['username'])) {
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	$username=$_REQUEST['username'];
}


$query="SELECT * FROM users_buffer WHERE username='$username' ";
$result=mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1) {
   while($row=mysqli_fetch_assoc($result)) {
        
        $username=$row['username'];
        $firstname=$row['firstname'];
        $password=$row['password'];
        $emailid=$row['emailid'];

        $query="INSERT INTO users (username, firstname, password, emailid  )
            VALUES ('$username','$firstname','$password','$emailid')";
        mysqli_query($conn , $query);

        
        $query="DELETE FROM users_buffer WHERE username='$username' ";
        mysqli_query($conn , $query);
   }
}

	 header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
