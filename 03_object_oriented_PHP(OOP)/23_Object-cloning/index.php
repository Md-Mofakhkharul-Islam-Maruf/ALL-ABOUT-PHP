<?php include 'header.php'?>
<?php echo "<hr>Object clonning:<hr><br>"; ?> 
<?php
    //In PHP, object cloning creates a copy of an object. You can clone an object using the clone keyword, which creates a shallow copy of the original object.
   
	class language{
		public $namel;
		public $framework;
		
		public function setl($take){
			$this->namel= $take;
		}
		public function getl(){
			return $this->namel."<br>";
		}
		
		public function setframework($take){
			$this->framework= $take;
		}
		public function getframework(){
			return $this->framework."<br>";
		}
	}
	
	$obj_language= new language;
	
	$obj_language->setl("php");
	$obj_language->setframework("Laravel");
	
	$new_obj_language= clone $obj_language;  // Here we clonning Object with the keyword clone 
	$new_obj_language->setl("java");     // In this line we set new value to the framework setl() through new object.
	$new_obj_language->setframework("mernstack");
	
	
	echo $obj_language->getl();    // This line and the next line will show previous setup value 
	echo $obj_language->getframework();value 
	
	echo $new_obj_language->getl();  // This line and the next line will show new setup value with the help of new object.
	echo $new_obj_language->getframework();
	
?>
<?php include 'footer.php'?>  