<?php include 'header.php'?>
<?php echo "<hr>Strategy pattern:<hr><br>"; ?> 
<?php

   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
   $database = new database();
   $database->setdriver("mysql");
   $database->connect("host","user","db","pass");
   
?>
<?php include 'footer.php'?>  