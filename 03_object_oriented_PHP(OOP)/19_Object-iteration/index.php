<?php include 'header.php'?>
<?php echo "<hr>Object iteration:<hr><br>"; ?> 
<?php
	include 'iteration.php';
	
	$studentobj= new student();
	foreach($studentobj as $key => $value){           // Normal procedure
		echo "$key = $value <br>";
	};
	
	echo "<br><br>Iteration with object:<br>";
	$studentobj->iterator();           //Here we used $studentobj to call iterator() function that inside of student class whice hold classes all property. and that is called by object iteration because we iterate classes public private and protected property that normally can't access without class.
?>
<?php include 'footer.php'?>  