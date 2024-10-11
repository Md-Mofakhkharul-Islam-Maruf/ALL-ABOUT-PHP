<?php include 'header.php'?>
<?php echo "<hr>Inheritance:<hr><br>"; ?> 
<?php
	class mydata{
		public $name="Maruf";
		public $age="25";
		
		public function show(){
			echo "My name is $this->name and age is $this->age<br>";
			}
	}
	
	
	class inherite_mydata extends mydata{ //Inherite main class or creating subclass
		public $level;
		public function show(){
			echo "My name is $this->name and age is $this->age and level is $this->level"; // Here name and age access from main class because of Inherite
			}
	}
	$mydataobj= new mydata();
	$mydataobj->show();
	
	$inobj= new inherite_mydata;
	$inobj->level="Admin"; //new value pass
	$inobj->show(); //Access new class and add extra value
	
 ?>
<?php include 'footer.php'?>  