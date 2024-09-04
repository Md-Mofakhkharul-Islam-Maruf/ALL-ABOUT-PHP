<?php include 'header.php'?>
<?php
	echo "<hr>array_values:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	$result=array_values($arr);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	//array er value print korar jnno
?>
<?php include 'footer.php'?>  