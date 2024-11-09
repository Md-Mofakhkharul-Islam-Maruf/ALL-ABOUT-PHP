<?php include 'header.php'?>
<?php include 'check_class-and-method.php'?>
<?php echo "<hr>Class & Method Existence:<hr><br>"; ?> 
<?php
	if(class_exists("student")){ //class checking in this line.
		echo "Class exists<br>";
	}else{
		echo "Class is not exists<br>";
	}
	
	if(method_exists($obj_student, "info" )){  //Method checking in this line.
		echo "method exists<br>";
	}else{
		echo "method does not exists<br>";
	}
?>
<?php include 'footer.php'?>  