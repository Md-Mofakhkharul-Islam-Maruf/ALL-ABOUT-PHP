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
			
			<hr>
			PHP Form validation:
			<hr>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>email:</td>
						<td><input type="email" name="email"required></td>
					</tr>
					<tr>
						<td>website:</td>
						<td><input type="text" name="website"required></td>
					</tr>
					<tr>
						<td>comment:</td>
						<td><input type="text" name="comment"></td>
					</tr>
					<tr>
						<td>gender:</td>
						<td>
							<input type="radio" name="gender" value="male"required>Male
							<input type="radio" name="gender" value="female"required>Female
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>
				<?php
					$name = $email = $website =$comment= $gender="";
					if($_SERVER['REQUEST_METHOD']=="POST"){
						echo "<br>".$name= validate($_POST['name']);
						echo "<br>".$email= validate($_POST['email']);
						echo "<br>".$website= validate($_POST['website']);
						echo "<br>".$comment= validate($_POST['comment']);
						echo "<br>".$gender= validate($_POST['gender']);
					}
					function validate($data){
						$data= trim($data);
						$data= stripcslashes($data);
						$data= htmlspecialchars($data);
						return $data;
					}
					//<script>alert("hacked")</script>
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