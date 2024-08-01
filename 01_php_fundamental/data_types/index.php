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
					echo "Data Types:......... "."<br>"."01. Integer"."<br>"."02. Float"."<br>"."03. String"."<br>"."04. Array"."<br>"."05. Boolean"."<br>"."06. Null"."<br><br>";
					echo "01. Integer: ";
					$int= 27;
					echo $int."->";
					var_dump($int);
					echo "<br><br>";
					
					echo "02. Float: ";
					$float= 45.987;
					echo $float."->";
					var_dump($float);
					echo "<br><br>";
					
					
					echo "03. String: ";
					$string= "Maruf";
					echo $string."->";
					var_dump($string);
					echo "<br><br>";
					
					
					echo "04. Array: ";
					$arr = array("Maruf","Munna","Muhit");
					var_dump($arr);
					echo "<br><br>";
					
					
					echo "05. Boolean: ";
					$x =(0==0);
					echo $x."->";
					var_dump($x);
					echo "<br><br>";
					
					
					echo "06. Null: ";
					$nu= "My name is Maruf";
					$nu = null;
					var_dump($nu);
					echo "<br><br>";
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