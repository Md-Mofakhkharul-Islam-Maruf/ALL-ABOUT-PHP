<?php include 'header.php'?>

<?php echo "<hr>Constructor & Destructor:<hr><br>"; ?> 

<?php
	class persondetails{
		public $name;
		public $name2;
		public function __construct($a,$b){
			$this->name=$a;
			$this->name2=$b;
			echo "Your firstname is $this->name and lastname is $this->name2<br>";
		}
		public function __destruct(){
			unset($this->name);
			unset($this->name2);
			echo $this->name; 
		}
	}
	$persondetailsobj= new persondetails("Maruf","Hasan");
	unset($persondetailsobj); // object unset hwar jnno 17 no line a name a kono value r pay nai tai error asche! cz object destroy hwar karone __destruct function kaj korche
 ?>
<?php include 'footer.php'?>  