<?php
	class lsPagination extends lsComponentBase{
		public function __construct($size = null){
			$this->htmlNodeBase = "ul";
			$this->addClass("pagination");
			switch($size){
				case "sm":
				case "small":
					$this->addClass("pagination-sm");
					break;
				case "lg":
				case "large":
					$this->addClass("pagination-lg");
					break;
			}
			
		}
		public function addBlock($text, $href = '#', $special = null){
			$html = '<li';
			if($special == "disabled"){
				$html .= ' class="disabled"';
			}
			if($special =="active"){
				$html .= ' class="active"';
			}
			$html .= '><a href="' . $href . '">'. $text;
			$html .= '</a></li>';
			$this->addChild(new lsRawHtml($html));
		}
	}
?>
