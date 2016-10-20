<?php
  class lsComponentBase extends lsNodeBase{
    protected $childrens = [];
    public function addChild($child){
      $this->childrens[] = $child;
    }

    public function build(){
      $html = '<';
      $html .= $this->htmlNodeBase . ' class="';
      foreach($this->classList as $class){
        $html .= $class . " ";
      }
      $html .= '" ';
      foreach($this->attributeList as $attribute){
        $html .= $attribute['name'] . '="' . $attribute['value'] . '" ';
      }
      $html .= '>';

      foreach($this->childrens as $child){
        $html .= $child->build();
      }
      $html .= '</' . $this->htmlNodeBase . '>';
      return $html;
    }

  } 
?>
