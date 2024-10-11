<?php include 'header.php'?>
<?php echo "<hr>Preventing extends and overwrite:<hr><br>"; ?> 
<?php
	final class mydata{ //preventing access or overwrite this class by final keyword
		public $name="Maruf";
		public $age="25";
		
		final public function show(){  //preventing access or overwrite this method by final keyword
			echo "My name is $this->name and age is $this->age<br>";
			}
	}
	
	class inherite_mydata extends mydata{
		public $level;
		public function show(){
			echo "My name is $this->name and age is $this->age and level is $this->level";
			}
	}	
	$inobj= new inherite_mydata;
	$inobj->level="Admin";
	$inobj->show();
	
	// NB: This whole script will generate a fatal error because I prevent extend class and method and that is what the learning from this sourch code
 ?>
<?php include 'footer.php'?>  