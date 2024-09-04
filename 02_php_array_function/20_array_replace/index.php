<?php include 'header.php'?>
<?php
	echo "<hr>array_replace:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	$arr2= array("pinaple","kiam","mango","orange");
	$arr3= array("cow","dog","zebra","eliphant");
	$result=array_replace($arr,$arr2,$arr3);
	
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	$arrn= array("apple","cat","banana");
	$arrn2= array("pinaple","kiam","orange");
	$result2=array_replace($arrn,$arrn2);
	
	print"<pre>";
	print_r($result2);
	print"</pre>";
	
	
	
	$arrnn= array("a"=>"10","b"=>"20","kkk");
	$arrnn2= array("a"=>"pinaple","kim","orange");
	$result22=array_replace($arrnn,$arrnn2);
	
	print"<pre>";
	print_r($result22);
	print"</pre>";
	
	
?>
<?php include 'footer.php'?>  