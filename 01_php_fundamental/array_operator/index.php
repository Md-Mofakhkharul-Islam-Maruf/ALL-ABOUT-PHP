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
					Echo "Array Operator:<br>";
					$x = array("a" => "maruf", "b" => "munna");
					$y = array("c" => "muhit", "d" => "hasan");
					var_dump ($x+$y);
					echo "<br>";
					var_dump ($x==$y);
					
					$m = array("c" => "muhit", "d" => "hasan");
					$n= array("c" => "muhit", "d" => "hasan");
					echo "<br>";
					var_dump ($m==$n);
					echo "<br>";
					
					var_dump ($m!=$n);
					echo "<br>";
					var_dump ($m===$n);
					echo "<br>";
					var_dump ($m!==$n);
					
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