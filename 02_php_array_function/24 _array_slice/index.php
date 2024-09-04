<?php include 'header.php'?>
<?php
	echo "<hr>array_merge:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	$result=array_slice($arr,1);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	$arr2= array("apple","cat","banana","orange");
	$result2=array_slice($arr2,1,2);
	
	print"<pre>";
	print_r($result2);
	print"</pre>";
	
	$arr3= array("apple","cat","banana","orange");
	$result3=array_slice($arr3,-2,2);
	
	print"<pre>";
	print_r($result3);
	print"</pre>";
	//mon moto index theke jekono index porjonto print kora jay
?>
<?php include 'footer.php'?>  