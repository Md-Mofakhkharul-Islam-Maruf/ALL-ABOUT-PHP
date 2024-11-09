<?php include 'header.php'?>
<?php echo "<hr>__CLASS__ and get_class():<hr><br>"; ?> 
<?php
	class php{
		public function original(){
			echo "Class name is ".__CLASS__."<br>";      // this __CLASS__  keyword hold the class name
			echo "Class name is ".get_class($this)."<br>";       // This get_class() hold class name through object of class.  Mane ai function j object diye class kora hobe sei object er class show korbe jmn ei line access kora hoice subclass er object diye tai ei function subclass er name show korbe.
		}
	}
	
	class child_php extends php{
		public function duplicated(){
			echo "Class name is ".__CLASS__." class <br>";
			echo "Class name is ".get_class($this)." class<br>";
		}
	}
	$obj_php = new child_php();
	$obj_php->original();
	$obj_php->duplicated();
?>
<?php include 'footer.php'?>  