<?php include 'header.php'?>
<?php
	echo "<hr>File Open Close:<hr><br>";
	
	$readfl =fopen("text.txt", "r") or die("file not found");
	echo fread($readfl, filesize("text.txt"))."<br>";
	fclose($readfl);
	
	
	$readfl2 =fopen("text2.txt", "r") or die("file not found");
	echo fgets($readfl2, filesize("text2.txt"))."<br>";
	fclose($readfl2);
	
	$readfl2 =fopen("text2.txt", "r") or die("file not found");
	echo fgetc($readfl2)."<br>";
	fclose($readfl2);
	
	$readfl2 =fopen("text2.txt", "r") or die("file not found");
	while (!feof($readfl2)){
		echo fgets($readfl2)."<br>";
	}
	
	$readfl2 =fopen("text2.txt", "r") or die("file not found");
	while (!feof($readfl2)){
		echo fgetc($readfl2)."<br>";
	}
?>
<?php include 'footer.php'?>