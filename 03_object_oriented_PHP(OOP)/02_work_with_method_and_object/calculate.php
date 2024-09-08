<?php
	class calculate{
		function add($a, $b){
			echo "Addition of $a and $b is: ".($a+$b)."<br>";
		}
		function sub($a, $b){
			echo "Subtruction of $a and $b is: ".($a-$b)."<br>";
		}
		function mul($a, $b){
			echo "Multiplication of $a and $b is: ".($a*$b)."<br>";
		}
		function div($a, $b){
			echo "Division of $a and $b is: ".($a/$b)."<br>";
		}
	}
	$objofcalculate= new calculate;
?>