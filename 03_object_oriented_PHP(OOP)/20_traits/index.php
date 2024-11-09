<?php include 'header.php'?>
<?php echo "<hr>Traits:<hr><br>"; ?> 
<?php
	trait php{ //trait means ready method that used within any class from anywhere by classes object. trait function override facilate kore look from line 30.
		public function phpcoder(){
			echo "I love php <br>";
		}
	}
	trait java{
		public function javacoder(){
			echo "I love java <br><br>";
		}
	}
	class cl1{
		use php,java;
	};
	
	$obj_cl1= new cl1;
	$obj_cl1->phpcoder();
	$obj_cl1->javacoder();
	
	
	class cl2{
		use php;
	};
	$obj_cl2= new cl2;
	$obj_cl2->phpcoder();
	
	
	trait override{
		public function overrd(){
			echo "This is override.<br>";	// Ei function kaj korbe na nicer class er functiion diye override hobe eta trait er characteristics.		
		}
	}
	class over{
		use override;
			public function overrd(){  //ei function kaj korbe cz trait use korle class er own function kaj kore jodi function name same hoy.
				echo "This is override of overrd()function.<br>";			
			}
		}
	$obj_over = new over;
	$obj_over->overrd();
?>
<?php include 'footer.php'?>  