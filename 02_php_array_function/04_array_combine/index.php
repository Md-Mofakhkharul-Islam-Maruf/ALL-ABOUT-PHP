<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array("Maruf","Munna","Muhit");
	$id= array("24","18","12");
	
	print "<pre>";
	print_r(array_combine($name, $id));
	print "</pre>";
?>
<?php include 'footer.php'?>