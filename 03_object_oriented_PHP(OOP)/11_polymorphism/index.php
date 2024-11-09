<?php include 'header.php'?>
<?php echo "<hr>Polymorphism:<hr><br>"; ?> 
<?php
echo "When I use polymorphism, a single method call can work with multiple types of objects, and each type can provide its own specific behavior for that method.<br>";
 
	class admin{
		public function show(){
			echo "From main function<br>";
		}
	}
	class admin2 extends admin{
		public function show(){
			echo "From admin2 function<br>";
		}
	}
	class admin3 extends admin{
		public function show(){
			echo "From admin3 function<br>";
		}
	}
    
	$adminobj= new admin();
	$adminobj-> show();
	
	$adminobj2= new admin2();
	$adminobj2-> show();
	
	$adminobj3= new admin3();
	$adminobj3-> show();
?>
<?php include 'footer.php'?>  