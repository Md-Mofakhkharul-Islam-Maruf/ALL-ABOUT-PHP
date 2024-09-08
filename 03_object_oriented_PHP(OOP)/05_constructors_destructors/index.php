<?php include 'header.php'?>
<?php
	echo "<hr>Constructor and Destructor:<hr><br>";
	
	class nclass{
		public $name;
		public $id;
		
		function __construct($a,$b){
			$this->name=$a;
			$this->id= $b;
			echo "User name is {$this->name} and user Id is {$this->id} *This line is from constructor<br>";
		}
		function __destruct(){
				unset($this->name);
				unset($this->id);//script r kono $id ba $name pabe na cz of unset in destructor
			}
	}
	$uname= "Maruf";
	$uid= "10";
	$obj = new nclass($uname,$uid);
	unset($obj);
	
?>
<?php include 'footer.php'?>  