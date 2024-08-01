<?php 
	$fonts="verdana";
	$bgcolor="red";
?>
<!doctype html>
<html>
	<head>
		<title>PHP Syntax</title>
		<style>
			body{font-family:<?php echo $fonts;?>}
		    *{margin: 0 auto;}
			.structure{width: 80%; margin: 0px auto; background: #ddd;}
			.header, .footer{background:<?php echo $bgcolor;?>; color: #fff; text-align: center;    padding:20px;}
			.main{min-height: 620px; padding: 10px}
			.header h2, .footer h2{margin: 0;}
		</style>
	</head>
	
	<body>
		<div class="structure">
			<section class="header">
				<h2>
					<?php 
						echo "Start your Code. . . . .";
					?>
				</h2>
			</section>
			<section class="main">
				<?php
					Echo "Logical Operator:<br>";
					$a=10;
					$b=20;
	
					if($a==10 and $b==20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
	
					if($a==10 && $b==20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
					
					
					
					if($a==10 or $b==20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
	
					if($a==10 || $b==20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
					
					
					if($a==10 xor $b==20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
					
					
					
	
					if($a=10 !== $b=20){
						
						echo "Right<br>";
					}
					else{
						echo "Wrong<br>";
					}
					
				?>
			</section>
			<section class="footer">
				<h2>
					<?php 
						echo "Do anything using PHP";
					?>
				</h2>
			</section>
		</div>
	</body>
</html>