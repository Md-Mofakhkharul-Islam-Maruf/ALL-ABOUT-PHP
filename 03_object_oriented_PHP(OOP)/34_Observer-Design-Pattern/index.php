<?php include 'header.php'?>
<?php echo "<hr>Observer design pattern:<hr><br>"; ?> 
<?php

   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
	$obj= new Observable();
	$sk= new skype();
	$gk= new gtalk();
	$stdcls = new stdclass();
	
	$obj->register($sk);
	$obj->register($gk);
	$obj->register($stdcls);
	$obj->statechange();
?>
<?php include 'footer.php'?>  