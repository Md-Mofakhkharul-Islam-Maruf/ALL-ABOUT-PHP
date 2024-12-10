<?php include 'header.php'?>
<?php echo "<hr>Connect Database:<hr><br>"; ?> 
<?php
	$db = new mysqli("localhost","root","","db-oop");
	if(mysqli_connect_errno()){
		echo "not connected";
	} else{
		echo "Successfully connected Masahallah";
	}
?>
<?php include 'footer.php'?>  