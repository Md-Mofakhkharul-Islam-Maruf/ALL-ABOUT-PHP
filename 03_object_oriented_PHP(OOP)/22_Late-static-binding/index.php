<?php include 'header.php'?>
<?php echo "<hr>Late static binding:<hr><br>"; ?> 
<?php
	class php{
		public static function framework(){
			echo static::getclass()."<br>" ;         //"static::" which allows the method to refer to the calling class rather than the class where it was originally defined. This is why it’s called late static binding.
			
			//echo self::getclass()."<br>" ;    //"self::" in a parent class method, it will always refer to the parent class, regardless of which child class is calling it.  that why ei line er output parent class er getclass() function theke nibe.
		}
		public static function getclass(){
			return __class__;
		}
	}
	
	class childphp extends php{
		public static function getclass(){
			return __class__;
		}
	}
	
	$obj_php = new php;
	$obj_php->framework();
	
	
	$obj_childphp = new childphp;
	$obj_childphp->framework();
?>
<?php include 'footer.php'?>  