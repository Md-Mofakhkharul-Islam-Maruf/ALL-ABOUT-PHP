<?php include 'header.php'?>
<?php
	echo "<hr>Constructor:<hr><br>";
	class nclass{
		public $name;
		public $age;
		function __construct($a,$b){
			echo "Constructor created<br>";
			$this->name= $a;
			$this->age= $b;
		}
		function name_age(){
			echo "Name is {$this->name} and person age is {$this->age}";
		}
	}
	$obj = new nclass("Maruf","24");
	$obj->name_age();
?>
<?php include 'footer.php'?>  