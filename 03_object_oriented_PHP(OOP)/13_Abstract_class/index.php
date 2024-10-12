<?php include 'header.php'?>
<?php echo "<hr>Abstruct class:<hr><br>"; ?> 
<?php

	// A class that cannot be instantiated directly. It serves as a blueprint for other classes, containing abstract methods that must be implemented by subclasses. abstract class polymorphism facilate kore.
	
	abstract class student{
		
		public $name="Maruf";
		public $age="25";
		
		public function view(){
			echo "Name is $this->name and age is $this->age<br>";
		}
		abstract public function show();  //abstract method must not contain body and must withing abstract class
	}
	
	class teacher extends student{
		public function show(){  // abstract function overwrite from abstract class. 
			return parent::view(); // parent class er view method access kora hoyeche.
		}
	}
	$teacherobj= new teacher(); // Abstract class must not have object and this object is extends classes object.
	$teacherobj->show(); // extend classes method call.
?>
<?php include 'footer.php'?>  