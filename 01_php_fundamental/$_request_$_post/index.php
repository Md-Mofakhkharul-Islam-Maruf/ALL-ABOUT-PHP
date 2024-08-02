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
			<span>$_REQUEST And $_POST<br><br></span>
			
			<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
				<label for="username">Username:</label>
				<input type="text" name="username">
				<input type="submit" value="Submit">
			</form>
				<?php
					if($_SERVER['REQUEST_METHOD']== 'POST'){
						//$name= $_POST['username'];//
						$name= $_REQUEST['username'];
						if(empty($name)){
							echo "<span style= 'color: red'>user name must have value.</span>";
						}
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