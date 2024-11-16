<?php
class posts implements iterator{
	public $varr;
	private $posts= array();
	public function __construct($posts){
		if(is_array($posts)){
			$this->posts = $posts
		}		
	}
	public function rewind(){
		reset($this->posts)
	}
	public function current(){
		return current($this->posts)
	}
	public function key(){
		return key($this->varr)
	}
	public function next(){
		return next($this->varr)
	}
	public function valid(){
		return($this->current()!== false)
	}
}
?>