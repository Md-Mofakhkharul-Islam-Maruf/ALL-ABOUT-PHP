<?php include 'header.php'?>
<?php
	echo "<hr>static method and property<hr><br>";
	
	class nclass{		
		public static $name="Maruf";
			
		static function display(){
			echo self::$name;//static property accessed
			echo "<br> From static method";
		}
	}
	
	//$obj = new nclass();
	nclass::display(); //Accessed static method no need to access with object
	
?>
<?php include 'footer.php'?>  