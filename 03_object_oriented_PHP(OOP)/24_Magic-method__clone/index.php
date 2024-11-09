<?php include 'header.php'?>
<?php echo "<hr>Magic methode __clone:<hr><br>"; ?> 
<?php
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
		public function __clone(){ // we use this built-in function to ensure that the object must have coled. and we access this property or method which we access outside the class to oversure that the object must have cloned.
			$random_obj= new language;
			$random_obj->setframework($this->framework);
			return $random_obj;
		}
	}
	
	$obj_language= new language;
	
	$obj_language->setl("php");
	$obj_language->setframework("Laravel");
	
	$new_obj_language= clone $obj_language;
	$new_obj_language->setl("java");
	$new_obj_language->setframework("mernstack");
	
	
	echo $obj_language->getl();
	echo $obj_language->getframework();
	
	echo $new_obj_language->getl();
	echo $new_obj_language->getframework();
	
?>
<?php include 'footer.php'?>  