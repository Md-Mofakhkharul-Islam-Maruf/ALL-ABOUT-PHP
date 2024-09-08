<?php include 'header.php'?>
<?php
	echo "<hr>key,krsort,ksort:<hr><br>";
	
	$arr= array("apple"=>"500","cat"=>"2kg","banana"=>"12pc","orange"=>"4ta");
	$result=key($arr);//used for printing key
	print"<pre>";
	print_r($result);
	print"</pre>";
	
	ksort($arr);//used for printing in a ascending way
	foreach($arr as $a=> $b){
		echo "key is $a & value is $b<br>";
	}
	echo "<br><br>";
	krsort($arr);//used for printing in a decending way
	foreach($arr as $a=> $b){
		echo "key is $a & value is $b<br>";
	}
?>
<?php include 'footer.php'?>  