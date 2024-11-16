<?php include 'header.php'?>
<?php echo "<hr>Strategy pattern:<hr><br>"; ?> 
<?php

   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
	
	
   
   
?>
<?php include 'footer.php'?>  