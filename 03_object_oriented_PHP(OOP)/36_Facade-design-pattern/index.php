<?php include 'header.php'?>
<?php echo "<hr>Observer design pattern:<hr><br>"; ?> 
<?php

   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
	$fa= new Facade();
	$fa-> findApartments("Jatrabari, Dhaka","mapdiv");
?>
<?php include 'footer.php'?>  