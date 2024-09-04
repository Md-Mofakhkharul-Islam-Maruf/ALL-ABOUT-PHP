<?php include 'header.php'?>
<?php
	echo "<hr>array_unique:<hr><br>";
	
	$arr2= array("a"=>"10","d"=>"10","g"=>"10","b"=>"7","c"=>"3");
	$result2=array_unique($arr2);
	
	print"<pre>";
	print_r($result2);
	print"</pre>";
	
	$arr= array("maruf"=>"24","munna"=>"24","muhit"=>"12");
	$result=array_unique($arr);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	//unique value print korar jnno jate duplicate value nahoy
?>
<?php include 'footer.php'?>  