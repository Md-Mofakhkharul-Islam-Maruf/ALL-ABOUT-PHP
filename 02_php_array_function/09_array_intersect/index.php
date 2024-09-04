<?php include 'header.php'?>
<?php
	echo "<hr>array_intersect:<hr><br>";
	
	$name= array(
					"Maruf"=>"10",
					"Munna"=>"3",
					"Muhi"=>"9",
					);
					
	$name2= array(
					"Maruf"=>"33",
					"Munna"=>"11",
					"Mit"=>"9"
					);
	
	$name3= array(
					"Maruf"=>"10",
					"Munna"=>"11",
					"it"=>"9"
					);
	
	print "<pre>";
	print_r(array_intersect($name, $name2, $name3));
	print "</pre>";
	
	//first array k base dhore common value ta check korbe o show korbe
?>
<?php include 'footer.php'?>  