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
					echo"Form required:<br><br>";
					
					
					$name = $email= $website= "";
					$errorname = $erroremail= $errorwebsite= "";		
					if($_SERVER["REQUEST_METHOD"]== "POST"){
						if(empty($_POST["name"]))
						$errorname= "<span style= 'color: red'>Name is required</span>";
						else{
							$name = validate($_POST['name']);
						}
						if(empty($_POST["email"]))
						$erroremail= "<span style= 'color: red'>email is required</span>";
						else{
							$email = validate($_POST['email']);
						}	
						if(empty($_POST["website"]))
						$errorwebsite= "<span style= 'color: red'>Name is required</span>";
						else{
							$website = validate($_POST['website']);
						}						
					}
					function validate($data){
						$data= trim($data);
						$data= stripcslashes($data);
						$data= htmlspecialchars($data);
						return $data;
					}
				?>
				<form action="" method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name"><?php echo $errorname, $name; ?></td>
						</tr>
						
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email"><?php echo $erroremail, $email; ?></td>
						</tr>
						
						<tr>
							<td>website:</td>
							<td><input type="website" name="website"><?php echo $errorwebsite, $website; ?></td>
						</tr>
						
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit"></td>
						</tr>
					</table>
				</form>
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