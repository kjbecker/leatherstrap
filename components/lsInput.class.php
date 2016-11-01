<?php
	class lsInput extends lsNodeBase{	
		private $inputType;
		private $label;
		private $style;
		private $inputName;
		private $other;
		public function __construct($inputType, $label, $name, $style="", $other = null){
			switch($inputType){
			case "text":
			case "password":
			case "textarea":
			case "checkbox":
			case "radio":
			case "select":
				$this->inputType = $inputType;
				$this->label = $label;
				$this->style = $style;
				$this->inputName = $name;
				$this->other = $other;
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
			case "textarea":
				$div = new lsComponentBase("div");
				$div->addClass("form-group");

				$label = new lsComponentBase("label");
				$label->addAttribute("for", $this->inputName);
				$label->addChild(new lsRawHTML($this->label));

				$div->addChild($label);
				$div->addChild(new lsRawHTML('<textarea rows="' . $this->other . '" class="form-control" id="' . $this->inputName . '" name="' . $this->inputName . '"></textarea>'));
				return $div->build();

			case "checkbox":
			case "radio":
				if($this->style == "inline"){
				$div = new lsRawHtml('<label class="' . $this->inputType . '-inline"><input type="' . $this->inputType . '" id="' . $this->inputName . '" name="' . $this->inputName . '" value="'. $this->other .'">' . $this->label . '</label>');
				}
				else{
				$div = new lsComponentBase("div");
				$div->addClass($this->inputType);
				$div->addChild = new lsRawHtml('<label class="' . $this->inputType . '-inline"><input type="' . $this->inputType . '" id="' . $this->inputName . '" name="' . $this->inputName . '" value="'. $this->other .'">' . $this->label . '</label>');
				}
				return $div->build();

			case "select":
				$div = new lsComponentBase("div");
				$div->addClass("form-group");
				$label = new lsComponentBase("label");
				$label->addAttribute("for", $this->inputName);
				$label->addChild(new lsRawHtml($this->label));
				$div->addChild($label);
				$select = new lsComponentBase("select");
				$select->addClass("form-control");
				$select->addAttribute("id", $this->inputName);
				$select->addAttribute("name", $this->inputName);
				if($this->style == "multiple"){
				$select->addAttribute("multiple", "");
				}
				foreach($this->other as $option){
				$select->addChild(new lsComponentBase("option",$option));
				}
				$div->addChild($select);
				return $div->build();
			}


		}
	}

?>
