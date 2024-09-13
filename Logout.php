<?php 
	session_start();
	session_destroy();
	header("Status: 301 Moved Permanently");
	header("Location: user/Login");
	exit;
?>