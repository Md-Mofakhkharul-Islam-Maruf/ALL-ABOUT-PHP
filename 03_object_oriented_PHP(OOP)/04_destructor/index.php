<?php include 'header.php'?>
<?php
	echo "<hr>Destructor:<hr><br>";
	
	class nclass{
		public $name;
		public $age;
		public $id;
		
		function __construct($a,$b){
			echo "Constructor created<br>";
			$this->name= $a;
			$this->age= $b;
		}
		function name_age(){
			echo "Name is {$this->name} and person age is {$this->age}<br>";
		}
		function id($b){
			$this->id= $b;
		}
		function __destruct(){
			if(! empty($this->id)){
			echo "Destructor will work when the object of a class will be destroy or unset";
			}
		}
	}
	$obj = new nclass("Maruf","24");
	$obj->name_age();
	$obj->id("12");
	unset($obj);
?>
<?php include 'footer.php'?>  