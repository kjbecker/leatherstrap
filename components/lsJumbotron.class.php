<?php
  class lsJumbotron extends lsComponentBase{ 
    public function __construct($type = ''){
      $this->htmlNodeBase = 'div';
      $this->addClass('jumbotron');
    }
  }
?>
