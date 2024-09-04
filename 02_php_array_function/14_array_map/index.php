<?php include 'header.php'?>
<?php
	echo "<hr>array_map:<hr><br>";
	
	function tvalue($takevalue){
		return $store = $takevalue+$takevalue;
	}
	$arr = array("1","3","5","6");
	
	print"<pre>";
	print_r(array_map("tvalue", $arr));
	print"</pre>";
	
	$name= array(
					"33"=>"Maruf",
					"11"=>"Munna",
					"9"=>"Muhit"
					);
	function printvalue($printval){
		return $v = strtoupper($printval);
		
	}
	
    print_r(array_map("printvalue", $name));
	print"<pre>";
	print"</pre>";
	
	//array_map muloto use kora hoy array er maddhome j value gulo kono function a pathano hoy ta abar array format a print koranor jonno.
?>
<?php include 'footer.php'?>  