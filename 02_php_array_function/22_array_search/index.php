<?php include 'header.php'?>
<?php
	echo "<hr>array_merge:<hr><br>";
	
	$arr= array("a"=>"apple","c"=>"cat","b"=>"banana","orange");
	if(isset($_POST['text'])){
		$text= $_POST['text'];
		$result=array_search($text,$arr);
		echo "you have search $text and your key is: $result";
	}
?>
<form action="" method="post">
<input type="text" name="text">
<input type="submit" value="submit">
</form>
<?php include 'footer.php'?>  