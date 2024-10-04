<?php
	class calculation{
	public function add($a,$b){
		echo "Summation of $a and $b is: ".$a+$b."<br>";
	}
	
	public function sub($a,$b){
		echo "Subtruction of $a and $b is: ".$a-$b."<br>";
	}
	
	public function mul($a,$b){
		echo "Multiplication of $a and $b is: ".$a*$b."<br>";
	}
	
	public function div($a,$b){
		echo "Division of $a and $b is: ".$a/$b."<br>";
	}
	}
	$calculationobj= new calculation;
?>