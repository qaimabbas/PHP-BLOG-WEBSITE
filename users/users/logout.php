<?php

include("../include/url_users.php");

session_start();
session_destroy();

printf("Successfully logged out");


header('Location: ' . $_SERVER['HTTP_REFERER']);


?>
