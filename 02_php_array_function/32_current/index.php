<?php include 'header.php'?>
<?php
	echo "<hr>current next previous end:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
	
	echo current($arr)."<br>";
	echo next($arr)."<br>";
	echo next($arr)."<br>";
	echo end($arr)."<br>";
	echo prev($arr)."<br>";
	//array er value dhore print hobe
?>
<?php include 'footer.php'?>  