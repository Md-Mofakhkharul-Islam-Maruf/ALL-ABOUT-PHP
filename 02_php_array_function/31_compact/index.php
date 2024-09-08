<?php include 'header.php'?>
<?php
	echo "<hr>array_compact:<hr><br>";
	
	$apple=10;
	$cat=1;
	$banana=3;
	$orange=13;
	$arr= array("apple","cat","banana","orange");
	$result=compact($arr);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	//array er key k variable hisebe print korar jnno
?>
<?php include 'footer.php'?>  