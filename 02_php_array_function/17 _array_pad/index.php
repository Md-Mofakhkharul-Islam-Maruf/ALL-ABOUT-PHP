<?php include 'header.php'?>
<?php
	echo "<hr>array_pad:<hr><br>";
	
	
	$name= array("Maruf","Munna","Muhit");
	print"<pre>";
	print_r(array_pad($name,5,"ammu"));
	print"</pre>";
	
?>
<?php include 'footer.php'?>  