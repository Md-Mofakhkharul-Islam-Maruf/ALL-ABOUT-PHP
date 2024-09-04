<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"Maruf"=>"33",
					"Munna"=>"11",
					"Muhit"=>"9"
					);
	print"<pre>";
	print_r(array_keys($name));
	print"</pre>";
	
	//Another way
	print"<pre>";
	print_r(array_keys($name, "9"));
	print"</pre>";
	
?>
<?php include 'footer.php'?>  