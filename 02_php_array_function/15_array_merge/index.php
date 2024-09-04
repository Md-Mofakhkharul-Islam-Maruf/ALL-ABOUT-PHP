<?php include 'header.php'?>
<?php
	echo "<hr>array_merge:<hr><br>";
	
	$arr= array("5","25","65","45");
	$arr2= array("5","25","65","45");
	$result=array_merge($arr,$arr2);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	$name= array(
					"Maruf"=>"33",
					"Munna"=>"11",
					"Muhit"=>"58"
					);
	$name2= array(
					"a"=>"33",
					"b"=>"11",
					"Muhit"=>"145"
					);
	
	$result2=array_merge($name,$name2);
	print"<pre>";
	print_r($result2);
	print"</pre>";
	
?>
<?php include 'footer.php'?>  