<?php
  class lsNodeBase{
    public $htmlNodeBase;
    protected $classList = [];
    protected $attributeList = [];    

    public function setNodeBase($node){
    	$this->htmlNodeBase = $node;
    }
    public function addClass($class){
      $this->classList[] = $class;
      $this->classList = array_unique($this->classList);
    }

    public function removeClass($class){
      $this->classList = array_unique($this->classList);
      unset($this->classList[array_search($class, $this->classList)]);
    }
    public function addAttribute($name, $value){
      $this->attributeList[$name]['name'] = $name;
      $this->attributeList[$name]['value'] = $value;
    }
    public function removeAttribute($name){
      unset($this->attributeList[$name]);
    }
	public function makeWell($size = ''){
		$this->addClass("well");
		switch($size){
			case "lg":
			case "large":
				$this->addClass("well-lg");
				break;
			case "sm":
			case "small":
				$this->addClass("well-sm");
				break;
		}
	}
    public function makeAlert($type = 'danger'){
	$this->addClass("alert");
	switch($type){
		case "success":
			$this->addClass("alert-success");
			break;
		case "info":
			$this->addClass("alert-info");
			break;
		case "warning":
			$this->addClass("alert-warning");
			break;
		case "danger":
			$this->addClass("alert-danger");
			break;
	}
    }
   

  }
?>
