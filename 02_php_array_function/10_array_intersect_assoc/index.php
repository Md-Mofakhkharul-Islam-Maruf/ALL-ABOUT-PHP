<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"Maruf"=>"10",
					"Munna"=>"3",
					"Muhit"=>"9",
					);
					
	$name2= array(
					"Maruf"=>"33",
					"Munna"=>"11",
					"Muhit"=>"9"
					);
	
	$name3= array(
					"Maruf"=>"10",
					"Munna"=>"11",
					"Muhit"=>"9"
					);
	
	print "<pre>";
	print_r(array_intersect_assoc($name, $name2, $name3));
	print "</pre>";
	
	//first array k base dhore common key + value check korbe 
?>
<?php include 'footer.php'?>  