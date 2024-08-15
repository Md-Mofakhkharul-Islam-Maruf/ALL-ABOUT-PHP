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
				<span style="float: right">
					<hr>
					<?php 
						date_default_timezone_set("Asia/Dhaka");
						echo "Time is: ".date("h:i:sa") ?>
					<hr>
				</span>
				<?php
					echo "<hr>Date and Time:<hr><br>";
					
					echo "Today is: ".date("d-m-y")."<br>";
					echo "Today is: ".date("l")."<br>";
					echo "Default time is: ".date("h:i:sa")."<br>";
					
					date_default_timezone_set("Asia/Dhaka");
					echo "Bangladesh time is: ".date("h:i:sa")."<br>";
					echo date_default_timezone_get();
					
				?>
			</section>
			<section class="footer">
				<h2>
					<?php 
						echo "&copy;".date("Y")."! Do anything using PHP";
					?>
				</h2>
			</section>
		</div>
	</body>
</html>