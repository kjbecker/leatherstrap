<?php 
  class lsImage extends lsComponentBase{
    private $src;
    private $alt;
    private $width;
    private $height;

    public function __construct($src, $alt = 'Image', $type = 'responsive', $width = -1, $height = -1){
      $this->htmlNodeBase = 'img';
      $this->addAttribute('src', $src);
      $this->addAttribute('alt', $alt);
      if($width>0)$this->addAttribute('width', $width);
      if($height>0)$this->addAttribute('height', $height);
      $this->addClass('img-' . $type);
    }
}
