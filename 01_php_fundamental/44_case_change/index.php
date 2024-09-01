<?php include 'header.php'?>
<?php
	echo "<hr>Case change:<hr><br>";
	
	if(isset($_POST['text'])){
		$txt= $_POST['text'];
		//echo strtoupper($txt);
		//echo strtolower($txt);
		//echo ucfirst($txt);
		echo ucwords($txt);
	}
?>
<form action="" method="post"> 
	<input type="text" name="text" value="<?php echo $txt?>">
	<input type="submit" value="submit">
</form>
<?php include 'footer.php'?>