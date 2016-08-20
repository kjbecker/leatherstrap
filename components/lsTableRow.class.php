<?php
  class lsTableRow extends lsNodeBase{
    private $cells = [];
    
    public function __construct($context = '', $cells = []){
      $this->classList[] = $context;
      $this->addCells($cells);
    }
    
    public function addCell($text){
      $this->cells[] = $text;
    }

    public function addCells($cells = []){
      foreach($cells as $cell){
        $this->addCell($cell);
      }
    }

    public function build($head = false){
      if($head){
        $node = 'th';
      }
      else{
        $node = 'td';
      }
  
      $html = '<tr class="';
      foreach($this->classList as $class){
        $html .= $class;
      }
      $html .= '">';
      foreach($this->cells as $cell){
        $html .= '<' . $node . '>' . $cell . '</' . $node .'>';
      }
      $html .= '</' . $node . '>';
      return $html;
    }
  }
?>
