<?php include 'header.php'?>
<?php
	echo "<hr>array_walk:<hr><br>";
	
	function myfunc($a, $b){
		echo "$a comes from $b<br>";
	}
	$arr= array(
				"pakisthan"=>"apple",
				"Saudi"=>"cat",
				"Bangladesh"=>"banana"
				);
	array_walk($arr, "myfunc");
	//first array er value then key niye function a argument pass kore
?>
<?php include 'footer.php'?>  