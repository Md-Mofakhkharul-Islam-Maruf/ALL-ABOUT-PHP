<?php include 'header.php'?>
<?php
	//Delete cookie
	setcookie("cookiename", "", time() -3600);
	echo "deleted this cookie";
	
	//Set cookie
	/*if(!isset($_COOKIE['cookiename'])){
		setcookie("cookiename", "1", time()+86400, "/") or die("cookie is not set");
		echo "This is your first visited on this website";
	}else{
		echo "you have visited";
	}*/
?>
<?php include 'footer.php'?>