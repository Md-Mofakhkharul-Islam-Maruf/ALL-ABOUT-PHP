<?php include 'header.php'?>
<?php
	echo "<hr>array_merge:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	$arr2= array("pinaple","kiam","mango","orange");
    //array_multisort($arr, SORT_ASC, $arr2, SORT_ASC);// evabe duita ascending hoy na
	array_multisort($arr);
	array_multisort($arr2);
	
	print"<pre>";
	print_r($arr);
	print"</pre>";
	
	print"<pre>";
	print_r($arr2);
	print"</pre>";
?>
<?php include 'footer.php'?>  