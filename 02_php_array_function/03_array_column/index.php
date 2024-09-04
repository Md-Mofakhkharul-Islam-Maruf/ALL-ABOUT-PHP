<?php include 'header.php'?>
<?php
	echo "<hr>array_change_key_case:<hr><br>";
	
	$arr = array(
				array( "id" => "24",
					   "name" => "Maruf",
					   "l_name" => "Hasan"
					),
				array( "id" => "18",
					   "name" => "Munna",
					   "l_name" => "khan"
					),
				array( "id" => "12",
					   "name" => "Muhit",
					   "l_name" => "Hossain"
					),
				);
	print"<pre>";
	print_r(array_column($arr, "l_name","name"));
	print"</pre>";
?>
<?php include 'footer.php'?>