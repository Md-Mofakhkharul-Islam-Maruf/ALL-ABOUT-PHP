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
					Echo "Superglobal variables(\$GLOBALS):<br><br>";
					$x=1;
					$y=2;
					function sum(){
						echo $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
					}
					sum();
					echo "<br>".$z."<br>";
					
					Echo "Superglobal variables(\$_SERVER):<br><br>";
					Echo $_SERVER['PHP_SELF'];
					echo "<br>";
					Echo $_SERVER['SCRIPT_NAME'];
					echo "<br>";
					
					Echo $_SERVER['SERVER_NAME'];
					echo "<br>";
					
					Echo $_SERVER['HTTP_USER_AGENT'];
					echo "<br>";
					
					Echo $_SERVER['SERVER_ADDR'];
					echo "<br>";
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