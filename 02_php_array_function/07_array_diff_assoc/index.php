<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"a"=>"11",
					"b"=>"3",
					"c"=>"10",
					"d"=>"66"
					);
	
	$name2= array(
					"a"=>"12",
					"b"=>"3",
					"c"=>"100",
					"l"=>"99");
	
	$name3= array(
					"g"=>"10",
					"h"=>"11",
					"i"=>"9",
					"j"=>"60");
	
	print "<pre>";
	print_r(array_diff_assoc($name, $name2, $name3));
	print "</pre>";
	
	//first array k base dhore unique key + value ta check korbe
?>
<?php include 'footer.php'?>  