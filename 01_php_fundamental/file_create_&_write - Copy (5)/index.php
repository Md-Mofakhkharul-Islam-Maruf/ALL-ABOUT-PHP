<?php include 'header.php'?>
<?php
	echo "<hr>File create and write:<hr><br>";
	
	$filecreate= fopen('create.txt', 'w') or die("error to creating a file!!!");
	$firsttext= "Bangladesh \n";
	fwrite($filecreate, $firsttext);
	
	$sectext= " is a popular country";
	fwrite($filecreate, $sectext);
?>
<?php include 'footer.php'?>