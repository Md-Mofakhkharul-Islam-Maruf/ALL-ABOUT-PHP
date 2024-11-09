<?php	
	class student{
		
		public $name="Maruf";
		public $age="24";
		private $class="16";
		protected $level="very good";
		
		public function iterator(){
			foreach($this as $key => $value){
				echo "$key: $value <br>";
			}
		}
	}
	
?>