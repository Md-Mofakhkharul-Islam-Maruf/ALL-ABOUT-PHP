<?php include 'header.php'?>
<?php echo "<hr>Strategy pattern:<hr><br>"; ?> 
<?php
   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
		
   $obj_user = new user;
   $msg =$obj_user->getmsg();
   
   switch($msg){
	   case 'email':
			$objectmsg= new sendemail(); //if case is email then this line create an object of sendemail class.
			break;
	   case 'sms':
			$objectmsg= new sendsms();//if case is sms then this line create an object of sendsms class.
			break;
	   case 'fax':
			$objectmsg= new sendfax();//if case is fax then this line create an object of sendfax class.
			break;
   }
   $objectmsg->notification();  // this line access notification() function throut classes object.
?>
<?php include 'footer.php'?>  