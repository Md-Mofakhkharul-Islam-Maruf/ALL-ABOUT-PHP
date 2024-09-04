<?php include 'header.php'?>
<?php
	echo "<hr>array_combine:<hr><br>";
	
	$name= array(
					"Maruf"=>"33",
					"Munna"=>"11",
					"Muhit"=>"9"
					);
	if(array_key_exists("Munna", $name)){
		echo "key exists";
	}else{
		echo "key does not exists";
	}
	echo "<br><br>";
	
	$name2= array("Maruf","Munna","Muhit");
	
	if(array_key_exists("3", $name2)){
		echo "key exists";
	}else{
		echo "key does not exists";
	}
	
?>
<?php include 'footer.php'?>  