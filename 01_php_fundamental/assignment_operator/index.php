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
					Echo "Assignment Operator:<br>";
					$a=10;
					$a+=5;
					$b=5;
					$b-=3;
					$c=20;
					$c*=4;
					$d=100;
					$d/=4;
					
					echo "\$a+=5=".$a." beacuse the initial value of \$a=10<br>";
					echo "\$b-=3=".$b." beacuse the initial value of \$b=5<br>";
					echo "\$c-=4=".$c." beacuse the initial value of \$c=20<br>";
					echo "\$d-=4=".$d." beacuse the initial value of \$d=100<br>";
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