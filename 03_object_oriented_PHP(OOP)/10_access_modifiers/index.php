<?php include 'header.php'?>
<?php
	echo "<hr>Acess Modifire<hr><br>";
	
	class accessmod{		
		public $name="Maruf";
		private $id="01";
		protected $age="24";
		
		function display(){
			echo "Private property only accessed in own class. example: {$this->id}<br>";
		}
	}
	
	
	class accessmod2 extends accessmod{
		function displayy(){
			echo "Protected property accessed in main and child class also. example: {$this->age}<br>";//private property accessed
		}
	}
	$objaccessmod= new accessmod;
	$objaccessmod->display();
	
	$objaccessmod2= new accessmod2;
	$objaccessmod2->displayy();
	
	echo "Public property accessed from anywhere in script. example: ".$objaccessmod->name;//public property accessed
?>
<?php include 'footer.php'?>  