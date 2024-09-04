<?php include 'header.php'?>
<?php
	echo "<hr>array_push $ array pop:<hr><br>";
	
	$arr= array("maruf","munna");
	array_push($arr, "muhit","Ammu");
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
	
	$arrnew= array("maruf"=>"100","munna"=>"200");
	array_push($arrnew, "muhit","Ammu");
	
	print"<pre>";
	print_r($arrnew);
	print"</pre>";
	
	
	
	$arr2= array("Maruf","Munna","Muhit","Dadu", "dadi");
	array_pop($arr2);
	print"<pre>";
	print_r($arr2);
	print"</pre>";
	
	$arrnew2= array("maruf"=>"100","munna"=>"200");
	array_pop($arrnew2);
	
	print"<pre>";
	print_r($arrnew2);
	print"</pre>";
	
?>
<?php include 'footer.php'?>  