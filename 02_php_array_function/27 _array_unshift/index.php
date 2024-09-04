<?php include 'header.php'?>
<?php
	echo "<hr>array_unshift:<hr><br>";
	
	$arr2= array("a"=>"10","d"=>"10","g"=>"10","b"=>"7","c"=>"3");
	$result2=array_unshift($arr2,"100");
	
	print"<pre>";
	print_r($arr2);
	print"</pre>";
	//first index a value add korar jnno r tokhon ager 1st index er ta second index a chole jabe
?>
<?php include 'footer.php'?>  