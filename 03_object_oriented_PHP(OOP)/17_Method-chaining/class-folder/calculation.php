<?php
	class calculation{
		
		public $first_number;
		public $second_number;
		public $result;
		
		public function getvalue($a, $b){
			$this->first_number= $a;
			$this->second_number= $b;
			return $this;
		}
		
		public function calculate(){
			$result= $this->first_number + $this->second_number;
			return $result;
		}
	}
?>