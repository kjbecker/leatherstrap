<?php
class lsRawHTML{
	private $html;
	public function __construct($html){
		$this->html = $html;
	}
	public function setHTML($html){
		$this->html = $html;
	}
	public function returnHTML(){
		return $this->html;
	}
	public function build(){
		return $this->html;
	}
}
?>
