<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"Maruf"=>"10",
					"Munna"=>"3",
					"Mu"=>"9",
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
	print_r(array_intersect_key($name, $name2, $name3));
	print "</pre>";
	
	//first array k base dhore common key
?>
<?php include 'footer.php'?>  