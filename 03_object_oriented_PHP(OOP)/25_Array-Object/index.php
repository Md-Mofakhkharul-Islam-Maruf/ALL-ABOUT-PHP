<?php include 'header.php'?>
<?php echo "<hr>Array Object:<hr><br>"; ?> 
<?php
		$language= array("Html","Css","Javascript","Php");   // Define an array
		
		$object= new ArrayObject($language);               // create an array object with the name $object and a built-in function arrayobject whice take the array name $ language as a parameter.
		
		$iterator = $object->getIterator();            // getIterator built-in function iterate the arrays element through object and stored in $iterator.
		
		
		while($iterator->valid()){                 // valid function check the element within $iterator
			echo $iterator->current()."<br>";    // print iterator current value
			$iterator->next();                  // go for next move.
		}
?>
<?php include 'footer.php'?>  