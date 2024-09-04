<?php include 'header.php'?>
<?php
	echo "<hr>array_change_key_case:<hr><br>";
	
	$name= Array( "Maruf" => "24",
				   "Munna" => "18",
				   "Muhit" => "12"
					);
	print "<pre>";
	print_r(array_change_key_case($name, CASE_LOWER));
	print "</pre>";
	
	print "<pre>";
	print_r(array_change_key_case($name, CASE_UPPER));
	print "</pre>";
	//nice
?>
<?php include 'footer.php'?>