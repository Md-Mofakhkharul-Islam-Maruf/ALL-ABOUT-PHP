<?php
	class unknown{
		public $v;
		public function __construct(show $get){ // Here 'show' is the class name and $get hold the show classes object. and we write 'show' because we take show class. jehetu amra type hinting niye kaj korchi tai amra ekhane type ta bole disi j type ta holo class type.
			$this->v= $get; // Here we access show class with the $get which hold the show classes object.
			$this->v->qn();
			$this->v->ans();
		}
	}
?>