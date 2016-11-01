<?php
  class lsText extends lsNodeBase{
    protected $cont;
    
    public function __construct($nodeBase = 'h1', $content = '!!Default Test Content!!', $class = ''){
      $this->htmlNodeBase = $nodeBase;
      $this->cont = $content;
      $this->classList[] = $class;
    }
    
    public function build(){
      $html = '<';
      $html .= $this->htmlNodeBase . ' class="';
      foreach($this->classList as $class){
        $html .= $class . ' ';
      }
      $html .= '">';
      $html .= $this->cont;
      $html .= '</' . $this->htmlNodeBase . '>';
      return $html;
    }
  }
?>
