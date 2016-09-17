<?php
  class lsNodeBase{
    protected $htmlNodeBase;
    protected $classList = [];
    protected $attributeList = [];    
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
  }
?>
