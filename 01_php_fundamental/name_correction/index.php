<?php include 'header.php'?>
<?php
	echo "<hr>Name correction:<hr><br>";
					
	
	$name= "Cookie";
    //echo strtolower($name)."<br>";
	//echo ucwords(str_replace(' ','_',$name))."<br>";
    echo str_replace(' ', '_', strtolower($name));
?>	
<?php include 'footer.php'?>