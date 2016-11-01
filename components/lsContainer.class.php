<?php
  class lsContainer extends lsComponentBase{
    public function __construct($type = ''){
      $this->htmlNodeBase = 'div';
      if($type == ''){
        $this->classList[] = 'container';
      }
      elseif($type == 'fluid'){
        $this->classList[] = 'container-fluid';
      }
    }
  }
?>
