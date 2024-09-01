<?php include 'header.php'?>
<?php
	echo "<hr>Error reporting:<hr><br>";
	
	error_reporting(E_WARNING | E_PARSE | E_NOTICE);
	
	$price =  10;
	if($pric == 10){
		echo "Price is $price";
	}else{		
		echo "Price is not $price";
	}
	phpinfo();
?>
<?php include 'footer.php'?>