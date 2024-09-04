<?php include 'header.php'?>
<?php
	echo "<hr>array_sum:<hr><br>";
	
	$arr2= array("a"=>"10","b"=>"7","c"=>"3");
	$result2=array_sum($arr2,);
	
	print"<pre>";
	print_r($result2);
	print"</pre>";
	
	$arr= array("4","5","3","11");
	$result=array_sum($arr);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	//sum korar jonno
?>
<?php include 'footer.php'?>  