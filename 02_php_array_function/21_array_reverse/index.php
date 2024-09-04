<?php include 'header.php'?>
<?php
	echo "<hr>array_reverse:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
	
	print"<pre>";
	print_r(array_reverse($arr));
	print"</pre>";
	
	$arrn= array("a"=>"apple","b"=>"cat","c"=>"banana");
	
	print"<pre>";
	print_r($arrn);
	print"</pre>";
	
	print"<pre>";
	print_r(array_reverse($arrn));
	print"</pre>";
?>
?>
<?php include 'footer.php'?>  