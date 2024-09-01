<?php include 'header.php'?>
<?php
	echo "<hr>Explode Implode:<hr><br>";
	
	$str= array("My","name","is","Maruf");
	echo implode(" ", $str);
	
	echo "<br><br>";
	
	$str2= "My name is Maruf";
	print_r (explode(" ", $str2));
?>
<?php include 'footer.php'?>