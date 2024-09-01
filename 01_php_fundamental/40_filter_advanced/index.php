<?php include 'header.php'?>
<?php
	echo "<hr>Filter advanced:<hr><br>";
	
	$int= 150;
	$minint= 1;
	$maxint= 200;
	if(filter_var($int, FILTER_VALIDATE_INT, array("options"=> array("min_range"=>$minint,"max_range"=>$maxint)))){
		echo "It is valid";
	}else{
		echo "it is not valid";
	}
	//Upore nested array er maddhome range ta dhorche bairer array er value hisebe r bairer array er key hocche "options"
	
		echo "<br><br>";

	$url="http://example.com/foo?bar";
    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
		echo "It is valid query string";
	}else{
		echo "it is not valid query string";
	}
?>
<?php include 'footer.php'?>
