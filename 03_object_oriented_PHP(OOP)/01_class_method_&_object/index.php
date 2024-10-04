<?php include 'header.php'?>
<?php
	echo "<hr>Class, Method and Object:<hr><br>";
	
	class person{
		public $name="Maruf"; //class er vitore joto variable thakbe ta holo class er property
		public $age;
		public $goal;
		
		//class er vitore joto function thakbe ta holo class er method
		
		public function personname(){
			echo "Person name is ".$this->name;         // $this is used as a reference of classes property and it bring the location things
		}
		
		public function personage(){
			echo "<br>Person age is ".$this->age;
		}
		
		public function persongoal($parameter){
			echo "<br>Person goal is ".$this->goal=$parameter; //assign value of parameter
		}
		
		public function personwish($a){
			echo "<br>Person wish is $a";
		}
	}
	$personobj = new person;             // creating Object
	echo $personobj->name."<br>";       // object operator(->) is used to access everything into class
	$personobj->personname();
	$personobj->age="25";              //input value as via as object in age variable
	$personobj->personage();          // call method as via as object
	$personobj->persongoal("Developer"); 
	$personobj->personwish("businessman"); 
?>
<?php include 'footer.php'?>  