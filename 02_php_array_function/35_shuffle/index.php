<?php include 'header.php'?>
<?php
	echo "<hr>key,krsort,ksort:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	shuffle($arr);// jotobar run korbe totobar array er value gulo suffle korbe
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
?>
<?php include 'footer.php'?>  