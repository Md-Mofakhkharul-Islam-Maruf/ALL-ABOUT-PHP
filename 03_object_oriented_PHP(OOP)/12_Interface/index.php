<?php include 'header.php'?>
<?php echo "<hr>Interface:<hr><br>"; ?> 
<?php

	// Interface means ready method that is usable in any class.
	
	interface school{
		public function school();
	}
	interface college{
		public function college();
	}
	interface versity{
		public function versity();
	}
	
	class student implements school, college, versity{
		
		public function __construct(){
			$this->school();     // reference(call) ready method that declear in this class below
			$this->college();    // reference(call) ready method that declear in this class below
			$this->versity();    // reference(call) ready method that declear in this class below
		}
		
		public function school(){
			echo "I am a school student<br>";
		}
		public function college(){
			echo "I am a college student<br>";
		}
		public function versity(){
			echo "I am a versity student<br>";
		}
	}
	$studentobj= new student();
	
		class teacher implements school, college, versity{
		
		public function __construct(){
			$this->school();     // reference(call) ready method that declear in this class below
			$this->college();    // reference(call) ready method that declear in this class below
			$this->versity();    // reference(call) ready method that declear in this class below
		}
		
		public function school(){
			echo "I am a school teacher<br>";
		}
		public function college(){
			echo "I am a college teacher<br>";
		}
		public function versity(){
			echo "I am a versity teacher<br>";
		}
	}
	$teacherobj= new teacher();
?>
<?php include 'footer.php'?>  