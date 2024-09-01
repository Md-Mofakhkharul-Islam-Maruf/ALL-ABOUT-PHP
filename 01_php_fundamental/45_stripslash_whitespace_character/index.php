<?php include 'header.php'?>
<?php
	echo "<hr>Case change:<hr><br>";
	
	if(isset($_POST['text'])){
		$txt= $_POST['text'];
		echo trim($txt);   //trim the space
		//echo trim($txt, " .");
		//echo rtrim($txt, " .");
		//echo ltrim($txt, " .");
	}
?>
<form action="" method="post"> 
	<input type="text" name="text">
	<!--<input type="password" name="text">-->
	<input type="submit" value="submit">
</form>
<?php include 'footer.php'?>