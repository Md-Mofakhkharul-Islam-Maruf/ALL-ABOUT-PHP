<?php include 'header.php'?>
<?php
	echo "<hr>arsort & asort:<hr><br>";
	
	$arr= array(
				"pakisthan"=>"apple",
				"Saudi"=>"cat",
				"Bangladesh"=>"banana"
				);
	arsort($arr);
	foreach($arr as  $key => $value){
		echo "country name $key and frute name $value<br>";
	}
	
	echo "<br>";
	
	asort($arr);
	foreach($arr as  $key => $value){
		echo "country name $key and frute name $value<br>";
	}
	//value ascending and decending akare sajano hoiche r foreach loop er maddhome just key and value akare print kora hse
?>
<?php include 'footer.php'?>  