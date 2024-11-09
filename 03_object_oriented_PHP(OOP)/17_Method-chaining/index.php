<?php include 'header.php'?>
<?php echo "<hr>Method chaining:<hr><br>"; ?> 
<?php
	spl_autoload_register(function($page_name){
		include "class-folder/".$page_name.".php";	
	});
	$obj_calculation= new calculation;
	
	echo $obj_calculation->getvalue(3,6)->calculate();// method chaining means aktar por akta method call kora. method chaining a obossoi return korte hobe j j method access korte cai.
?>
<?php include 'footer.php'?>  