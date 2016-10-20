<?php
  class lsForm extends lsComponentBase{
    public function __construct($type = '', $action='', $method='POST'){
      $this->htmlNodeBase = 'form';
      if($type == ''){
        $this->classList[] = '';
      }
      elseif($type == 'inline'){
        $this->classList[] = 'form-inline';
      }
      elseif($type == 'horizontal'){
        $this->classList[] = 'form-horizontal';
      }

      $this->addAttribute('action', $action);
      $this->addAttribute('method', $method);
    }

	public function addInput($input){
		$this->addChild($input);
	}

  }
?>
