<?php include 'header.php'?>

<?php echo "<hr>Constructor:<hr><br>"; ?> 

<?php
	class persondetails{
		public $name;
		public $age;
		
		public function __construct($a,$b){ 
			$this->name=$a and $this->age=$b; //Initialize the value in variable through parameter;
		}
		public function details(){
			echo "Your name is $this->name and your age is $this->age";
		}
	}
	$persondetailsobj= new persondetails("Maruf","25"); // Passing value to the construct function though object
	$persondetailsobj->details();
	//Constructor are called also Magic method because it runs automatically
 ?>
<?php include 'footer.php'?>  