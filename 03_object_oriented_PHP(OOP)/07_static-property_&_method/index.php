<?php include 'header.php'?>

<?php echo "<hr>Static property and method:<hr><br>"; ?> 

<?php
	class unknown{
		public static $name="Maruf"; //Declear static property
		
		public static function show(){  //Declear static method
			echo "My name is ".self::$name; //Access static property
			}
	}
	unknown::show();
 ?>
<?php include 'footer.php'?>  