<?php
	class lsButton extends lsComponentBase{
		public function __construct($text, $type="default", $size="md", $block=false, $active=null){
			$this->htmlNodeBase = "button";
			$this->addAttribute("type", "button");
			$this->addClass("btn");
			$this->addClass("btn-" . $type);
			switch($size){
				case "xs":
				case "extra small":
				case "extra-small":
					$this->addClass("btn-xs");
					break;
				case "sm":
				case "small":
					$this->addClass("btn-sm");
					break;
				case "md":
				case "medium":
					$this->addClass("btn-md");
					break;
				case "lg":
				case "large":
					$this->addClass("btn-lg");
					break;
			}
			if($block)$this->addClass("btn-block");
			if($active == null){}
			elseif($active == true){
				$this->addClass('active');
			}
			elseif($active == false){
				$this->addClass("disabled");
			}
			$this->addChild(new lsRawHTML($text));
		}	
	
	
	}
?>
