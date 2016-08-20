<?php
  class lsCol extends lsComponentBase{
    public $colWidth;
    public function __construct($size = 'xs', $width = 12){
      $this->htmlNodeBase = 'div';
      $this->colWidth = $width;
      $this->classList[] = 'col-' . $size . '-' . $width;
    } 
  }
?>
