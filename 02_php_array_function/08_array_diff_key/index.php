<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"Maruf"=>"10",
					"Munna"=>"3",
					"Muhit"=>"9",
					"Kamal"=>"66"
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
	print_r(array_diff_key($name, $name2, $name3));
	print "</pre>";
	
	//first array k base dhore unique key ta check korbe + value check korbe na!
?>
<?php include 'footer.php'?>  