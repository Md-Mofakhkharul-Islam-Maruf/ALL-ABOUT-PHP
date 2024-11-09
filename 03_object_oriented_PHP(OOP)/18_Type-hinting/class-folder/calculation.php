<?php
	class calculation{
		
		public function getvalue(array $take){   //Here we mentioned array for recognize we work with a array type and this is called type hinting.
			foreach($take as $key){
				echo $key[0].": ".$key[1]*$key[2]."<br>";
			}			
		}
	}
?>