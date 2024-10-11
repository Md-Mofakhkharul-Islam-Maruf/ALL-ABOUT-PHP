<?php include 'header.php'?>

<?php echo "<hr>Class constants:<hr><br>"; ?> 

<?php
	class unknown{
		const name="Mofakhkharul Islam Maruf"; //constants syntax and its value can't be changed.
		
		public function show(){
			echo "My name is ".unknown::name; //Access constants
			}
	}
	
	$unknownobj= new unknown();
	$unknownobj->show();
 ?>
<?php include 'footer.php'?>  