<?php include 'header.php'?>
<?php echo "<hr>Magic method:<hr><br>"; ?> 
<?php
	class info{
		
		public function __get($take_value){  //__get magic method that take undefine property/value through object of this class.
			echo "Your name is $take_value<br>";
		}
		
		public function __set($a, $b){  //__set magic method that take undefine property and value through object of this class.
			echo "$a's hometown is $b<br>";
		}
		
		public function __call($method, $value){  //__call magic method that take undefine method and its argument through object of this class.
			echo "Take the method: $method and its argument like: ".implode(",", $value); 
		}
	}
	// $obj_info->age="15" this line is for understand things only, that we used for passing as a propertys value in conventional way. but next line is for magic passs.
	$obj_info= new info();
	$obj_info->Hasan;  // Passing value that taken by __ get magic method.
	
	$obj_info->Mehedi="Lalmonirhat.";// Passing property and value that taken by __set magic method.
	
	$obj_info->strange_method(2,5,9);  // Passing method and argument that taken by __call magic method.
	
?>
<?php include 'footer.php'?>  