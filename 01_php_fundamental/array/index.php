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
					Echo "Array:<br><br>";
					
					Echo "Indexed Array:<br>"; 
					$number= array(1,2,3,4,5,6);
					echo $number[4]."<br>";
					
					echo count($number)."<br>";
					Echo "print value of array:<br>"; 
					
					$store= count($number);
					for($i=0; $i < $store; $i++){
						Echo $number[$i]."<br>";
					}
					
					$n= array(4,5,6,7,9,2,8,3,5,7,6,5);
					$length= count($n);
					for($i=0; $i < $length; $i++){
						echo $n[$i]."<br>";
					}
					
					Echo "<br><br>";
					$name= array('Maruf'=>'24','Munna'=>'18','Muhit'=>'12');
					foreach($name as $na => $ag){
						Echo "$na => $ag";
						Echo "<br>";
					}
					
					
					Echo "Multi dimentioanal Array:<br>"; 
					$multi= array(
									array("Maruf","munna","muhit"),
									array("20","30","40"),
									array("Apple","Mango","Banana")
					);
					echo $multi[2][2];
					
					Echo "<br><br>";
					$arr= array(
									array("Maruf","munna","muhit"),
									array("20","30","40"),
									array("Apple","Mango","Banana"),
									array("Man","Tiger","Lion")
					);
					for($row = 0; $row < 4; $row++){
						Echo "Array no $row: <br>";
						for($col=0; $col<3; $col++){
							echo "<ul>";
								echo "<li>";
								echo $arr[$row][$col]."<br>";							
								echo "</li>";
							echo "</ul>";
						}
						
								echo "<br>";
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