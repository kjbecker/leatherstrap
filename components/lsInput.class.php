<?php
	class lsInput extends lsNodeBase{	
		private $inputType;
		private $label;
		private $style;
		private $inputName;

		public function __construct($inputType, $label, $name, $style=""){
			switch($inputType){
			case "text":
			case "password":
				$this->inputType = $inputType;
				$this->label = $label;
				$this->style = $style;
				$this->inputName = $name;
			}

		}	

		public function build(){	
			switch($this->inputType){
			case "text":
			case "password":
				$div = new lsComponentBase("div");
				$div->addClass("form-group");

				$label = new lsComponentBase("label");
				$label->addAttribute("for", $this->inputName);
				$label->addChild(new lsRawHTML($this->label));

				$div->addChild($label);
				$div->addChild(new lsRawHTML('<input type="' . $this->inputType . '" class="form-control" id="' . $this->inputName . '" name="' . $this->inputName . '">'));
				return $div->build();
			}


		}
	}

?>
