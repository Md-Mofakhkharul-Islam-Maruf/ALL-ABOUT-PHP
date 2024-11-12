<?php include 'header.php'?>
<?php echo "<hr>Object serilization:<hr><br>"; ?> 
<?php
// object serilization holo object er maddhome class er propertyr value niye setake kono file a store kore abar seta ager obostay niye asha.
	class language{
		public $html;
		public $CSS;
		private $PHP;
		protected $JavaScript;
		
		public function __construct(){
			$this->html= "I love html";
			$this->CSS= "I love CSS";
			$this->PHP= "I love PHP";
			$this->JavaScript= "I love JavaScript";
		}
	}
	$obj_language= new language;
	
	$serial= serialize($obj_language); // serialize calsses value.
	$getcont= file_put_contents("programming.txt", $serial); // Create programming.txt file and store value or property from class's through object. 
	
	$putcont= file_get_contents("programming.txt"); // Retrive data from textfile.
	$unserial= unserialize($putcont);// unserialize value.
	echo "<pre>";
	print_r ($unserial); 
	echo "</pre>";
	
?>
<?php include 'footer.php'?>  