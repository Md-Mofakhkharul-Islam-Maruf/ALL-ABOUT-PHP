<?php include 'header.php'?>
<?php echo "<hr>Type hinting:<hr><br>"; ?> 
<?php
	echo "type hinting for array: <br>";

	spl_autoload_register(function($page_name){
		include "class-folder/".$page_name.".php";	
	});
	$additionarr= array(
		array("array one",10,10),
		array("array two",20,20),
	);
	$obj_calculation= new calculation;
	$obj_calculation->getvalue($additionarr);  //We pass array within the function getvalue() with the help of calculation classes object.
	
	
	echo "<br>type hinting for object: <br><br><br>";
	
	include 'class-folder/show.php';
	include 'class-folder/php.php';
	$obj_show= new show;
	$obj_unknown= new unknown($obj_show);//We pass an object of 'show' class to 'unknown' class
?>
<?php include 'footer.php'?>  