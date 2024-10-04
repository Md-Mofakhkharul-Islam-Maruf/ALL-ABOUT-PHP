<?php include 'header.php'?>

<?php echo "<hr>Work with Method and Object:<hr><br>"; ?>

<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number:</td>
			<td><input type="number" name="num1"></td>
		</tr>
		
		<tr>
			<td>Enter the second number:</td>
			<td><input type="number" name="num2"></td>
		</tr> 
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>

<?php
	include 'calculation.php';
	if(isset($_POST["submit"])){
		$firstnum= $_POST['num1'];
		$secnum= $_POST['num2'];
		
		if(empty($firstnum)or empty($secnum)){
			echo "Input number!";
		}else{	
			echo "First number is $firstnum and Second number is $secnum<br>";
			$calculationobj->add($firstnum,$secnum);
			$calculationobj->sub($firstnum,$secnum);
			$calculationobj->mul($firstnum,$secnum);
			$calculationobj->div($firstnum,$secnum);
		}
	}
 ?>
<?php include 'footer.php'?>  