<?php 
	session_start();
	$uid=$_SESSION['uid'];
	$name=$_SESSION['name'];
	if(!(isset($uid)))
	{
		header('location:login_form.php');
	}


?>