<?php include 'header.php'?>
<?php
	echo "<hr>Class constant:<hr><br>";
	
	class nclass{		
		const SUN="1000";
			
		function display(){
			echo nclass::SUN;
		}
	}
	
	$obj = new nclass();
	$obj->display();
	
?>
<?php include 'footer.php'?>  