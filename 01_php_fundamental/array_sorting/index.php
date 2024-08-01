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
					Echo "Array Sorting:<br><br>";
					
					Echo "sort:<br>"; 
					$name= array('Maruf','Munna','Muhit',"Hasan");
					sort($name);
					$length= count($name);
					for($i=0; $i<$length; $i++){
						echo $name[$i]."<br>";
					}
					
					Echo "<br>sort:<br>"; 
					$number= array(1,6,8,4,9,2);
					sort($number);
					$length= count($number);
					for($i=0; $i<$length; $i++){
						echo $number[$i]."<br>";
					}
					
					Echo "<br>reverse sort:<br>"; 
					$number= array(1,6,8,4,9,2);
					rsort($number);
					$length= count($number);
					for($i=0; $i<$length; $i++){
						echo $number[$i]."<br>";
					}
					
					Echo "<br>ksort:<br>"; 
					$name= array('Maruf'=>"20",'Munna'=>"5",'Muhit'=>"30");
					ksort($name);
					foreach($name as $key=> $value){
						echo "key=> ".$key." and value=>".$value."<br>";
					}
					
					Echo "<br>asort:<br>"; 
					$name= array('Maruf'=>"20",'Munna'=>"5",'Muhit'=>"30");
					asort($name);
					foreach($name as $key=> $value){
						echo "key=> ".$key." and value=>".$value."<br>";
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