<?php include 'header.php'?>
<?php echo "<hr>Access Modifier:<hr><br>"; ?> 
<?php
	class admin{
		public $name="Maruf"; // Access from anywhere in this script
		private $age="25"; //Access from only main class.
		protected $level="Admin";// Access from main and subclass
		
		public function show(){
			echo "Name: $this->name, Age: $this->age, Level: $this->level";
		}
	}
	$adminobj= new admin;
	$adminobj->show();
	
	
	class admin2 extends admin{
		
		public function show(){
			echo "Name: $this->name, Age: $this->age, Level: $this->level";
		}
	}
	
	$admin2obj= new admin2;
	$admin2obj->show();
	echo $adminobj->Level;
	echo $adminobj->name;
	echo $adminobj->age;// this line show a error
?>
<?php include 'footer.php'?>  