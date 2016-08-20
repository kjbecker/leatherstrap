<?php
  class lsNodeBase{
    protected $htmlNodeBase;
    protected $classList = [];
    
    public function addClass($class){
      $this->classList[] = $class;
      $this->classList = array_unique($this->classList);
    }

    public function removeClass($class){
      $this->classList = array_unique($this->classList);
      unset($this->classList[array_search($class, $this->classList)]);
    }
  }
?>
