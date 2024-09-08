<?php include 'header.php'?>
<?php
	echo "<hr>Interface<hr><br>";// interface is basicilly creted method that need to be used or overwrite
	
	interface school{
		function myschool();
	}
	
	interface college{
		function mycollege();
	}
	
	interface versity{
		function myversity();
	}
	
	
	class data implements school,college,versity{
		function __construct(){
			$this->myschool();
			$this->mycollege();
			$this->myversity();
		}
		
		function myschool(){
			echo "I am a school student.<br>";
		}
		function mycollege(){
			echo "I am a college student.<br>";
		}
		function myversity(){
			echo "I am a versity student.<br>";
		}
	}
	
		class student implements school,college,versity{
		function __construct(){
			$this->myschool();
			$this->mycollege();
			$this->myversity();
		}
		
		function myschool(){
			echo "I am a school teacher.<br>";
		}
		function mycollege(){
			echo "I am a college teacher.<br>";
		}
		function myversity(){
			echo "I am a versity teacher.<br>";
		}
	}
	$obj= new data;
	echo "<br>";
	$obj2= new student;
	
?>
<?php include 'footer.php'?>  