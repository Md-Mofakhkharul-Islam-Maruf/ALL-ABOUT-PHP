<?php 
session_start();
include 'header.php'
?>
<?php
	echo "<hr>Sessions:<hr><br>";
	
	$_SESSION['user']= 'Maruf';
	$_SESSION['password']= '123456';
	
	echo "User name is ".$_SESSION['user']."<br>";
	//session_unset();
	echo "Password is ".$_SESSION['password'];
	session_unset();
	
	
?>
<?php include 'footer.php'?>