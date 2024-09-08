<?php include 'header.php'?>
<?php include 'calculate.php'?>
<?php
	echo "<hr>Class, Method and Object:<hr><br>";
	
	if(isset($_POST['submit'])){
		$num1= $_POST['number1'];
		$num2= $_POST['number2'];
		$objofcalculate->add($num1, $num2);
		$objofcalculate->sub($num1, $num2);
		$objofcalculate->mul($num1, $num2);
		$objofcalculate->div($num1, $num2);
	}
	
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number: </td>
			<td><input type="number" name="number1"></td>
		</tr>
		<tr>
			<td>Enter the second number: </td>
			<td><input type="number" name="number2"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" name="submit"></td>
		</tr>
	</table>
</form>
<?php include 'footer.php'?>  