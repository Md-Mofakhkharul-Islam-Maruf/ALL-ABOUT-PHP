<?php include 'header.php'?>
<?php
	echo "<hr>Preventing from Extending & Overriding With Final Keyword<hr>";
	
	class final persondata{		//this code will not work because we use "final" keyword to stop extend this class look the first echo for clear concept
		public $name;
		public $id;
		
		function __construct($a,$b){
			$this->name= $a;
			$this->id= $b;
		}
		function final display(){     //this method will not work because we use "final" keyword to stop extend this methode look the first echo for clear concept
			echo "<br>Person name is {$this->name} and person id {$this->id}<br>";
		}
	}
	
	
	class admin extends persondata{
		public $level;	
		
		function display(){
			echo "<br>Person name is {$this->name} and person id {$this->id} and user level is {$this->level}<br>";
		}
	}
	$m="Maruf";
	$n="24";
	$persondataobj= new persondata($m,$n);
	$persondataobj->display();
	
	$adminobj= new admin($m, $n);
	$adminobj->level="Administrator";
	$adminobj->display();//same method child class a add kore main class er display() method ta overwrite kora hoice.
?>
<?php include 'footer.php'?>  