<?php
  class lsComponentBase{
    protected $htmlNodeBase;

    protected $classList = [];
    protected $childrens = [];

    private $html;
    public function addBasicChild($type = 'h1', $content = 'Lorem Ipsum'){
      $this->childrens[] = '<' . $type . '>' . $content . '</' . $type . '>';
    }

    public function build(){
      $html = '<';
      $html .= $this->htmlNodeBase . ' class="';
      foreach($this->classList as $class){
        $html .= $class;
      }
      $html .= '">';

      foreach($this->childrens as $child){
        $html .= $child;
      }
      $html .= '</' . $this->htmlNodeBase . '>';
      return $html;
    }

  } 
?>
