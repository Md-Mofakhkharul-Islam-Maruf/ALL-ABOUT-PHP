<?php include 'header.php'?>
<?php
	echo "<hr>Class, Method and Object:<hr><br>";
	
	class name{
		public $name; //access modifier (public,private, protected)
		public $age="24"; 
		
		public function personname($perameter){
			$this->name="$perameter";
			echo "Your name is: ".$this->name."<br>";
		}
		
		public function personage(){
			echo "Your age is: ".$this->age."<br>";//$this is used for access of classes property and method
		}
	}
	$nameofobj= new name;
	$nameofobj->personname("maruf");
	$nameofobj->personage();
	echo $nameofobj->name."<br>";//(->) called by object operator
?>
<?php include 'footer.php'?>  