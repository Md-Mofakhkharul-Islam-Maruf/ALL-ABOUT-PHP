<?php
 class database{
	 private static $instance;
	 public function __construct(){
		 if(!self:: $instance){    //$instance is a default variable used in singleton design pattern
			 self::$instance = $this;
			 echo "Created first insted <br>";
		 }else{
			 echo "Already created <br>";
				return self:: $instance;
		 }
	 }
}// static property access korar somoy amra self use kori
?>