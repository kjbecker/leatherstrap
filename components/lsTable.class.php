<?php
  class lsTable extends lsNodeBase{
    private $responsive = false;
    private $headRow;
    private $rows = [];

    public function __construct($tabletype = ''){
      if($tabletype == 'responsive'){
        $this->responsive = false;
      }
      else{
        $this->htmlNodeBase = 'table';
      }
      $this->classList[] = 'table';
    }
    public function setHeadRow($row){
      $this->headRow = $row;  
    }

    public function addRow($row){
      $this->rows[] = $row;
    }
    
    public function setStriped(){
      $this->addClass('table-striped');
    }

    public function unsetStriped(){
      $this->removeClass('table-striped');
    }
   
    public function setBordered(){
      $this->addClass('table-bordered');
    }

    public function unsetBordered(){
      $this->removeClass('table-bordered');
    }
    
    public function setHover(){
      $this->addClass('table-hover');
    }

    public function unsetHover(){
      $this->removeClass('table-hover');
    }
    
    public function setCondensed(){
      $this->addClass('table-condensed');
    }

    public function unsetCondensed(){
      $this->removeClass('table-condensed');
    }

    public function build(){
      $html = '';
      if($this->responsive){
        $html .= '<div class="table-responsive">';
      } 
      $html .= '<table class="'; 
      foreach($this->classList as $class){
        $html .= $class . ' ';
      }
      $html .= '">';
      $html .= '<thead>';
      $html .= $this->headRow->build(true);
      $html .= '</thead><tbody>';
      foreach($this->rows as $row){
        $html .= $row->build();
      }
      $html .= '</tbody></table>';
      if($this->responsive){
        $html .= '</div>';
      } 
      return $html;
    } 
  }

