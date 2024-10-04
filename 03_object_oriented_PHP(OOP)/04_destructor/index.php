<?php include 'header.php'?>

<?php echo "<hr>Destructor:<hr><br>"; ?> 

<?php
	class persondetails{
		
		public function details($e){
			echo "Your name is $e<br>";
		}
		public function __destruct(){
			if(empty($e)){
				echo "Destructor works when the object is finished thats mean destructor is the last action of a class. Look the unset object to clear your concept below in your script";
			}
		}
	}
	$persondetailsobj= new persondetails();
	$persondetailsobj->details("Maruf");
	unset($persondetailsobj); //Ei line comment korle destructor kaj korbe na cz tokhon object running thakbe
	
	//Destructor are called also Magic method because it runs automatically when the object will destroyed
 ?>
<?php include 'footer.php'?>  