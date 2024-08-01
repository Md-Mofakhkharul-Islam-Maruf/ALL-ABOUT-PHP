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
					echo "01. Arithmetic operator.<br>
						  02. Assignment operator.<br>
				          03. Comparison operator.<br>
				          04. Increment/ Decrement operator.<br>
				          05. Logical operator.<br>
				          06. String operator.<br>
				          07. Array operator.<br><br>";
					
					$a=10;
					$b=2;
					echo "01. Use case of Arithmetic operator:<br> $a+$b=".$a+$b."<br>";
					echo "$a-$b=".$a-$b."<br>";
					echo "$a*$b=".$a*$b."<br>";
					echo "$a/$b=".$a/$b."<br>";
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