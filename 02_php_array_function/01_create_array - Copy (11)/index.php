<?php include 'header.php'?>
<?php
	echo "<hr>Array create:<hr><br>";
	
	//Index Array	
	$name= Array("Maruf","Munna","Muhit");
	$length= count($name);
	for($i=0; $i<$length; $i++){
		echo $name[$i]."<br>";
	}
	
		echo "<br><br>";
	
	//Associative array
	
	$name2= Array( "Maruf" => "24",
				   "Munna" => "18",
				   "Muhit" => "12"
					);
	foreach($name2 as $key => $value){
		echo "Name: $key and Age: $value";
		echo "<br>";
	}
	
		echo "<br><br>";

		
	//Multidimentional array
	$name3= array(
				array("Maruf","Munna","Muhit"),
				array("24","18","12"),
				array("SP","Dr.","Judge")
				);
	echo $name3[0][1];
	//echo $length= count($name3[0])
	//for($k=0; $k<$length; $k++){
		//incomplete
	//}
?>
<?php include 'footer.php'?>