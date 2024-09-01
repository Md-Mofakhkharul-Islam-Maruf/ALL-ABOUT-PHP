<?php include 'header.php'?>
<?php
	echo "<hr>Error Exception with trycatch:<hr><br>";
	
	function numcheck($num){
		if($num>1){
			throw new Exception("The number is greter than 1");
		}
		return true;
	}
		try{
			numcheck(2);
			echo "The number is less than 1";
		}
		catch(Exception $msg){
			echo "Message: ".$msg->getMessage();
		}

?>
<?php include 'footer.php'?>