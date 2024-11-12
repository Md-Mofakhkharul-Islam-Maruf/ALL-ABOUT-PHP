<?php include 'header.php'?>
<?php echo "<hr>Standard php library:<hr><br>"; ?> 
<?php
		$language= array("Html","Css","Javascript","Php");   // Define an array
		
		$iterate= new ArrayIterator($language);
		//$limit= new LimitIterator($iterate, 0, 2); // this line fixed array element limit
		$cachingiterate= new cachingiterator($iterate); // this line caching array valule
		foreach($iterate as $key){
			echo $key;
			if($cachingiterate->hasnext()){
				echo ", ";
			}
		}
?>
<?php include 'footer.php'?>  