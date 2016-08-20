<?php 
  class lsImage extends lsNodeBase{
    private $src;
    private $alt;
    private $width;
    private $height;

    public function __construct($src, $alt = 'Image', $type = 'responsive', $width = -1, $height = -1){
      $this->src = $src;
      $this->alt = $alt;
      $this->width = $width;
      $this->height = $height;
      $this->classList[] = 'img-' . $type;
    }

    public function build(){
      $html = '<img class="';
      foreach($this->classList as $class){
        $html .= $class . ' ';
      }
      $html .= '" src="' . $this->src . '" alt="' . $this->alt . '" ';
      if($this->width > 0) $html .= 'width="' . $this->width . '" '; 
      if($this->height > 0) $html .= 'height="' . $this->height . '" ';
      $html .= '>';
      return $html;

    }
}
