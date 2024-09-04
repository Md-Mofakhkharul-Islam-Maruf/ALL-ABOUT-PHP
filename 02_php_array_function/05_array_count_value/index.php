<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array("Maruf","Munna","Munna","Munna","Muhit","Muhit");
	$id= array("24","18","12","18","12","18","18","18","18");
	
	print "<pre>";
	print_r(array_count_values($name));
	print "</pre>";
	
	print "<pre>";
	print_r(array_count_values($id));
	print "</pre>";
?>
<?php include 'footer.php'?>