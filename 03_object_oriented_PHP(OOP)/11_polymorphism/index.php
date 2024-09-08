<?php include 'header.php'?>
<?php
	echo "<hr>Polymorphism<hr><br>";// Polymorphism is basicilly access from main class and overwrite
	
	class data{		
		public $name;
		
		function display($a){
			$this->name=$a;
			echo "Everithing is nice: {$this->name}<br>";
		}
	}
	
	class detum extends data{
		function display($a){
			$this->name=$a;
			echo "Everithing is nice: {$this->name}<br>";
		}
	}
	$objdata= new data;
	$m="Maruf";
	$objdata->display($m);
	
	$objdetum= new detum;
	$h="Mehedi";
	$objdetum->display($h);
?>
<?php include 'footer.php'?>  