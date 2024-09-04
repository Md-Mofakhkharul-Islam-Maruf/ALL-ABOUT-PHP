<?php include 'header.php'?>
<?php
	echo "<hr>array_shift:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	array_shift($arr);
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
	
	$arr2= array(
					"a"=>"pinaple",
					"b"=>"kiam",
					"c"=>"mango"
					);
	array_shift($arr);
	
	print"<pre>";
	print_r($arr2);
	print"</pre>";
	
	$arr3= array(
					"0"=>"pinaple",
					"1"=>"kiam",
					"2"=>"mango"
					);
	array_shift($arr3);
	
	print"<pre>";
	print_r($arr3);
	print"</pre>";
?>
<?php include 'footer.php'?>  